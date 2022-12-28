<!DOCTYPE html>

<<<<<<< HEAD
=======


>>>>>>> b14763e (made pwd recovery !)
<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement de mot de passe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <link rel="stylesheet" href="resetpwd.css">
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
        echo '<div class="centerbox">
        <h2>Changer de mot de passe</h2><br>
    </div>

    <div class="container">
<<<<<<< HEAD
<<<<<<< HEAD
        <div class="container_form">
            <form method="post" action="../../controller/resetpwd.inc.php">
                <input type="hidden" name="code" value='.$code.'><br>
                <label><u>Notez un nouveau mot de passe</u></label><br><br>
                <input type="password" name="pwd" placeholder="Mot de passe..."><br>
                <p id="note">*Au moins 8 caractères, 1 lettre majuscule et minuscule,<br> un caractère spécial et un chiffre</p>
                <input type="password" name="pwdrep" id="lastpwd" placeholder="Répéter Mot de passe...">
                <div class="centerbox">
                    <button type="submit" name="submit_pwd" class="confbutton">Confirmer</button><br>
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
=======
        <div class="container_form"
=======
        <div class="container_form">
>>>>>>> aafffe2 (need to test deeply)
            <form method="post" action="../../Controller/resetpwd.inc.php">
                <input type="hidden" name="code" value='.$code.'><br>
                <label><u>Notez un nouveau mot de passe</u></label><br><br>
                <div class="eyes">
                  <input type="password" name="pwd" placeholder="Mot de passe...">
                  <i class="fa-solid fa-eye"></i><br>
                </div>
                <p id="note">*Au moins 8 caractères, 1 lettre majuscule et minuscule<br> et un caractère spécial</p>
                <div class="centerbox">
                    <button type="submit" name="submit_pwd" class="confbutton">Confirmer</button><br>
                </div>
            </form>
        </div>
    </div>';
    } else {
        header("location: ../Views/index.php");
>>>>>>> b14763e (made pwd recovery !)
        exit();
    }
    ?>

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

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>