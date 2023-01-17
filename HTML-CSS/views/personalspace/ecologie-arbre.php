<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>Arbre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="ecologie-arbre.css">
    <link rel="stylesheet" href="../navbar/navbar-eco.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <script>

  </script>
  <body>
    <header>
        <?php
            include_once '../navbar/header-main.php';
        ?>
    </header>

    <?php
    if (!$_SESSION["idkit"]){
        header("location: ../mainmenu.php");
        exit();
    }elseif (isset($_GET["idkit"]) && isset($_GET["idarbre"])){
        $idkit = $_GET["idkit"];
        $interval = $_GET["time"];
        $julianDay = $interval / (86400);

        echo '<div class="container">
        <h1>L\'arbre associé à votre kit diagnostique: '.$idkit.'</h1>' ;
        echo '<h2>'.$julianDay.' Jours !</h2>';

        if ($interval<=60*86400) {
            echo '<img class="tree" src="http://nurse-medicobot.wstr.fr/views/assets/smalltree.gif" >';
        } elseif ((60*86400 <= $interval) && ($interval <= 90*86400)) {
            echo '<img class="tree" src="http://nurse-medicobot.wstr.fr/views/assets/mediumtree.gif" >';
        } elseif (90*86400<=$interval) {
            echo '<img class="tree" src="http://nurse-medicobot.wstr.fr/views/assets/bigtree.gif">';
        } echo '</div>';

    } elseif (isset($_GET["idkit"]) && empty($_GET["idarbre"])) {
      echo '<h1> Pas d\'arbre sous votre kit de diagnostique associée ! Veuillez contacter le support pour vérifier</h1>';
    } elseif (isset($_SESSION["idkit"])) {
      header("location:../../controller/yourtree.php");
      exit();
    }
    ?>



    <footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>
</html>