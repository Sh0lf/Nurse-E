<!DOCTYPE html>

<html>
  <head>
    <!--Setting up styles and the responsive factor-->
    <meta content="width=device-width, initial-scale=1">
    <!--Importing corresponding css style file-->
    <link rel="stylesheet" href="styleheaderbar.css">  
  </head>

  <body>
    <header>
        <!-- Defining in header a top navigation bar-->
        <?php
            include_once 'header.php';
        ?>
    </header>

    <div class="div1">
      <!--Our body content / text-->
      <h1>
        <p>Médicobot: le diagnostique médical à portée de main !</p>
      </h1>
    </div>

    <div class="div1">
      <p class="p1">A cause de la crise du covid, les médecins ainsi que les hôpitaux furent débordés.
        Depuis cette crise, les rendez-vous inutiles chez les médecins se multiplient.
        De ce fait, nous avons décidé de créer un produit afin de remédier à ça.
        Ce produit est MédicoBot, c’est le premier produit créé par notre entreprise Nurse-E.
        
        MedicoBot s’apprête à révolutionner le domaine du monde médical 
        comme vous ne l’avez jamais vu.</p>
    </div>

    <footer>
        <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
        <?php
        include_once 'footer.php';
        ?>
    </footer>
  </body>
</html>