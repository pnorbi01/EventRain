<?php

require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');
if(isset($_POST["setNewPassword"])) {
    if(isset($_POST["firstPassword"]) && !empty($_POST["firstPassword"]) && 
        isset($_POST["secondPassword"]) && !empty($_POST["secondPassword"]) &&
        isset($_POST["userId"]) && !empty($_POST["userId"]) && isset($_POST["token"]) && !empty($_POST["token"])) {
            $token = $_POST["token"];
            $userId = $_POST["userId"];
            $newPasswordVerify = $_POST["secondPassword"];
            $newPassword = $_POST["firstPassword"];
            $newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);

            if($newPassword !== $newPasswordVerify){
                redirection("../../setting-new-password.php?token=".$token."&m=1");
            }

            if(strlen($newPassword) < 7){
                redirection("../../setting-new-password.php?token=".$token."&m=3");
            }

            global $dsn, $pdoOptions;
            $pdo = connectDatabase($dsn, $pdoOptions);

            $sql = "UPDATE users SET password = :password WHERE user_id = :id";

            $query = $pdo->prepare($sql);
            $query->bindParam(':password', $newPasswordHashed, PDO::PARAM_STR);
            $query->bindParam(':id', $userId, PDO::PARAM_INT);
            $query->execute();


            if($query->rowCount() == 1) {
                deleteToken($token);
                redirection("../../login.php?m=6");
            }
    }
    else {
        redirection("../../setting-new-password.php?m=1");
    }
}

?>