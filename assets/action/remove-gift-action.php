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

        $sql = "DELETE FROM gifts WHERE gift_id = :id";

        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        if ($query->rowCount() > 0) {
            redirection("../../wishlist.php?m=2&id=$eventId");
        } 
        else {
            redirection("../../wishlist.php?m=3&id=$eventId");
        }
}
else {
    redirection("../../index.php");
}