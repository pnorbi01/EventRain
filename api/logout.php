<?php

require_once("../assets/config/db_config.php");
require_once("../assets/config/config.php");
require_once("response.php");

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    sendBadRequestResponse();
}

$token = getToken();

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "DELETE FROM api WHERE token = :token";

$query = $pdo->prepare($sql);
$query->bindParam(':token', $token, PDO::PARAM_STR);
$query->execute();

if($query->rowCount() > 0) {
    $response["message"] = "Logged out successfully";
    sendOkResponse($response);
}
else {
    sendNotFoundResponse();
}

function getToken() {
    if(isset($_SERVER['HTTP_TOKEN'])) {
        return $_SERVER['HTTP_TOKEN'];
    }
    else {
        sendBadRequestResponse();
    }
}