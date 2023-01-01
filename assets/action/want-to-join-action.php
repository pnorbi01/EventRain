<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_GET["id"]) && !empty($_GET["id"]) && 
    isset($_GET["email"]) && !empty($_GET["email"])) {
        
        $id = (int)$_GET["id"];
        $email = trim($_GET["email"]);
        $status = "accepted";

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "INSERT INTO invitations (event_id, invited_user_email, status) VALUES (:id, :invited_email, :status)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':invited_email', $email, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
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