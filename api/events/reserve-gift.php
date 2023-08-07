<?php

require_once("../../assets/config/db_config.php");
require_once("../../assets/config/config.php");
require_once("../response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'PUT') != 0){
    sendBadRequestResponse();
}

if(isset($_GET["giftId"]) && isset($_GET["eventId"])) {
    $giftId = $_GET["giftId"];
    $eventId = $_GET["eventId"];
}
else {
    sendBadRequestResponse();
}

$user = getUserIfAuthenticated();

if(isset($user)) {
    $userId = $user["user_id"];
    $status = 'reserved';

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $myGiftSql = "SELECT * FROM gifts WHERE user_id = :userId AND event_id = :eventId";
    $myGiftQuery = $pdo->prepare($myGiftSql);
    $myGiftQuery->bindParam(':userId', $userId, PDO::PARAM_INT);
    $myGiftQuery->bindParam(':eventId', $eventId, PDO::PARAM_INT);
    $myGiftQuery->execute();
    $myGiftResult = $myGiftQuery->fetch();

    if($myGiftQuery->rowCount() > 0) {
        $response["message"] = "You can not reserve more than one gift for the same event.";
        sendBadRequestResponse($response);
    }
    else{
        $sql = "UPDATE gifts SET status = :status, user_id = :userId WHERE gift_id = :giftId AND event_id = :eventId";

        $query = $pdo->prepare($sql);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':giftId', $giftId, PDO::PARAM_INT);
        $query->bindParam(':eventId', $eventId, PDO::PARAM_INT);
        $query->bindParam(':userId', $userId, PDO::PARAM_INT);
        $query->execute();

        if($query->rowCount() == 1) {
            $response["message"] = "Gift has been reserved successfully";
            sendOkResponse($response);
        }
        else {
            $response["message"] = "Error reserving your gift. Please try again.";
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