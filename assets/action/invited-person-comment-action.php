<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["comment"]) && !empty($_POST["comment"]) && 
    isset($_POST["eventComment"]) && !empty($_POST["eventComment"]) && 
    isset($_POST["userComment"]) && !empty($_POST["userComment"])) {
        
        $comment = strip_tags(trim($_POST["comment"]));
        $event = (int)$_POST["eventComment"];
        $user = (int)$_POST["userComment"];

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "INSERT INTO comments (user_id, event_id, comment) VALUES (:user_id, :event_id, :comment)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':user_id', $user, PDO::PARAM_INT);
        $query->bindParam(':event_id', $event, PDO::PARAM_INT);
        $query->bindParam(':comment', $comment, PDO::PARAM_STR);
        $query->execute();

        $lastInsertedId = $pdo->lastInsertId();

        if ($lastInsertedId > 0) {
            redirection("../../selected-invited-event.php?m=1&id=$event");
        } 
        else {
            redirection("../../selected-invited-event.php?m=2&id=$event");
        }
}
else {
    redirection("../../selected-invited-event.php?m=3&id=".$_POST["eventComment"]);
}