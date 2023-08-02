<?php

require_once('/home/printf/public_html/EventRain/assets/config/db_config.php');
require_once('/home/printf/public_html/EventRain/assets/config/config.php');
require_once('/home/printf/public_html/EventRain/assets/config/functions.php');

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);
$reminder_unsent = 'false';

$sql = "SELECT * FROM events WHERE event_start >= NOW() AND event_start <= NOW() + INTERVAL 1 HOUR AND reminder_sent = :reminder_sent";
$query = $pdo->prepare($sql);
$query->bindParam(':reminder_sent', $reminder_unsent, PDO::PARAM_STR);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

if($query->rowCount() > 0) {
    foreach ($result as $event) {

        $eventId = $event['event_id'];

        $guestEmailSql = "SELECT * FROM invitations WHERE event_id = :event_id";
        $guestEmailQuery = $pdo->prepare($guestEmailSql);
        $guestEmailQuery->bindParam(':event_id', $eventId, PDO::PARAM_INT);
        $guestEmailQuery->execute();
        $guestEmailResult = $guestEmailQuery->fetchAll(PDO::FETCH_ASSOC);

        
        if($guestEmailQuery->rowCount() > 0) {
            foreach ($guestEmailResult as $guest) {
                sendReminder($guest['invited_user_email'], $event['event_name']);
            }
        }

        $reminder_sent = 'true';
        $sqlReminderSent = "UPDATE events SET reminder_sent = :reminder_sent WHERE event_id = :event_id";
        $queryReminderSent = $pdo->prepare($sqlReminderSent);
        $queryReminderSent->bindParam(':reminder_sent', $reminder_sent, PDO::PARAM_STR);
        $queryReminderSent->bindParam(':event_id', $eventId, PDO::PARAM_INT);
        $queryReminderSent->execute();
    }    
}

?>