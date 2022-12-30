<?php
session_start();
require_once("assets/config/config.php");
require_once("assets/config/db_config.php");
require_once("assets/config/functions.php");
require_once("assets/php/guest-navbar.php");
require_once("assets/php/header.php");

if(isset($_GET["token"])) {
    global $dsn, $pdoOptions;
    $userId;
    $token = $_GET["token"];
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT user_id FROM forgotten_passwords WHERE token = :token";
    $query = $pdo->prepare($sql);
    $query->bindParam(':token', $token, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();
    if ($query->rowCount() == 1) {
        $userId = $result["user_id"];
    }
    else {
        redirection('login.php?m=8');
    }
}
else {
    redirection('login.php?m=9');
}

require_once("assets/contents/setting-new-password-content.php");
?>