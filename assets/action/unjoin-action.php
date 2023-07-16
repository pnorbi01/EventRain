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

        if ($query->rowCount() > 0) {
            $status = "available";
            $giftDeleteSql = "UPDATE gifts SET user_id = NULL, status = :status WHERE event_id = :id AND user_id = :user_id";

            $giftDeleteQuery = $pdo->prepare($giftDeleteSql);
            $giftDeleteQuery->bindParam(':id', $id, PDO::PARAM_INT);
            $giftDeleteQuery->bindParam(':user_id', $_SESSION["id_user"], PDO::PARAM_INT);
            $giftDeleteQuery->bindParam(':status', $status, PDO::PARAM_STR);
            $giftDeleteQuery->execute();

            if($giftDeleteQuery->rowCount() == 1){
                redirection("../../events.php?m=8");
            }
            else {
                redirection("../../events.php?m=8");
            }
            
        } 
        else {
            redirection("../../events.php?m=9");
        }
}
else {
    redirection("../../index.php");
}