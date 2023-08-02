<?php

function connectDatabase(string $dsn, array $pdoOptions): PDO
{

    try {
        $pdo = new PDO($dsn, PARAMS['USER'], PARAMS['PASS'], $pdoOptions);
        $pdo->exec("SET time_zone='+2:00';");

    } catch (\PDOException $e) {
        //exit("Error: " . $e->getMessage());
        var_dump($e->getCode());
        throw new \PDOException($e->getMessage());
    }

    return $pdo;
}