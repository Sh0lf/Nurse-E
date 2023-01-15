<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oubli mot de passe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <link rel="stylesheet" href="forgotpwd.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../navbar/header-main.php';
      ?>
    </header>

    <div class="container">
      <div class="centerbox">
        <h4>Récupération de votre mot de passe par email</h4>
        <div class="container_form">
            <form method="post" action="../../controller/forgotpwd.inc.php">
                <input type="text" name="email" placeholder="Votre Adresse Mail"><br><br>
                <div class="centerbox">
                    <button type="submit" name="submit_email" class="confbutton">Confirmer</button><br>
                </div>
      </div>
            </form>
        </div>
    </div>

    <div class="centerbox">
        <?php
        if (isset($_GET["error"])){
          if ($_GET["error"] === "accnotexist") {
            echo "<p> Ce compte n'existe pas; veuillez en créer un.</p>";
          }
          else if ($_GET["error"] === "accnotverified") {
            echo "<p> Ce compte n'est pas encore vérifié, veuillez le vérifier avec l'email envoyé par nous</p>";
          }
          else if ($_GET["error"] === "verifyacc") {
            echo "<p> Demande enregistré, veuillez vérifier votre boite email</p>";
          } 
          else if ($_GET["error"] === "outoftime"){
            echo "<p> Vous êtes trop en retard pour modifier votre mot de passe, veuillez réessayer mais cette fois ci plus rapidement !</p>";
          }
        } 
        ?>
    </div>
    

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>
