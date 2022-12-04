<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styleheaderbar.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once 'header.php';
      ?>
    </header>

    <section class="signup-form">
      <h2>Inscription</h2>
      <form action="signup.inc.php" method="post">
        <input type="text" name="nom" placeholder="Nom...">
        <input type="text" name="prenom" placeholder="Prenom...">
        <input type="email" name="email" placeholder="Email...">
        <input type="tel" name="phone" placeholder="+33 ....." pattern="[0-9]{9}">
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="password" placeholder="Mot de passe...">
        <input type="password" name="password-repeat" placeholder="Répéter Mot de passe...">
        <input type="text" name="nom" placeholder="Nom...">
        <input type="text" name="nom" placeholder="Nom...">

      </form>

    </section>

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once 'footer.php';
      ?>
    </footer>
  </body>  

</html>