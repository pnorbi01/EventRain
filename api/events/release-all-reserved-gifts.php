<?php

require_once("../../assets/config/db_config.php");
require_once("../../assets/config/config.php");
require_once("../response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'PUT') != 0){
    sendBadRequestResponse();
}

$user = getUserIfAuthenticated();

if(isset($user)) {
    $userId = $user["user_id"];
    $status = 'available';
    $user = NULL;

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "UPDATE gifts SET status = :status, user_id = :user WHERE user_id = :userId";

    $query = $pdo->prepare($sql);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->bindParam(':user', $user, PDO::PARAM_STR);
    $query->bindParam(':userId', $userId, PDO::PARAM_INT);
    $query->execute();

    if($query->rowCount() > 0) {
        $response["message"] = "Gifts have been released successfully";
        sendOkResponse($response);
    }
    else {
        $response["message"] = "Error releasing your gifts. Please try again.";
        sendServerErrorResponse($response);
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