<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
   <?php

  include ('Includes/header.php');

  ?>
    <div class="containermenu">
      <img class="bg" src="Images/pexels-valeria-boltneva-684965.jpg" alt="">
    </div>
    <div class="block4">
      <!-- container with all orders -->
      <div class="menuorder">
       <div class="menupages">
         <li><a href="menu.php">Menu</a></li>
         <li><a href="menu1.php">Action</a></li>
         <li><a href="menu2.php">Specials</a></li>
         <li><a href="menu3.php">Family</a></li>
       </div>
      </div>
      <div class="menuholder">

      <?php
        include_once('Includes/connector.php');

        $query = "SELECT naam, prijs, beschrijving FROM family";
        $stmt = $connect->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $product) {
?>
        <!-- menu -->
        <div class="menu1">
           <img class="menusushi" src="<?php echo $product['afbeelding'];?> alt="">
           <div class="orderbutton">
              <a href="index.php">
              <img class="orderimg" src="Images/001-add-to-cart.png" alt="">
              </a>
              <div class="text">
                  <h2><?php echo $product['naam'];?></h2>
                  <br>
                  <h4><?php echo $product['beschrijving'];?></h4>
                  <br>
                  <h3><?php echo $product['prijs'];?></h3>
             </div>
           </div>
        </div>
        <?php
        }
?>
        <!-- menu -->
      </div>
    </div>
    
  </body>
    <?php
   include ('Includes/footer.php')
  ?>
</html>
