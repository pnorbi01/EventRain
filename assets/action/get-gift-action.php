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

        $myGiftSql = "SELECT * FROM gifts WHERE user_id = :user_id AND event_id = :event_id";
        $myGiftQuery = $pdo->prepare($myGiftSql);
        $myGiftQuery->bindParam(':user_id', $_SESSION["id_user"], PDO::PARAM_INT);
        $myGiftQuery->bindParam(':event_id', $eventId, PDO::PARAM_INT);
        $myGiftQuery->execute();
        $myGiftResult = $myGiftQuery->fetch();

        if($myGiftQuery->rowCount() > 0) {
            redirection("../../wishlist.php?m=5&id=$eventId");
        }
        else {
            $status = "reserved";

            $sql = "UPDATE gifts SET user_id = :user_id, status = :status WHERE gift_id = :gift_id";

            $query = $pdo->prepare($sql);
            $query->bindParam(':user_id', $_SESSION["id_user"], PDO::PARAM_INT);
            $query->bindParam(':gift_id', $id, PDO::PARAM_INT);
            $query->bindParam(':status', $status, PDO::PARAM_STR);
            $query->execute();

            if ($query->rowCount() == 1) {
                redirection("../../wishlist.php?m=1&id=$eventId");
            } 
            else {
                redirection("../../wishlist.php?m=4&id=$eventId");
            }
        }
}
else {
    redirection("../../index.php");
}