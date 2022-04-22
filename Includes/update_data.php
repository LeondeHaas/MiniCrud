<?php

    include('connector.php');

    if (isset ($_POST['update'])){

        $naam = $_POST['naam'];
        $beschrijving = $_POST['beschrijving'];
        $prijs = $_POST['prijs'];
        // $categorie = $_POST['categorie'];
        $id = $_POST['id']; 



        $sql = "UPDATE menu SET naam=?, beschrijving=?, prijs=?, categorie=? WHERE id=?";
        $stmt = $connect->prepare($sql);
        $stmt->execute([$naam, $beschrijving, $prijs, $categorie, $id]);
    }

       

    
    header("Location: ../backend.php");
    exit();

?>