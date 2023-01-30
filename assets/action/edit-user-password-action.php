<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["editUserPassword"])) {
    if(isset($_POST["oldPassword"]) && !empty($_POST["oldPassword"]) && 
        isset($_POST["newPassword"]) && !empty($_POST["newPassword"]) &&
        isset($_POST["newPasswordVerify"]) && !empty($_POST["newPasswordVerify"])) {

            $oldPassword = trim($_POST["oldPassword"]);
            $newPassword = trim($_POST["newPassword"]);
            $newPasswordVerify = trim($_POST["newPasswordVerify"]);

            if($newPassword !== $newPasswordVerify){
                redirection("../../edit-profile.php?m=4");
            }

            if(strlen($newPassword) < 7){
                redirection("../../edit-profile.php?m=5");
            }

            $oldPasswordHashed = password_hash($oldPassword, PASSWORD_BCRYPT);
            $newPasswordHashed = password_hash($newPassword, PASSWORD_BCRYPT);

            global $dsn, $pdoOptions;
            $pdo = connectDatabase($dsn, $pdoOptions);

            $OldPasswordCheckSql = "SELECT password FROM users WHERE user_id = :id";

            $query = $pdo->prepare($OldPasswordCheckSql);
            $query->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetch();

            if($query->rowCount() == 1) {
                $oldPasswordFromDatabase = $result["password"];
            }

            if(!password_verify($oldPassword, $oldPasswordFromDatabase)){
                redirection("../../edit-profile.php?m=6");
            }
            else {
                $updateUserPasswordSql = "UPDATE users SET password = :password WHERE user_id = :id";

                $updateUserPasswordQuery = $pdo->prepare($updateUserPasswordSql);
                $updateUserPasswordQuery->bindParam(':password', $newPasswordHashed, PDO::PARAM_STR);
                $updateUserPasswordQuery->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
                $updateUserPasswordQuery->execute();


                if($updateUserPasswordQuery->rowCount() == 1) {
                    redirection("../../edit-profile.php?m=7");
                }
                else {
                    redirection("../../edit-profile.php?m=9");
                }
            }
    }
    else {
        redirection("../../edit-profile.php?m=8");
    }
}

?>