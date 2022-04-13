<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  <?php
  include ('Includes/header.php')
  ?>
    <div class="container">
      <img class="bg" src="Images/pexels-aleksandar-pasaric-2339009.jpg" alt="">
    </div>
    <div class="block6">
     <div class="rsrcontainer1">
         <br>
        <button class="buttonsC">
        <p>Create</p>
      </button>
      <button class="buttonsU">
        <p>Update</p>
      </button>
      <button class="buttonsD">
        <p>Delete</p>
      </button>
      <?php
        include_once('Includes/connector.php');

        $query = "SELECT naam, prijs, beschrijving, categorie FROM menu ";
        $stmt = $connect->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $product) {
?>
      <div class="products">
                  <h2><?php echo $product['naam'];?></h2>
                  <h2><?php echo $product['categorie'];?></h2>
                  <h4><?php echo $product['beschrijving'];?></h4>              
                  <h3><?php echo $product['prijs'];?></h3>
      </div>
    <?php
        }
?>
       </div>
     </div>
    </div>
  </body>
</html>
