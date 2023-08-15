<?php

require_once("../../assets/config/db_config.php");
require_once("../../assets/config/config.php");
require_once("../response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'DELETE') != 0){
    sendBadRequestResponse();
}

if(isset($_GET["eventId"]) && isset($_GET["guest"])) {
    $eventId = $_GET["eventId"];
    $guest = $_GET["guest"];
}
else {
    sendBadRequestResponse();
}

$user = getUserIfAuthenticated();

if(isset($user)) {
    $userId = $user["user_id"];

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "DELETE FROM invitations WHERE event_id = :event_id AND invited_user_email = :invited_user_email";

    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
    $query->bindParam(':invited_user_email', $guest, PDO::PARAM_STR);
    $query->execute();

    if($query->rowCount() > 0) {
        $response["message"] = "Successfully deleted";
        sendOkResponse($response);
    }
    else {
        sendNotFoundResponse();
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