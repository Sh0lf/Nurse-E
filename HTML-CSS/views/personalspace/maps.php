<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>Carte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="maps.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="../../controller/maps.js"></script>
  </head>

  <script>

  </script>
  <body>
    <header>
        <?php
            include_once '../navbar/header-main.php';
        ?>
    </header>


    <div class="container">
      <h1>LOCALISATION DES MÉDECINS</h1>
      <h2>Grâce à la carte vous pouvez voir quelles sont les médecins les plus proches</h2>
      <div id="map"></div>
    </div>
    
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe7EWqc0N13BicTFz-4TnnBJz0IHu5hJw&v=beta&libraries=marker&callback=initMap"></script>
    <footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>
</html>