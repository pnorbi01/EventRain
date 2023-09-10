<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');

if(isset($_POST["changeMyStatus"])) {
    if(isset($_POST["myEventStatus"]) && !empty($_POST["myEventStatus"]) && 
        isset($_POST["eventsId"]) && !empty($_POST["eventsId"])) {

            $myEventStatus = trim($_POST["myEventStatus"]);
            $eventsId = (int)$_POST["eventsId"];

            global $dsn, $pdoOptions;
            $pdo = connectDatabase($dsn, $pdoOptions);

            if($myEventStatus == "declined") {

                $checkForGiftSql = "SELECT * FROM gifts WHERE user_id = :user_id AND event_id = :event_id";

                $checkForGiftQuery = $pdo->prepare($checkForGiftSql);
                $checkForGiftQuery->bindParam(':user_id', $_SESSION["id_user"], PDO::PARAM_INT);
                $checkForGiftQuery->bindParam(':event_id', $eventsId, PDO::PARAM_INT);
                $checkForGiftQuery->execute();
                $checkForGiftResult = $checkForGiftQuery->fetch();

                if($checkForGiftQuery->rowCount() == 1) {
                    header("Location: ../../change-my-status.php?m=3&id=$eventsId&status=$myEventStatus");
                }
                else {
                    $sql = "UPDATE invitations SET status = :status WHERE invited_user_email = :email AND event_id = :id";

                    $query = $pdo->prepare($sql);
                    $query->bindParam(':status', $myEventStatus, PDO::PARAM_STR);
                    $query->bindParam(':email', $_SESSION["user_email"], PDO::PARAM_STR);
                    $query->bindParam(':id', $eventsId, PDO::PARAM_INT);
                    $query->execute();
        
        
                    if($query->rowCount() == 1) {
                        header("Location: ../../events.php?m=10");
                    }
                    else{
                        header("Location: ../../change-my-status.php?m=1&id=$eventsId&status=$myEventStatus");
                    }
                }
            }
            else {
                $sql = "UPDATE invitations SET status = :status WHERE invited_user_email = :email AND event_id = :id";

                $query = $pdo->prepare($sql);
                $query->bindParam(':status', $myEventStatus, PDO::PARAM_STR);
                $query->bindParam(':email', $_SESSION["user_email"], PDO::PARAM_STR);
                $query->bindParam(':id', $eventsId, PDO::PARAM_INT);
                $query->execute();
    
    
                if($query->rowCount() == 1) {
                    header("Location: ../../events.php?m=10");
                }
                else{
                    header("Location: ../../change-my-status.php?m=1&id=$eventsId&status=$myEventStatus");
                }
            }
    }
    else {
        header("Location: ../../change-my-status.php?m=2&id=".$_POST["eventsId"]."&status=".$_POST["myEventStatus"]);
    }
}

?>