<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement de mot de passe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <link rel="stylesheet" href="resetpwd.css">
    <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png" />
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../navbar/header-main.php';
      ?>
    </header>
    <?php
    if (isset($_GET["code"])){
        $code = $_GET["code"];
        echo '

    <div class="container">
      <div class="centerbox">
          <h2>Changement de mot de passe</h2>
        <div class="container_form">
            <form method="post" action="../../controller/resetpwd.inc.php">
                <input type="hidden" name="code" value='.$code.'><br>
                <input type="password" name="pwd" placeholder="Nouveau mot de passe"><br>
                <p id="note">*Au moins 8 caractères, 1 lettre majuscule et minuscule,<br> un caractère spécial et un chiffre</p>
                <input type="password" name="pwdrep" id="lastpwd" placeholder="Répéter mot de passe">
                <div class="centerbox">
                    <button type="submit" name="submit_pwd" class="confbutton">Confirmer</button><br>
                </div>
      </div>';
      if (isset($_GET["error"])) {
        if ($_GET["error"] === "pwdmissmatch") {
          echo "<p> Les mots de passes ne sont pas les mêmes </p>";
        } else if ($_GET["error"] === "emptyinput") {
          echo "<p> Veuillez remplir chaque compartiment !</p>";
        } else if ($_GET["error"] === "pwdstrength") {
          echo "<p> Votre mot de passe ne remplit pas les conditions nécessaires. Je vous rappelle qu'il faut:<br> Au moins 8 caractères, 1 lettre majuscule et minuscule ainsi qu'un caractère spécial et un chiffre</p>";
        }
      }
      echo '</form>
            </div>
            </div>';
    } else {
        header("location: ../views/mainmenu.php");
        exit();
    }
    ?>

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>
