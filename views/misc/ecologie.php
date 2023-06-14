<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
        <title>Ecologie</title>
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
        <link rel="stylesheet" href="styleecologie.css">
        <link rel="stylesheet" href="../navbar/navbar-eco.css">
        <link rel="shortcut icon" href="/views/assets/logo nurse-e 1.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <header>
          <?php
              include_once '../navbar/header-main.php';
          ?>
     </header>
     <body>
          <div class="container" id="first-part">
              <p class="text-over">Lorsque vous avez créé votre compte chez nous,
                  vous avez aussi planté un <span style="color:#4FB24C">arbre</span> en votre nom! 
                  C'est dans cette partie du site que vous pourrez
                  suivre l'évolution de votre <span style="color:#4FB24C">arbre</span>. 
                  Vous pouvez aussi avoir accès à toutes les news sur ce  
                  qui se passe dans le monde niveau avancé <span style="color:#4FB24C">écologique </span>!
              </p>
          </div>
          <footer>
            <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
            <?php
              include_once '../navbar/footer.php';
            ?>
          </footer>
      </body> 