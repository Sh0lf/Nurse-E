<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <link rel="stylesheet" href="login.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../navbar/header-main.php';
      ?>
    </header>
    <div class="container">
      <h2>Connexion</h2><br>
    </div>
    <div class="container_form">
      <form action="../../Controller/login.inc.php" method="post">
        <label><u>Votre pseudo ou votre Email</u></label><br>
        <input type="text" name="username" placeholder="Username/Email..."><br><br>

        <label><u>Votre mot de passe</u></label><br>
        <div class="eyes">
          <input type="password" name="pwd" placeholder="Mot de passe...">
          <i class="fa-solid fa-eye"></i><br>
        </div>
        
        <button type="submit" name="submit">Confirmer</button><br>
      </form>
      <p><a href="">Mot de passe oublié?</a></p>
      <p><a href="signup.php">Inscription</a></p>
    </div>
    <script>
      let input = document.querySelector('.eyes input');
      let showBtn = document.querySelector('.eyes i');
      showBtn.onclick =function(){
          if(input.type == "password"){
            input.type = "text";
            showBtn.classList.add('active');
          }else {
            input.type = "password";
            showBtn.classList.remove('active');
          }

      }
    </script>
    </div>
    <div class="container">
      <?php
        if (isset($_GET["error"])){
          if ($_GET["error"] == "emptyinput") {
            echo "<p> Veuillez remplir chaque compartiments !</p>";
          } 
          else if ($_GET["error"] == "wronglogin") {
            echo "<p> Veuillez réessayer, mauvais identifiant et/ou mot de passe</p>";
          }
          else if ($_GET["error"] == "none") {
            echo "<p> Succès !</p>";

          } 
        } 
      ?>
    </div>

    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>