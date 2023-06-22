<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capteurs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
    <link rel="stylesheet" href="capteurs.css">
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
      header('location: ../../loginsys/login.php');
      exit;
    } elseif (isset($_SESSION['iduser']) && !isset($_GET['capt1']) && !isset($_GET['capt2']) && !isset($_GET['capt3'])){
      header('location: ../../../controller/fetchTomcatToData.php');
    } elseif(isset($_SESSION['iduser']) && isset($_GET['capt1']) && isset($_GET['capt2']) && isset($_GET['capt3'])){
      $Capt1 = $_GET['capt1'] / 10;
      $Capt2 = $_GET['capt2'] / 10;
      $Capt3 = $_GET['capt3'] / 10;
    }
    
    
    ?>
    <div class="container">
    <div class="subcontainer">
      <h1>Capteur sonore</h1>
      <div class="image">
        <img src="/views/assets/Icon-son.png" alt="Son">
      </div>
      <div>
        <?php echo "Il y a ". $Capt3 . "dB"?>
      </div>
        <a href="../../../controller/sendingRequest.php?arg=dB"><div class = "petitbouton"><button>Demander dB</button></div></a>
      <a href="historique.php?arg=10">
        <div class="bouton">
          <button>Accédez à vos résultats</button>
        </div>
      </a>
    </div>
     
    <div class="subcontainer">
      <h1>Capteur d'humidité</h1>
      <div class="image">
        <img src="/views/assets/Icon-humidite.png" alt="Humidité">
      </div>
      <div>
        <?php echo "Il y a ". $Capt2 . "% d'humidité"?>
      </div>
        <a href="../../../controller/sendingRequest.php?arg=hum"><div class = "petitbouton"><button>Demander %</button> </div></a>
      <a href="historique.php?arg=4">
        <div class="bouton">
          <button>Accédez à vos résultats</button>
        </div>
      </a>
      
    </div> 

    <div class="subcontainer">
      <h1>Capteur de température</h1>
      <div class="image">
        <img src="/views/assets/Icon-temperature.png" alt="Température">
      </div>
      <div>
        <?php echo "Il fait ". $Capt1 . "°C"?>
      </div>
        <div class = "petitbouton"><a href="../../../controller/sendingRequest.php?arg=temp"><button>Demander °C</button></a></div>
      <a href="historique.php?arg=3">
        <div class="bouton">
          <button>Accédez à vos résultats</button>
        </div>
      </a>
    </div> 
  </div>
 </body>

 <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../../navbar/footer.php';
      ?>
    </footer>
    
</html>
