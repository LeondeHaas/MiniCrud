<?php

include_once('../Includes/connector.php');

if(isset($_POST['verwijderen'])){

    $id = $_POST['id'];
    var_dump($id);
    $sql = "DELETE FROM menu WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindparam(':id', $id);
    $stmt->execute();

    header('location:../backend.php');
    exit();
} ?> 