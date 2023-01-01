<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_GET["id"]) && !empty($_GET["id"]) && 
    isset($_GET["email"]) && !empty($_GET["email"])) {
        
        $id = (int)$_GET["id"];
        $email = trim($_GET["email"]);

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "DELETE FROM invitations WHERE event_id = :id AND invited_user_email = :email";

        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        $lastInsertedId = $pdo->lastInsertId();

        if ($query->rowCount() > 0) {
            redirection("../../events.php?m=8");
        } 
        else {
            redirection("../../events.php?m=9");
        }
}
else {
    redirection("../../index.php");
}