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

    <div class="container">
      <div class="centerbox">
          <h2> Contactez-nous </h2>
        <div class="container_form">
            <form action="../../controller/contact.inc.php" method="post">
                <input type="text" name="nom" placeholder="Votre Nom"><br><br>
                <input type="text" name="email" placeholder="Votre Email"><br><br>
                <input type="text" name="sujet" placeholder="Le Sujet"><br><br>
                <textarea id="body" name="body" placeholder="Votre remarque"></textarea><br><br>
                <div class="centerbox">
                    <button type="submit" name="submit_contact" class="confbutton">Confirmer</button><br>
                </div>
          </div>
            </form>
        </div>
        <div class="centerbox">
        <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p> Veuillez remplir tous les champs!</p>";
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
