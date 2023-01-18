<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="FAQ.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
        <?php
            include_once '../navbar/header-main.php';
        ?>
    </header>
        <div class="contient-tout">
        <?php
        include_once '../../model/SQL-faq.php';
        include_once '../../controller/dbh.inc.php';

        $questions = showAllQuestionsClient($conn);
        foreach ($questions as $faq) : ?>
          <details class="styled">
              <summary><?php echo $faq['Questions']; ?></summary>
              <!-- accordion for answer -->
              <?php echo $faq['Reponse']; ?>
          </details>
        <?php endforeach; ?>
          <div class="container">
              <h2 class="text-center"> Posez vos questions ! Nous allons faire de notre mieux pour vous répondre le plus vite possible</h2>
              <!-- question, auto-populate -->
              <form action="../../controller/faqprocess.php" method="POST">
                  <input type="text" name="question" class="form-control" required>
                  <input type="submit" name="submit_ques" class="btn btn-info" value="Add FAQ" />
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