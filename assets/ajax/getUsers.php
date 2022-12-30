<?php
session_start();
require_once('../config/config.php');
require_once('../config/db_config.php');

global $dsn, $pdoOptions;
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT * FROM users WHERE user_id != :id ORDER BY username ASC";

$query = $pdo->prepare($sql);
$query->bindParam(':id', $_SESSION["id_user"], PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

$number = 1;

if ($query->rowCount() > 0){
    foreach($results as $result){
        if($result["active"] == 1 || $result["active"] == 0){
            $data[] = [$number, $result['username'], $result['firstname'], $result['lastname'], $result['email'], $result['level'], $result['active'], 
                '<i class="bi bi-x-lg banUser text-danger" data-id="'.$result['user_id'].'" data-name="'.$result['username'].'" title="Ban"></i>'
            ];
        }
            else {
                $data[] = [$number, $result['username'], $result['firstname'], $result['lastname'], $result['email'], $result['level'], $result['active'], 
                    '<i class="bi bi-check2 unbanUser text-success" data-id="'.$result['user_id'].'" data-name="'.$result['username'].'" title="Unban"></i>'
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