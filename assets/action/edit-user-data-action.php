<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');

if(isset($_POST["editUserData"])) {
    if(isset($_POST["inputUsername"]) && !empty($_POST["inputUsername"]) && 
        isset($_POST["inputFirstName"]) && !empty($_POST["inputFirstName"]) &&
        isset($_POST["inputLastName"]) && !empty($_POST["inputLastName"]) &&
        isset($_POST["inputEmailAddress"]) && !empty($_POST["inputEmailAddress"])) {

            $username = $_POST["inputUsername"];
            $firstname = $_POST["inputFirstName"];
            $lastname = $_POST["inputLastName"];
            $email = $_POST["inputEmailAddress"];

            global $dsn, $pdoOptions;
            $pdo = connectDatabase($dsn, $pdoOptions);

            $sql = "UPDATE users SET username = :username, firstname = :firstname, lastname = :lastname, email = :email WHERE user_id = :id";

            $query = $pdo->prepare($sql);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
            $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
            $query->execute();


            if($query->rowCount() == 1) {
                header("Location: ../../edit-profile.php?m=1");
            }
            else{
                header("Location: ../../edit-profile.php?m=3");
            }
    }
    else {
        header("Location: ../../edit-profile.php?m=2");
    }
}

?>