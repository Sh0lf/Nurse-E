<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capteurs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
    <link rel="stylesheet" href="capteur.css">
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
    <div class="container">
        <div class="subcontainer" style="background-color:#FFD1DC">
            <h1>Capteur cardiaque</h1>
        <div class="image">
            <img src="image4.jpg" alt="Image 4">
        </div>
        <div class="bouton">
            <button class="bouton">Accédez à vos résultats</button>
        </div>
        </div>
    
    
        <div class="subcontainer" style="background-color: #D1FFD1;">
            <h1>Capteur sonore</h1>
        <div class="image">
            <img src="image4.jpg" alt="Image 4">
        </div>
        <div class="bouton">
            <button class="bouton">Accédez à vos résultats</button>
        </div>
        </div> 
    
        <div class="subcontainer" style="background-color: #D1D1FF;">
            <h1>Capteur d'humidité et de température</h1>
        <div class="image">
            <img src="image4.jpg" alt="Image 4">
        </div>
        <div class="bouton">
            <button class="bouton">Accédez à vos résultats</button>
        </div>
        </div> 
    

        <div class="subcontainer" style="background-color: #FFD1D1;">
            <h1>Capteur de CO2</h1>
        <div class="image">
            <img src="image4.jpg" alt="Image 4">
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

