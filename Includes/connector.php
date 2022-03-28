<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// $dsn = "mysql:host=$host;dbname=$dbname;charset=";

try {
    $pdo = new PDO($servername, $dbname, $username, $password);
    echo 'yffu';
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}