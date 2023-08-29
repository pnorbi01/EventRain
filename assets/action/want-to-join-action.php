<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_GET["id"]) && !empty($_GET["id"]) && 
    isset($_GET["email"]) && !empty($_GET["email"]) && 
    isset($_GET["userId"]) && !empty($_GET["userId"])) {
        
        $id = (int)$_GET["id"];
        $email = trim($_GET["email"]);
        $status = "joined";
        $state = "read";
        $userId = (int)$_GET["userId"];

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "INSERT INTO invitations (event_id, user_id, invited_user_email, status, state) VALUES (:id, :user_id, :invited_email, :status, :state)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $query->bindParam(':invited_email', $email, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':state', $state, PDO::PARAM_STR);
        $query->execute();

        $lastInsertedId = $pdo->lastInsertId();

        if ($lastInsertedId > 0) {
            redirection("../../events.php?m=6");
        } 
        else {
            redirection("../../events.php?m=7");
        }
}
else {
    redirection("../../index.php");
}