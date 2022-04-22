<?php

        include('includes/connector.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM menu WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt -> bindParam(":id", $_GET['id']);
    $stmt -> execute();
    $i = $stmt -> fetch();

?>