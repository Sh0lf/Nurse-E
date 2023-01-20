<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="refresh" content="30">
        <meta content="width=device-width, initial-scale=1.0">
        <title>Notre histoire</title>
        <link rel="stylesheet" href ="../navbar/navbar-main.css">
        <link rel="stylesheet" href ="apropos.css">
        <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png" />

    </head>

  <body>
    <header>
    <?php
        include_once '../navbar/header-main.php';
      ?>
    </header>

    <div class="container">
      <!--Définition pour chaque partie du paragraphe et de l'image-->
        <h1 class="titre">Qui sommes-nous ?</h1>
        <div class="subcontainer">
            <div class="paragraphe">
                <p>Nurse-E, entreprise spécialisée dans le domaine médical.
            Nous avons pour objectif de développer des outils permettant de faciliter la vie des patients et des médecins.
            Médicobot, notre produit principal, est une plateforme de soin intelligente capable de diagnostiquer des maladies bénignes. Il est 
            capable de prescrire des médicaments en cas de faible danger, et , en cas de nécéssité, de contacter un médecin. Médicobot, 
            intermédiaire efficace et sécurisé entre les patients et les médecins, est donc un outil nécéssaire à un diagnostique  adapté et fiable.</p>
            </div>
        </div>


        <h1 class="titre">Notre histoire</h1>
        <div class="subcontainer">
            <div class="image1">
                <img class="image1" src="http://nurse-medicobot.wstr.fr/views/assets/travail_groupe.png" alt="travail groupe" width="80%">
            </div>
            <div class="paragraphe">
                <p>
            Durant la récente crise sanitaire, les métiers de la santé ont  été sur sollicités. Ainsi, de nombreux malades peu gravement atteints, n’ont pas été pris en charge par manque de temps et de personnel.
            Il est donc  devenu essentiel d’améliorer les conditions d’exercice et l’efficacité des diagnostiques. 
            C'est pourquoi chez Nurse-E notre objectif est d’améliorer la situation du monde médical, en mettant en place une plateforme de soin intelligente, Médicobot, capable de diagnostiquer des maladies bénignes, de prescrire des médicaments en cas de faible danger, et de contacter un médecin en cas de nécessité. 
            Utiliser Médicobot c’est donc faire gagner du temps aux médecins et aux clients, et améliorer l’efficacité et la rapidité des diagnostiques.
            </p>
            </div>
        </div>
    </div>

    <!--Définition des valeurs de l'entreprise et schéma des valeurs-->
    <div class="container">

        <h1 class="titre">Nos valeurs</h1>
        <div class="cycle">
            <img class="cycle" src="http://nurse-medicobot.wstr.fr/views/assets/Cyclevaleur.png">
        </div>
        <div class="row">
            <div class="column">
                <p class="para"><span class="gras">Simplicité</span><br>
                Nos outils sont ergonomiques et faciles à utiliser.</p>  
            </div>
            <div class="column">
                <p class="para"><span class="gras">Accessibilté</span><br>
                Nos outils sont offerts à tous les médecins  et clients.</p>
            </div>
            <div class="column">
                <p class="para"><span class="gras">Sécurité</span><br>
                Nous garentissons la sécurité de nos outils à tous nos utilisateurs.</p>                      
            </div>
        </div>
    </div>
        
    <footer>
        <?php
            include_once '../navbar/footer.php';
        ?>
    </footer>

   
  </body>
</html>