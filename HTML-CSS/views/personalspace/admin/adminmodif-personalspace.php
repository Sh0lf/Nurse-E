<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>Page panel admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminmodif-personalspace.css">
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
        <form action="../../../controller/modify.inc.php" method="post" id="first-form">
            <label>Veuillez noter le pseudo du compte que vous voulez modifier</label><br>
            <input type="text" name="username" placeholder="Username...">
            <input type="submit" name="submit_seek">
        </form>
    </div>';
    if (isset($_GET["username"])){
        echo '
        <div class="container" id="second-form">
            <div class="container-box">
                <p><b>Username</b></p>
                <p><b>Nom de famille</b></p>
                <p><b>Prénom</b></p>
                <p><b>Email</b></p>
                <p><b>Numéro de tel</b></p>
                <p><b>Sexe</b></p>
                <p><b>Role</b></p>
                <p><b>ID kit</b></p>
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
            </div>
            </div>
            <div class="container">';
            if (isset($_GET["error"])){
                if ($_GET["error"] === "success"){
                    echo '<p>Succès modification !</p>';
                } else if ($_GET["error"] === "issue"){
                    echo '<p>Erreur, veuillez vérifier les valeurs</p>';
                } else if ($_GET["error"]=== "emptyinput"){
                    echo '<p>Ne laissez aucune case vide ! </p>';
                } else if ($_GET["error"]=== "stmtfailed"){
                    echo '<p> Problème de process derrière, regardez code </p>';
                }
            }
        echo '</div>';
        }
    } else {
        header("location: ../../mainmenu.php");
        exit();
    }   
    ?>

    <footer>
        <?php
            include_once '../../navbar/footer.php';
        ?>
    </footer>
  </body>
    

