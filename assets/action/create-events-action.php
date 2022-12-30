<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["createEventBtn"])) {
    if(isset($_POST["eventType"]) && !empty($_POST["eventType"]) && 
        isset($_POST["eventStatus"]) && !empty($_POST["eventStatus"]) &&
        isset($_POST["eventName"]) && !empty($_POST["eventName"]) &&
        isset($_POST["eventLocation"]) && !empty($_POST["eventLocation"]) &&
        isset($_POST["eventStreet"]) && !empty($_POST["eventStreet"]) &&
        isset($_POST["eventStart"]) && !empty($_POST["eventStart"])) {
        
        $eventType = trim($_POST["eventType"]);
        $eventStatus = trim($_POST["eventStatus"]);
        $eventName = trim($_POST["eventName"]);
        $eventLocation = trim($_POST["eventLocation"]);
        $eventStreet = trim($_POST["eventStreet"]);
        $eventStart = trim($_POST["eventStart"]);

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "INSERT INTO events (user_id, event_type, event_status, event_name, event_location, event_street, event_start) VALUES (:user_id, :event_type, :event_status, :event_name, :event_location, :event_street, :event_start)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':user_id', $_SESSION['id_user'], PDO::PARAM_INT);
        $query->bindParam(':event_type', $eventType, PDO::PARAM_STR);
        $query->bindParam(':event_status', $eventStatus, PDO::PARAM_STR);
        $query->bindParam(':event_name', $eventName, PDO::PARAM_STR);
        $query->bindParam(':event_location', $eventLocation, PDO::PARAM_STR);
        $query->bindParam(':event_street', $eventStreet, PDO::PARAM_STR);
        $query->bindParam(':event_start', $eventStart, PDO::PARAM_STR);
        $query->execute();

        $lastInsertedId = $pdo->lastInsertId();

        if ($lastInsertedId > 0) {
            redirection("../../events.php?m=3");
        } 
        else {
            redirection("../../create-events.php?m=1");
        }
    }
    else {
        redirection("../../create-events.php?m=2");
    } 
}
?>