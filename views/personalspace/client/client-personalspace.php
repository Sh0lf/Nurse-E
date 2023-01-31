<!DOCTYPE html>


<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client personal space</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
    <link rel="stylesheet" href="client-personalspace.css">
    <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png" />
    <link rel="stylesheet" href="../../assets/template.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../../navbar/header-main.php';
        include_once '../../assets/templateb.php';
      ?>
    </header>
    <?php
    if (!isset($_SESSION['iduser'])){
      header('location: ../../mainmenu.php');
      exit;
    }?>

    <div class=container>
    <h1>Bonjour, <?php echo $_SESSION["name"]?></h1>

    <a href="../../../controller/creatediagnostique.php" style="margin: 20px auto;"><button class="bigbutton"> Faire un diagnostique</button></a>
    <button class="bigbutton">Accéder à l'historique</button>
    <a href="../profil.php" style="margin: 20px auto;"><button class="bigbutton"> Options</button></a>
    </div>

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>
