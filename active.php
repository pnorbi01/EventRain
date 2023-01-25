<?php

require_once("assets/config/db_config.php");
require_once("assets/config/config.php");
require_once("assets/config/functions.php");

if (isset($_GET['token'])){
    $token = trim($_GET['token']);
}
    
if (!empty($token) AND strlen($token) === 40) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "UPDATE users SET active='1', token='', registration_expires=NULL
            WHERE binary token = :token AND registration_expires>now()";

    $query = $pdo->prepare($sql);
    $query->bindParam(':token', $token, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
       redirection('login.php?m=3');
    }
    else {
        redirection('login.php?m=4');
    }
}
else {
    redirection('login.php?m=5');
}