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

    <div class="centerbox">
        <h2>Oublié mot de passe ?</h2><br>
    </div>

    <div class="container">
        <div class="container_form">
            <form method="post" action="../../controller/forgotpwd.inc.php">
                <label><u>Votre Email</u></label><br><br>
                <input type="text" name="email" placeholder="Email..."><br><br>
                <div class="centerbox">
                    <button type="submit" name="submit_email" class="confbutton">Confirmer</button><br>
                </div>
            </form>
        </div>
    </div>

    <div class="centerbox">
        <?php
        if (isset($_GET["error"])){
          if ($_GET["error"] == "accnotexist") {
            echo "<p> Ce compte n'existe pas; veuillez en créer un.</p>";
          }
          else if ($_GET["error"] == "accnotverified") {
            echo "<p> Ce compte n'est pas encore vérifié, veuillez le vérifier avec l'email envoyé par nous</p>";
          }
          else if ($_GET["error"] == "verifyacc") {
            echo "<p> Demande enregistré, veuillez vérifier votre boite email</p>";
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