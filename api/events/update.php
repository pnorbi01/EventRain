<?php

require_once("../../assets/config/db_config.php");
require_once("../../assets/config/config.php");
require_once("../response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') != 0){
    sendBadRequestResponse();
}

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
if(strcasecmp($contentType, 'application/json') != 0){
    sendBadRequestResponse();
}

$json = file_get_contents('php://input');
$data = json_decode($json);

if(isset($_GET["eventId"])) {
    $eventId = $_GET["eventId"];
}
else {
    sendBadRequestResponse();
}

$eventType = $data->eventType;
$eventName = $data->eventName;
$eventStatus = $data->eventStatus;
$eventLocation = $data->eventLocation;
$eventStreet = $data->eventStreet;

if(!isset($data->eventType) || !isset($data->eventName) || !isset($data->eventStatus) || !isset($data->eventLocation) || !isset($data->eventStreet)) {
    sendBadRequestResponse();
}

$user = getUserIfAuthenticated();

if(isset($user)) {
    $userId = $user["user_id"];

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "UPDATE events SET event_type = :event_type, event_status = :event_status, event_name = :event_name, event_location = :event_location, event_street = :event_street WHERE event_id = :event_id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
    $query->bindParam(':event_type', $eventType, PDO::PARAM_STR);
    $query->bindParam(':event_status', $eventStatus, PDO::PARAM_STR);
    $query->bindParam(':event_name', $eventName, PDO::PARAM_STR);
    $query->bindParam(':event_location', $eventLocation, PDO::PARAM_STR);
    $query->bindParam(':event_street', $eventStreet, PDO::PARAM_STR);
    $query->execute();

    if($query->rowCount() == 1) {
        $response["message"] = "Event updated successfully";
        sendOkResponse($response);
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