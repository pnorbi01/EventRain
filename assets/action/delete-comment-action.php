<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_GET["commentId"]) && !empty($_GET["commentId"]) && 
    isset($_GET["id"]) && !empty($_GET["id"])) {
        
        $commentId = (int)$_GET["commentId"];
        $event = (int)$_GET["id"];

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "DELETE FROM comments WHERE id = :id AND event_id = :event_id";

        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $commentId, PDO::PARAM_INT);
        $query->bindParam(':event_id', $event, PDO::PARAM_INT);
        $query->execute();

        if ($query->rowCount() > 0) {
            redirection("../../wishlist.php?m=8&id=$event");
        } 
        else {
            redirection("../../wishlist.php?m=9&id=$event");
        }
}
else {
    redirection("../../wishlist.php?m=9&id=".$_GET["id"]);
}