<?php
include('includes/connector.php');

$stmt = $pdo->prepare("SELECT * FROM menu");
$stmt->execute(['id' => $id]); 
$user = $stmt->fetch();