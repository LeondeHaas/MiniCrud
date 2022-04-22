<?php

include ('../Includes/connector.php');

$sql = "INSERT INTO menu (naam, beschrijving, prijs, categorie)
VALUES (:naam,:beschrijving,:prijs,:categorie)";

$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":beschrijving", $_POST['beschrijving']);
$stmt->bindParam(":prijs", $_POST['prijs']);
$stmt->bindParam(":categorie", $_POST['categorie']);
$stmt->execute();

header('Location: ../backend.php');

?>