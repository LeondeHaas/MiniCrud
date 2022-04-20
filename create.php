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
       <form method="post" action="php/insert.php"  >
            <label for="naam">Name</label><br>
            <input type="text" id="fname" name="naam"><br>
            <label for="beschrijving">Description</label><br>
            <input type="text" id="lname" name="beschrijving"><br>
            <label for="prijs">Price</label><br>
            <input type="text" id="lname" name="prijs"><br>
            <label for="categoie">Select a category</label><br>
            <select name="categorie">
                <option selected disabled>Menu</option>
                <option value="actions">Actions</option>
                <option value="family">Family</option>
                <option value="specials">Specials</option>
            </select><br><br>
            <input type="submit" value="Add Product">
        </form>
     
       </div>
     </div>
    </div>
  </body>
</html>
