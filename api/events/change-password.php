<?php
require_once("../../assets/config/db_config.php");
require_once("../../assets/config/config.php");
require_once("../../assets/config/functions.php");
require_once("../response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    sendBadRequestResponse();
}

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
if(strcasecmp($contentType, 'application/json') != 0) {
    echo $contentType;
    sendBadRequestResponse();
}

$json = file_get_contents('php://input');
$data = json_decode($json);

if(!isset($data->currentPassword) || !isset($data->newPassword)) {
    sendBadRequestResponse();
}

$currentPassword = $data->currentPassword;
$newPassword = $data->newPassword;

$user = getUserIfAuthenticated();

if(isset($user)) {
    $userId = $user["user_id"];

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT password FROM users WHERE user_id = :user_id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':user_id', $userId, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if(password_verify($currentPassword, $result["password"])) {
        $newPasswordHashed = password_hash($newPassword, PASSWORD_BCRYPT);

        $sqlUpdate = "UPDATE users SET password = :password WHERE user_id = :user_id";

        $queryUpdate = $pdo->prepare($sqlUpdate);
        $queryUpdate->bindParam(':password', $newPasswordHashed, PDO::PARAM_STR);
        $queryUpdate->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $queryUpdate->execute();

        if($queryUpdate->rowCount() == 1) {
            $response["message"] = "Your password has been updated successfully";
            sendOkResponse($response);
        }
        else {
            $response["message"] = "Error updating your password";
            sendServerErrorResponse($response);
        }
    }
    else {
        sendUnauthorizedResponse();
    }
}
else {
    sendUnauthorizedResponse();
}

function getUserIfAuthenticated() {
    if(isset($_SERVER['HTTP_TOKEN'])) {
        $token = $_SERVER['HTTP_TOKEN'];

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "SELECT * FROM api WHERE token = :token";

        $query = $pdo->prepare($sql);
        $query->bindParam(':token', $token, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();

        if($query->rowCount() > 0) {
            return getUser($result["user_id"]);
        }
        else {
            sendUnauthorizedResponse();
        }
    }
    else {
        sendBadRequestResponse();
    }
}

function getUser($userId) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT * FROM users WHERE user_id = :userId";

    $query = $pdo->prepare($sql);
    $query->bindParam(':userId', $userId, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    return $result;
}


exit;