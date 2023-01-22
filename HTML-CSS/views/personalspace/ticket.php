<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="ticket.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png">
    <link rel="stylesheet" href="../assets/template.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
        <?php
            include_once '../navbar/header-main.php';
        ?>
    </header>
    
    <?php 
    
    if(!isset($_SESSION["iduser"])){
        header("location: ../loginsys/login.php");
        exit();
    }
    
    ?>
    
        <?php include_once '../assets/templateb.php'; ?>
        <div class="contient-tout">
            <h1 style="text-align: center; margin-bottom:26px">TICKET</h1>
        <?php
        include_once '../../model/SQL-personalinfopage.php';
        include_once '../../controller/dbh.inc.php';

        $questions = showAllTicketClient($conn, $_SESSION["iduser"]);
        foreach ($questions as $faq) : ?>
          <details class="styled">
              <summary><?php echo $faq['question']; ?></summary>
              <!-- accordion for answer -->
              <?php echo $faq['reponse']; ?>
          </details>
        <?php endforeach; ?>
          <div class="container">
              <h2 class="text-center"> Posez vos questions ! Nous allons faire de notre mieux pour vous répondre le plus vite possible</h2>
              <!-- question, auto-populate -->
              <form action="../../controller/ticketprocess.php" method="POST">
                  <input type="hidden" name="iduser" value=<?php echo $_SESSION["iduser"] ?> >
                  <input type="text" name="question" class="form-control">
                  <input type="submit" name="submit_ques" class="btn btn-info" value="Envoyer le ticket" />
              </form>

              <?php
                  if ((isset($_GET["error"]))&& $_GET["error"]=="success"){
                  echo "Demande bien envoyé !";
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