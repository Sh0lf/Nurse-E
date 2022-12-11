<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="login.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once 'header.php';
      ?>
    </header>

    <div class="container">
      <h2>Connection</h2>
      <form action="../Controller/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Mot de passe...">
        <button type="submit" name="submit">Confirmer</button>
      </form>
      <?php
        if (isset($_GET["error"])){
          if ($_GET["error"] == "emptyinput") {
            echo "<p> Veuillez remplir chaque compartiments !</p>";
          } 
          else if ($_GET["error"] == "wronglogin") {
            echo "<p> Veuillez réessayer, mauvais identifiant et/ou mot de passe</p>";
          }
          else if ($_GET["error"] == "none") {
            echo "<p> Succès !</p>";
          } 
        } 
      ?>
    </div>

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once 'footer.php';
      ?>
    </footer>
  </body>  
</html>