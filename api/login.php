<?php
require_once("../assets/config/db_config.php");
require_once("../assets/config/config.php");
require_once("../assets/config/functions.php");
require_once("response.php");

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

if(!isset($data->username) || !isset($data->password)) {
    sendBadRequestResponse();
}

$username = $data->username;
$password = $data->password;

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT user_id, password, email FROM users WHERE username = :username";

$query = $pdo->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch();

if(password_verify($password, $result["password"])) {
    $token = createCode(40);
    if(saveToken($token, $result["user_id"])) {
        $response["token"] = $token;
        $response["username"] = $username;
        $response["email"] = $result["email"];
        $response["message"] = "Successfully authenticated";
        sendOkResponse($response);
    }
    else {
        $response["message"] = "Error saving the token";
        sendServerErrorResponse($response);
    }
}
else {
    sendUnauthorizedResponse();
}

function saveToken($token, $userId) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "INSERT INTO api (user_id, token) VALUES (:userId, :token)";

    $query = $pdo->prepare($sql);
    $query->bindParam(':userId', $userId, PDO::PARAM_INT);
    $query->bindParam(':token', $token, PDO::PARAM_STR);
    $query->execute();

    return $query->rowCount() > 0;
}

exit;

