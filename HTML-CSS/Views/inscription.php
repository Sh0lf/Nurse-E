<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="inscription.css">
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
      <form action="../Controller/signup.inc.php" method="post">
        <input type="text" name="nom" placeholder="Nom..."><br>
        <input type="text" name="prenom" placeholder="Prenom..."><br>
        <input type="email" name="email" placeholder="Email..."><br>
        <input type="tel" name="phone" placeholder="+33 ....." pattern="[0-9]{9}"><br>
        <input type="radio" name="sexe" value="Male">
        <label>Male</label><br>
        <input type="radio" name="sexe" value="Femme">
        <label>Femme</label><br>
        <input type="text" name="username" placeholder="Username..."><br>
        <input type="password" name="pwd" placeholder="Mot de passe..."><br>
        <input type="password" name="pwdrep" placeholder="Répéter Mot de passe..."><br>
        <input type="text" name="SpeMed" placeholder="Votre spé médical si vous en avez un..."><br>
        <button type="submit" name="submit">Confirmer</button>
      </form>
      <?php
        if (isset($_GET["error"])){
          if ($_GET["error"] == "emptyinput") {
            echo "<p> Veuillez remplir chaque compartiments !</p>";
          } 
          else if ($_GET["error"] == "invaliduid") {
            echo "<p> Veuillez essayer un nouveau username !</p>";
          } 
          else if ($_GET["error"] == "invalidemail") {
            echo "<p> Veuillez mettre un email valide !</p>";
          } 
          else if ($_GET["error"] == "pwdmissmatch") {
            echo "<p> Les mots de passes ne sont pas les mêmes </p>";
          } 
          else if ($_GET["error"] == "uidexists") {
            echo "<p> Veuillez essayer un nouveau username, il existe déjà</p>";
          } 
          else if ($_GET["error"] == "stmtfailed") {
            echo "<p> Quelque chose n'a pas marché, veuillez essayer encore</p>";
          } 
          else if ($_GET["error"] == "none") {
            echo "<p> Succès !</p>";
          } 
        } 
      ?>
    </section>
    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once 'footer.php';
      ?>
    </footer>
  </body>  

</html>