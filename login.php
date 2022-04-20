<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="header">
        <img class="img" src="Images/sushi.png" alt="" />
        <div class="page">
          <li><a class="pagina" href="index.php">Home</a></li>
        </div>
        <div class="page">
          <li><a class="pagina" href="menu.php">Menu</a></li>
        </div>
        <div class="page1">
          <li><a class="pagina" href="index.php">About</a></li>
        </div>
        <div class="page">
          <li><a class="pagina" href="contact.php">Contact</a></li>
        </div>
        <div class="page">
          <li><a class="pagina" href="login.php">Login</a></li>
        </div>
      </div>
    </header>
    <div class="container">
      <img class="bg" src="Images/loginBG.jpg" alt="" />
      <div class="form">
        <form action="/MiniCrud/backend.php" method="post">
          <br />
          <p>username</p>
          <input
            class="usr"
            type="text"
            name="username"
            placeholder="username..."
          />
          <br />
          <p>password</p>
          <input
            class="psw"
            type="password"
            name="password"
            placeholder="Password..."
          />
          <br />
          <input class="sbt" type="submit" name="knop" value="Login" />
          <a href="">
            <button class="register">Register</button>
          </a>
        </form>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
