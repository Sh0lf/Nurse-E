<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
        <?php
            include_once '../navbar/header-main.php';
        ?>
    </header>

    <div class="centerbox">
        <h2> Contactez-nous </h2><br>
    </div>

    <div class="container">
        <div class="container_form">
            <form action="../../controller/contact.inc.php" method="post">
                <label><u>Votre nom :</u></label><br><br>
                <input type="text" name="nom" placeholder="Nom..."><br><br>
                <label><u>Votre email :</u></label><br><br>
                <input type="text" name="email" placeholder="Email..."><br><br>
                <label><u>Le sujet :</u></label><br><br>
                <input type="text" name="sujet" placeholder="Sujet..."><br><br>
                <label><u>Votre reproche / remarque :</u></label><br><br>
                <textarea id="body" name="body" placeholder="..."></textarea><br><br>
                <div class="centerbox">
                    <button type="submit" name="submit_contact" class="confbutton">Confirmer</button><br>
                </div>
            </form>
        </div>
        <div class="centerbox">
        <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p> Veuillez remplir chaque compartiments !</p>";
          } else if ($_GET["error"] == "none") {
            echo "<p> Succès ! Nous avons bien reçu votre email. Nous vous avons mis en copie, veuillez vérifier votre boite mail !</p>";
          }
        }
        ?>
        </div>
    </div>

    <footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>
</html>