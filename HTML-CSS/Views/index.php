<!DOCTYPE html>

<html>
  <head>
    <!--Setting up styles and the responsive factor-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Importing corresponding css style file-->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="styleaccueil.css">
    <link rel ="stylesheet" href="navbar/navbar-main.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once 'navbar/header-main.php';
      ?>
    </header>

    <div class="contact"> 
      <h1>Contact</h1><br>
      <h3>numéro 1</h3><br>
      <h3>numéro 2</h3><br>
      <h1>Localisation</h1><br>
      <div style="width: 100%"><iframe width="200" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=300&amp;hl=en&amp;q=28%20Rue%20Notre%20Dame%20des%20Champs,%2075006%20Paris+(ISEP)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
    </div>
 
    <p class="p1"><a id="home">A cause de la crise du covid, les médecins ainsi que les hôpitaux furent débordés.
        Depuis cette crise, les rendez-vous inutiles chez les médecins se multiplient.
        De ce fait, nous avons décidé de créer un produit afin de remédier à ça.
        Ce produit est MédicoBot, c’est le premier produit créé par notre entreprise Nurse-E.
      
        MedicoBot s’apprête à révolutionner le domaine du monde médical
        comme vous ne l’avez jamais vu.</a></p>
    
    <h2>
        <a id="comment">Comment ça marche ?</a>
    </h2>

    <p class ="p2">
    Ces kits vous permettront de mesurer votre température, battement de cœur, etc.
    Lorsque vous ne vous sentez pas bien, vous pourrez mesurer toutes ces fonctions grâce à notre kit.
    Vous aurez également des indications de choses à faire de vous-mêmes.
    Une fois tout celà fait, vous entrez vos résultats et notre site pourra ensuite essayer de vous indiquer ce que vous avez,
    si c'est bénin, les médicaments à prendre ainsi que pour les cas les plus graves, vous prendre un rdv chez le médecin.
    Le but de notre produit est donc d'éviter les consultations bateaux chez le médecin afin d'alléger leur emploi du temps
    mais aussi d'éviter les longs trajets pour aller voir un médecin en campagne.
    Notre site contient également toute une partie écologie(souligné qui emmène à la page) qui relate les dernières news liées à cela.
    Nous nous engageons aussi à respecter les enjeux climatiques actuels et pour se faire déjà,
    dès la création de votre compte, un arbre sera planté ayant votre nom.
    Vous pourrez ensuite suivre la poussée de cette arbre chaque jour.
    Ensuite, nous avons un calculateur de CO2, celui-ci vous indiquera le CO2 que vous avez économisé
    en évitant les déplacements chez un médecin (très intéressant pour les gens en campagne principalement)
    </p>
 
    <h2>
        <a id="produit">Notre produit</a>
    </h2>
    <div class="produit">
        <img src="exempleproduit.jpg" alt="exemple produit" style="width:350px;height:350px;" >
    </div>
 
    <div class="container">
      <input class="favorite styled"
            type="button"
            value="199 $">
    </div>
 
    <h2>
        <a id="updates">Les Updates </a>
    </h2>
    <p class ="p2">
    Les spawners n’ont plus de type de mob par défaut lorsqu’ils sont placés par un joueur (auparavant, c’était le cochon).
    N’émet pas de particules de feu lorsqu’un type d’apparition de mob n’a pas été défini.
    Renommage du Monster Spawner pour correspondre à la Bedrock, et suppression de la couleur violette du texte.
    Le Pick-block fonctionne désormais pour les blocs Spawner
    Le type de mob est maintenant affiché dans la description du survol d’une pile d’éléments de Spawner.
    Si un type de mob n’a pas encore été défini, la description du survol décrira comment le définir.
    Ajout de nouveaux œufs de ponte pour les monstres Ender Dragon, Iron Golem, Snow Golem et Wither en mode Créatif.
    Les œufs d’Ender Dragon et de Wither ne seront disponibles que par le biais de commandes afin d’éviter la destruction accidentelle des constructions des joueurs.
    Les couleurs de l’œuf de ponte de l’ours polaire ont changé pour le distinguer de l’œuf de ponte du fantôme.
    Les bruits de pas peuvent maintenant être entendus en marchant dessus :
    tapis
    nénuphars
    petits amas d’améthyste
    Les bruits de pas peuvent maintenant être entendus lorsque l’on marche à travers :
    germes du Nether
    lichen lumineux
    racines carmin
    racines biscornues
    </p>
    <h2>
        <a id="questions">Vos questions </a>
    </h2>
    <div class="contact_bis"> <h1>Contact</h1><br>
      <h3>numéro 1</h3><br>
      <h3>numéro 2</h3><br>
      <h1>Localisation</h1><br>
      <div style="width: 100%"><iframe width="200" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=300&amp;hl=en&amp;q=28%20Rue%20Notre%20Dame%20des%20Champs,%2075006%20Paris+(ISEP)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
    </div>
    
    <footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
      include_once 'navbar/footer.php';
      ?>
    </footer>
  </body>
</html>