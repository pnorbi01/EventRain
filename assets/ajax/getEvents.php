<?php
session_start();
require_once('../config/config.php');
require_once('../config/db_config.php');

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT * FROM events";

$query = $pdo->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

$number = 1;

if ($query->rowCount() > 0){
    foreach($results as $result){
        if($result["event_active"] == "active"){
            $data[] = [$number, $result['event_name'], $result['event_type'], $result['event_status'], $result['event_location'], $result['event_street'], $result['event_start'], $result['event_active'],
                '<i class="bi bi-x-lg setInactive text-danger" data-id="'.$result['event_id'].'" data-name="'.$result['event_name'].'" title="Set Inactive"></i>'
            ];
        }
            else {
                $data[] = [$number, $result['event_name'], $result['event_type'], $result['event_status'], $result['event_location'], $result['event_street'], $result['event_start'], $result['event_active'], 
                    '<i class="bi bi-check2 setActive text-success" data-id="'.$result['event_id'].'" data-name="'.$result['event_name'].'" title="Set Active"></i>'
                ];
            }
        $number++;
    }
}

$json_data = [
    "draw" => 1,
    "data" => $data
];

echo json_encode($json_data);