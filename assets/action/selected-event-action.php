<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["deleteEvent"])) {
    if(isset($_POST["eventId"]) && !empty($_POST["eventId"])) {

    $eventId = $_POST["eventId"];
    var_dump($eventId);
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "DELETE FROM events WHERE event_id = :id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $eventId, PDO::PARAM_INT);
    $query->execute();

        if ($query->rowCount() > 0) {
            redirection("../../events.php?m=1");
        } 
        else {
            redirection("../../events.php?m=2");
        }
    }
    else {
        redirection("../../events.php?m=2");
    }
}

