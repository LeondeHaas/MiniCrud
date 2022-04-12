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
    <div class="block5">
     <div class="rsrcontainer">
         <form>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="lname">Howmany guests?</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="lname">Select a date</label><br>
            <select>
                <option selected>12 april</option>
                <option>13 april</option>
                <option>14 april</option>
                <option>15 april</option>
                <option>16 april</option>
                <option>17 april</option>
                <option>18 april</option>
                <option>19 april</option>
                <option>20 april</option>
                <option>21 april</option>
                <option>22 april</option>
                <option>23 april</option>
                <option>24 april</option>
            </select><br><br>
            <input type="submit" value="Make reservation">
        </form>
     </div>
    </div>
  </body>
  <?php
   include ('Includes/footer.php')
  ?>
</html>
