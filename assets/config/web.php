<?php
session_start();

require_once("db_config.php");
require_once("config.php");
require_once("functions.php");

$username = "";
$password = "";
$passwordConfirm = "";
$firstname = "";
$lastname = "";
$email = "";
$action = "";

$action = $_POST["action"];

if ($action != "" AND in_array($action, $actions)) {

    switch ($action) {
        case "login":

            $username = trim($_POST["username"]);
            $password = trim($_POST["password"]);

            if (!empty($username) AND !empty($password)) {    
                $data = checkUserLogin($username, $password);

                if ($data AND is_int($data['id_user'])) {
                    // session_regenerate_id();
                    $_SESSION['username'] = $username;
                    $_SESSION['id_user'] = $data['id_user'];
                    $_SESSION['user_email'] = $data['email'];

                    require_once('mail/Mobile-Detect-2.8.39/Mobile_Detect.php');
                    $detect = new Mobile_Detect();

                    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

                    $ipAddress = getIpAddress();
                    $userAgent = $_SERVER["HTTP_USER_AGENT"];
                    $accept = $_SERVER["HTTP_ACCEPT"];

                    global $dsn, $pdoOptions;
                    $pdo = connectDatabase($dsn, $pdoOptions);

                    $sql = "INSERT INTO logs(user_id, device_type, http_accept, http_user_agent, ip_address) VALUES (:id, :device_type, :http_accept, :user_agent, :ip_address)";

                    $query = $pdo->prepare($sql);
                    $query->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
                    $query->bindParam(':device_type', $deviceType, PDO::PARAM_STR);
                    $query->bindParam(':http_accept', $accept, PDO::PARAM_STR);
                    $query->bindParam(':user_agent', $userAgent, PDO::PARAM_STR);
                    $query->bindParam(':ip_address', $ipAddress, PDO::PARAM_STR);
                    $query->execute();

                    $lastInsertedId = $pdo->lastInsertId();

                    if ($lastInsertedId > 0) {
                        redirection('../../index.php');
                    } 

                } else {
                    redirection('../../login.php?m=2');
                }

            } else {
                redirection('../../login.php?m=1');
            }
            break;


        case "register" :

            if(isset($_POST['username'])) {
                $username = trim($_POST["username"]);
            }
           
            if(isset($_POST['firstname'])) {
                $firstname = trim($_POST["firstname"]);
            }

            if(isset($_POST['lastname'])) {
                $lastname = trim($_POST["lastname"]);
            }

            if (isset($_POST['password'])) {
                $password = trim($_POST["password"]);
            }

            if (isset($_POST['passwordConfirm'])) {
                $passwordConfirm = trim($_POST["passwordConfirm"]); 
            } 
           
            if (isset($_POST['email'])) {
                 $email = trim($_POST["email"]);
            }

            if (empty($username)) {
                redirection('../../register.php?m=1');
            }

            if (empty($firstname)) {
                redirection('../../register.php?m=1');
            }

            if (empty($lastname)) {
                redirection('../../register.php?m=1');
            }

            if (empty($password) OR strlen($password) < 7) {
                redirection('../../register.php?m=2');
            }

            if (empty($passwordConfirm) OR strlen($passwordConfirm) < 7) {
                redirection('../../register.php?m=2');
            }

            if ($password !== $passwordConfirm) {
                redirection('../../register.php?m=5');
            }

            if (empty($email) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                redirection('../../register.php?m=4');
            }

            if(existsEmail($email)){
                redirection('../../register.php?m=8');
            }

            if (!existsUser($username)) {
                $token = createCode(40);
                $id_user_web = registerUser($username, $password, $firstname, $lastname, $email, $token);
                if (sendData($username, $email, $token)) {
                    redirection("../../register.php?m=7");
                } else {
                    addEmailFailure($id_user_web);
                    redirection("../../register.php?m=6");
                }

            } else {
                redirection('../../register.php?m=3');
            }

            break;

        case "forget" :
            if(isset($_POST['email'])) {
                $email = trim($_POST["email"]);
            }

            if (empty($email) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                redirection('../../forgot-password.php?m=3');
            }

            global $dsn, $pdoOptions;
            $pdo = connectDatabase($dsn, $pdoOptions);
            $sql = "SELECT user_id, username FROM users WHERE email = :email";
            $query = $pdo->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetch();

            if ($query->rowCount() == 1) {
                $username = $results["username"];
                $id = $results["user_id"];
                $token = createCode(40);
                insertToken($id, $token);
                sendPasswordRecoveryEmail($username, $email, $token);
                redirection('../../forgot-password.php?m=2');
            }
            else {
                redirection('../../forgot-password.php?m=1');
            }
            break;
    }

}
