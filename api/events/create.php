<?php

require_once("../../assets/config/db_config.php");
require_once("../../assets/config/config.php");
require_once("../response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    sendBadRequestResponse();
}

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
if(strcasecmp($contentType, 'application/json') != 0){
    sendBadRequestResponse();
}

$json = file_get_contents('php://input');
$data = json_decode($json);

$eventType = $data->eventType;
$eventName = $data->eventName;
$eventStatus = $data->eventStatus;
$eventLocation = $data->eventLocation;
$eventStreet = $data->eventStreet;
$eventStart = $data->eventStart;
$eventDeadline = $data->eventDeadline;

if(!isset($data->eventType) || !isset($data->eventName) || !isset($data->eventStatus) || !isset($data->eventLocation) || !isset($data->eventStreet) || !isset($data->eventStart) || !isset($data->eventDeadline)) {
    sendBadRequestResponse();
}

$user = getUserIfAuthenticated();

if(isset($user)) {
    $userId = $user["user_id"];

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "INSERT INTO events(user_id, event_type, event_status, event_name, event_location, event_street, event_start, event_close) VALUES (:user, :event_type, :event_status, :event_name, :event_location, :event_street, :event_start, :event_close)";

    $query = $pdo->prepare($sql);
    $query->bindParam(':user', $userId, PDO::PARAM_INT);
    $query->bindParam(':event_type', $eventType, PDO::PARAM_STR);
    $query->bindParam(':event_status', $eventStatus, PDO::PARAM_STR);
    $query->bindParam(':event_name', $eventName, PDO::PARAM_STR);
    $query->bindParam(':event_location', $eventLocation, PDO::PARAM_STR);
    $query->bindParam(':event_street', $eventStreet, PDO::PARAM_STR);
    $query->bindParam(':event_start', $eventStart, PDO::PARAM_STR);
    $query->bindParam(':event_close', $eventDeadline, PDO::PARAM_STR);
    $query->execute();

    $lastInsertedId = $pdo->lastInsertId();

    if ($lastInsertedId > 0) {
        $data->id = $pdo->lastInsertId();
        $response["message"] = "Event created successfully";
        $response["event"] = $data;
        sendOkResponse($response);
    }
    else {
        $response["message"] = "Error creating the event";
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