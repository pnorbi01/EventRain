<?php
session_start();
require_once('../config/config.php');
require_once('../config/db_config.php');

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT * FROM gifts, events WHERE gifts.event_id = events.event_id";

$query = $pdo->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

$number = 1;

if ($query->rowCount() > 0){
    foreach($results as $result){
            $data[] = [$number, $result['event_name'], $result['name'], $result['status'],
                '<i class="bi bi-trash3 deleteGift text-danger" data-id="'.$result['gift_id'].'" data-name="'.$result['name'].'" title="Delete Gift"></i>'
            ];
        $number++;
    }
}

$json_data = [
    "draw" => 1,
    "data" => $data
];

echo json_encode($json_data);