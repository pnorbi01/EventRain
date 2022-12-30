<?php
session_start();
require_once('../config/db_config.php');
require_once('../config/config.php');
require_once('../config/functions.php');

if(isset($_POST["modifyEventBtn"])) {
    if(isset($_POST["eventType"]) && !empty($_POST["eventType"]) && 
        isset($_POST["eventStatus"]) && !empty($_POST["eventStatus"]) &&
        isset($_POST["eventName"]) && !empty($_POST["eventName"]) &&
        isset($_POST["eventLocation"]) && !empty($_POST["eventLocation"]) &&
        isset($_POST["eventStreet"]) && !empty($_POST["eventStreet"]) && 
        isset($_POST["eventToModify"]) && !empty($_POST["eventToModify"])) {
        
        $eventType = trim($_POST["eventType"]);
        $eventStatus = trim($_POST["eventStatus"]);
        $eventName = trim($_POST["eventName"]);
        $eventLocation = trim($_POST["eventLocation"]);
        $eventStreet = trim($_POST["eventStreet"]);
        $eventToModifyId = trim($_POST["eventToModify"]);

        global $dsn, $pdoOptions;
        $pdo = connectDatabase($dsn, $pdoOptions);

        $sql = "UPDATE events SET event_type = :type, event_status = :status, event_name = :name, event_location = :location, event_street = :street WHERE event_id = :id";

        $query = $pdo->prepare($sql);
        $query->bindParam(':id', $eventToModifyId, PDO::PARAM_INT);
        $query->bindParam(':type', $eventType, PDO::PARAM_STR);
        $query->bindParam(':status', $eventStatus, PDO::PARAM_STR);
        $query->bindParam(':name', $eventName, PDO::PARAM_STR);
        $query->bindParam(':location', $eventLocation, PDO::PARAM_STR);
        $query->bindParam(':street', $eventStreet, PDO::PARAM_STR);
        $query->execute();

        if($query->rowCount() == 1) {
            redirection("../../events.php?m=4&id=$eventToModifyId");
        }
        else {
            redirection("../../modify-selected-event.php?m=1&id=$eventToModifyId");
        }
}
    else {
        redirection("../../events.php?m=5&id=".$_POST["eventToModify"]);
    }
}