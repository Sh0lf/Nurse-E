<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <link rel="stylesheet" href="login.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../navbar/header-main.php';
      ?>
    </header>
    <body>
    <div class="container">
      <div class="centerbox">
        <h4>J'ai déjà un compte MédicoBot</h4>
      <div class="container_form">
        <form action="../../controller/login.inc.php" method="post">
          <input type="text" name="username" placeholder="Adresse email ou pseudo"><br><br>
          <div class="eyes">
            <input type="password" name="pwd" placeholder="Mot de passe">
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="centerbox">
            <button type="submit" name="submit" class="confbutton">Confirmer</button><br>
          </div>
        </form>
        <p><a href="forgotpwd.php">Mot de passe oublié?</a></p>
      </div>
    </div>
    <div class="container">
      <div class="centerbox">
          <h4>Je n'ai pas de compte MédicoBot</h4>
          <p><a href="signup.php">S'inscrire</a></p>
      </div>
    </div>

    <script>
      let input = document.querySelector('.eyes input');
      let showBtn = document.querySelector('.eyes i');
      showBtn.onclick =function(){
          if(input.type == "password"){
            input.type = "text";
            showBtn.classList.add('active');
          }else {
            input.type = "password";
            showBtn.classList.remove('active');
          }

      }
    </script>
      <?php
        if (isset($_GET["error"])){
          if ($_GET["error"] === "emptyinput") {
            echo "<p> Veuillez remplir chaque compartiments !</p>";
          } 
          else if ($_GET["error"] === "accnotexist") {
            echo "<p> Ce compte n'existe pas; veuillez en créer un.</p>";
          }
          else if ($_GET["error"] === "accnotverified") {
            echo "<p> Ce compte n'est pas encore vérifié, veillez le vérifier avec l'email envoyé par nous</p>";
          }
          else if ($_GET["error"] === "wronglogin") {
            echo "<p> Veuillez réessayer, mauvais identifiant et/ou mot de passe</p>";
          }
          else if ($_GET["error"] === "failedprocess") {
            echo "<p> Quelque chose n'a pas marché, veuillez rééssayer ultérieurement</p>";
          }
          else if ($_GET["error"] === "remadepwd") {
            echo "<p> Mot de passe changé ! Essayez de vous identifier avec le nouveau mot de passe !</p>";
          }
          else if ($_GET["error"] === "none") {
            echo "<p> Succès !</p>";

          } 
        } 
      ?>
    </div>
    </div>

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>
