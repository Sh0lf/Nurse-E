<!DOCTYPE html>

<?php
if (!isset($_SESSION['iduser'])){
  header('location: ../../mainmenu.php');
  exit;
}

// On récupère tous les utilisateurs sauf l'utilisateur en cours
  $afficher_profil = $bdd->query("SELECT * 
  FROM user 
  WHERE id <> ?",
  array($_SESSION['id']));
  $afficher_profil = $afficher_profil->fetchAll(); // fetchAll() permet de récupérer plusieurs enregistrements
?>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client personal space</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../../navbar/header-main.php';
      ?>
    </header>

    <div>Utilisateurs</div>
    <table>
      <tr>
        <th>Nom</th> 
        <th>Prénom</th>
        <th>Voir le profil</th>
      </tr>
      <?php
        // Foreach agit comme une boucle mais celle-ci s'arrête de façon intelligente. 
        // Elle s'arrête avec le nombre de lignes qu'il y a dans la variable $afficher_profil
        // La variable $afficher_profil est comme un tableau contenant plusieurs valeurs
        // pour lire chacune des valeurs distinctement on va mettre un pointeur que l'on appellera ici $ap
        foreach($afficher_profil as $ap){
          echo '<tr>          
            <td><?= $ap["nom"] ?></td>
            <td><?= $ap["prenom"] ?></td>
            <td><a href="voir_profil.php?id=<?= $ap["id"] ?>">Aller au profil</a></td>
          </tr>';
        }
        ?>
    </table>


    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>