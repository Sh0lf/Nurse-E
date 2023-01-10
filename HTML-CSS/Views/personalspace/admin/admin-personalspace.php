<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>Page panel admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-personalspace.css">
  </head>

  <body>
    <header>
        <?php
            include_once '../../navbar/header-main.php';
        ?>
    </header>
    
    <?php
    if ($_SESSION["role"]==="admin"){
        echo '<div class="container">
        <form action="../../../controller/modify.inc.php" method="post">
            <label>Veuillez noter le pseudo du compte que vous voulez modifier</label><br>
            <input type="text" name="username" placeholder="Username...">
            <input type="submit" name="submit_seek">
        </form>
    </div>';
    if (isset($_GET["id"])){
        echo '
        <div class="container">
        <div class="container-box">
        <p><u>Username</u></p>
        <p><u>Nom de famille</u></p>
        <p><u>Prénom</u></p>
        <p><u>Email</u></p>
        <p><u>Numéro de tel</u></p>
        <p><u>Sexe</u></p>
        <p><u>Role</u></p>
        <p><u>ID kit</u></p>
        </div>
        <div class="container-box">
        <form action="../../../controller/modify.inc.php" method="post">
            <input type="hidden" name="iduser" value="' . $_GET["id"] . '">
            <input type="text" name="username" value="' . $_GET["username"].'">
            <input type="text" name="familyname" value="'.$_GET["family"].'">
            <input type="text" name="name" value="'.$_GET["name"].'">
            <input type="text" name="email" value="'.$_GET["email"].'">
            <input type="text" name="phone" value="'.$_GET["phone"].'">
            <input type="text" name="sexe" value="'.$_GET["sexe"].'">
            <input type="text" name="role" value="'.$_GET["role"].'">
            <input type="number" name="idkit" value="'.$_GET["idkit"].'"><br>
            <button type="submit" name="submit_modify">Confirmer Modification</button>
        </form>
        </div>';
        if (isset($_GET["error"])){
            if ($_GET["error"] === "success"){
                echo '<p>Succès modification !</p>';
            } else if ($_GET["error"] === "issue"){
                echo '<p>Erreur, veuillez vérifier les valeurs</p>';
            }
        }
        echo '</div>';
        }
    } else {
        header("location: ../../mainmenu.php");
    }   
    ?>

    <footer>
        <?php
            include_once '../../navbar/footer.php';
        ?>
    </footer>
  </body>
    

