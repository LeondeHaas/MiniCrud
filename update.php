<?php
include("php/change.php");
?>

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
    <div class="container">
      <img class="bg" src="Images/pexels-aleksandar-pasaric-2339009.jpg" alt="">
    </div>
    <div class="block6">
     <div class="rsrcontainer1">
         <br>
       <form method="post" action="includes/update_data.php"  >
            <label name="id">ID</label><br>
            <input type="text" id="fname" name="id" value="<?php echo $i['id']; ?>" readonly><br>
            <label name="naam">Name</label><br>
            <input type="text" id="fname" name="naam" value="<?php echo $i['naam'];?>" ><br>
            <label name="beschrijving">Description</label><br>
            <input type="text" id="lname" name="beschrijving" value="<?php echo $i['beschrijving'];?>" ><br>
            <label name="prijs">Price</label><br>
            <input type="text" id="lname" name="prijs" value="<?php echo $i['prijs'];?>"><br>
            
            <select>
                <option value="<?php echo $i['categorie'];?>"><?php echo $i['categorie'];?></option>
                <option value="actions">Actions</option>
                <option value="family">Family</option>
                <option value="specials">Specials</option>
            </select><br><br>
            <input type="submit" value="Change Product" name="update">
        </form>
     
       </div>
     </div>
    </div>
  </body>
</html>
