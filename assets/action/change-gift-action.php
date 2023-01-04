<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_GET["id"]) && !empty($_GET["id"]) && 
    isset($_GET["event_id"]) && !empty($_GET["event_id"])) {
        
        $id = (int)$_GET["id"];
        $eventId = (int)$_GET["event_id"];

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);
        $status = "available";

        $sql = "UPDATE gifts SET user_id = NULL, status = :status WHERE gift_id = :gift_id";

        $query = $pdo->prepare($sql);
        $query->bindParam(':gift_id', $id, PDO::PARAM_INT);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();

        var_dump($id);

        if ($query->rowCount() == 1) {
            redirection("../../wishlist.php?m=2&id=$eventId");
        } 
        else {
            redirection("../../wishlist.php?m=3&id=$eventId");
        }
}
else {
    redirection("../../index.php");
}