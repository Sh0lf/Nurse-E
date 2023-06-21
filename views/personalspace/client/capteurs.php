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
        include_once '../../controller/fetchTomcat.php';
      ?>
    </header>
    <div class="container">
    <div class="subcontainer">
      <h1>Capteur sonore</h1>
      <div class="image">
       <a href="/views/assets/Icon-son.png">
        <img src="Icon-son.png" alt="Son">
       </a>
      </div>
      <div><?php echo $Capteur1?></div>
      <div class="bouton">
        <button class="bouton">Accédez à vos résultats</button>
      </div>
    </div>
     
    <div class="subcontainer">
      <h1>Capteur d'humidité</h1>
      <div class="image">
       <a href="/views/assets/Icon-humidite.png">
        <img src="Icon-humidite.png" alt="Humidité">
       </a>
      </div>
      <div class="bouton">
        <button class="bouton">Accédez à vos résultats</button>
      </div>
    </div> 

    <div class="subcontainer">
      <h1>Capteur de température</h1>
      <div class="image">
       <a href="/views/assets/Icon-temperature.png">
        <img src="Icon-temperature.png" alt="Température">
       </a>
      </div>
      <div class="bouton">
        <button class="bouton">Accédez à vos résultats</button>
      </div>
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
