<!DOCTYPE html>


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
    <?php
    if (!isset($_SESSION['iduser'])){
      header('location: ../../mainmenu.php');
      exit;
    }?>

    <h1>Bonjour, <?php echo $_SESSION["name"]?></h1>

    <button class="bigbutton" href="../../../controller/creatediagnostique.php"> Faire un diagnostique</button>
    <button class="bigbutton">Accéder à l'historique</button>
    <button class="bigbutton" href="profil.php"> Options</button>

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>