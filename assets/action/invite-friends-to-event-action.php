<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["inviteFriendBtn"])) {
    if(isset($_POST["firendEmail"]) && !empty($_POST["firendEmail"]) && 
        isset($_POST["eventId"]) && !empty($_POST["eventId"])) {
        
        $friend = trim($_POST["firendEmail"]);
        $eventId = trim($_POST["eventId"]);

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "INSERT INTO invitations (event_id, invited_user_email) VALUES (:event_id, :invited_user_email)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
        $query->bindParam(':invited_user_email', $friend, PDO::PARAM_STR);
        $query->execute();

        $lastInsertedId = $pdo->lastInsertId();

        if ($lastInsertedId > 0) {
            redirection("../../invite-friends-to-event.php?m=1&id=$eventId");
        } 
        else {
            redirection("../../invite-friends-to-event.php?m=2&id=$eventId");
        }
    }
    else {
        redirection("../../invite-friends-to-event.php?m=3&id=".$_POST["eventId"]);
    } 
}
?>