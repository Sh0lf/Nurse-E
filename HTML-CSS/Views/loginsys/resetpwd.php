<!DOCTYPE html>



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
        <div class="container_form"
            <form method="post" action="../../Controller/resetpwd.inc.php">
                <input type="number" name="code" class="hidden" default='.$code.'><br>
                <label><u>Notez un nouveau mot de passe</u></label><br><br>
                <input type="password" name="pwd" placeholder="Nouveau mot de passe..."><br><br>
                <div class="centerbox">
                    <button type="submit" name="submit_pwd" class="confbutton">Confirmer</button><br>
                </div>
            </form>
        </div>
    </div>';
    } else {
        header("location: ../Views/index.php");
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