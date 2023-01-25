<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["deleteInvitedFriend"])) {
    if(isset($_POST["deletedFriendEmail"]) && !empty($_POST["deletedFriendEmail"]) &&
        isset($_POST["eventId"]) && !empty($_POST["eventId"]) &&
        isset($_POST["userId"]) && !empty($_POST["userId"])) {

            $deletedFriendEmail = trim($_POST["deletedFriendEmail"]);
            $event = (int)$_POST["eventId"];
            $userId = (int)$_POST["userId"];

            global $dsn, $pdoOptions;
            $pdo = connectDatabase($dsn, $pdoOptions);

            $sql = "DELETE FROM invitations WHERE invited_user_email = :deletedFriendEmail AND event_id = :event_id";

            $query = $pdo->prepare($sql);
            $query->bindParam(':deletedFriendEmail', $deletedFriendEmail, PDO::PARAM_STR);
            $query->bindParam(':event_id', $event, PDO::PARAM_INT);
            $query->execute();


            if ($query->rowCount() > 0) {
                $status = "available";
                $giftReleaseSql = "UPDATE gifts SET user_id = NULL, status = :status WHERE event_id = :id AND user_id = :user_id";
    
                $giftReleaseQuery = $pdo->prepare($giftReleaseSql);
                $giftReleaseQuery->bindParam(':id', $event, PDO::PARAM_INT);
                $giftReleaseQuery->bindParam(':user_id', $userId, PDO::PARAM_INT);
                $giftReleaseQuery->bindParam(':status', $status, PDO::PARAM_STR);
                $giftReleaseQuery->execute();

                if($giftReleaseQuery->rowCount() == 1){
                    redirection("../../invited-people.php?m=1&id=$event");
                }
                else {
                    redirection("../../invited-people.php?m=1&id=$event");
                }

            } 
            else {
                redirection("../../invited-people.php?m=2&id=$event");
            }
    }
    else {
            redirection("../../invited-people.php?m=2&id=".$_POST["eventId"]);
    }
}
?>