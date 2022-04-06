<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RestaurantSushi";

$dsn = "mysql:host=$servername;dbname=$dbname;charset=UTF8";

try {
    $pdo = new PDO($dsn, $username, $password);
    echo 'connectie is gemaakt';
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}