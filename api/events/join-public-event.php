<?php

require_once("../../assets/config/db_config.php");
require_once("../../assets/config/config.php");
require_once("../response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    sendBadRequestResponse();
}
/*
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
if(strcasecmp($contentType, 'application/json') != 0){
    sendBadRequestResponse();
} */

if(isset($_GET["eventId"]) && isset($_GET["ownerId"])) {
    $eventId = $_GET["eventId"];
    $ownerId = $_GET["ownerId"];
}
else {
    sendBadRequestResponse();
}

$user = getUserIfAuthenticated();

if(isset($user)) {
    $userId = $user["user_id"];
    $userEmail = $user["email"];
    $status = 'joined';
    $state = 'read';

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $memberOfEventSql = "SELECT * FROM invitations WHERE event_id = :event_id AND invited_user_email = :invited_user_email";
    $memberOfEventQuery = $pdo->prepare($memberOfEventSql);
    $memberOfEventQuery->bindParam(':invited_user_email', $userEmail, PDO::PARAM_STR);
    $memberOfEventQuery->bindParam(':event_id', $eventId, PDO::PARAM_INT);
    $memberOfEventQuery->execute();
    $memberOfEventResult = $memberOfEventQuery->fetch();

    if($memberOfEventQuery->rowCount() > 0) {
        $response["message"] = "You are already member of the following event.";
        sendBadRequestResponse($response);
    }
    else {
        $sql = "INSERT INTO invitations(event_id, user_id, invited_user_email, status, state) VALUES (:event_id, :user_id, :invited_user_email, :status, :state)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
        $query->bindParam(':user_id', $ownerId, PDO::PARAM_INT);
        $query->bindParam(':invited_user_email', $userEmail, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':state', $state, PDO::PARAM_STR);
        $query->execute();

        $lastInsertedId = $pdo->lastInsertId();

        if ($lastInsertedId > 0) {
            $response["message"] = "Joined party successfully";
            sendOkResponse($response);
        } 
        else {
            sendServerErrorResponse($response);
        }
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