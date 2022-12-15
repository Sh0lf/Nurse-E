<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <link rel="stylesheet" href="signup.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../navbar/header-main.php';
      ?>
    </header>


    <div class="container">
      <h1>INSCRIPTION</h1><br>
      <h2>Vous ne pouvez que vous inscrire si vous possédez un kit.</h2>
    </div>
    <div class="container_form">
      <form action="../../Controller/signup.inc.php" method="post">
        <label><u>Veuillez noter l'id de votre kit:</u></label><br>
        <input type="number" name="idkit" placeholder="id de votre kit"><br>

        <label><u>Votre nom de famille:</u></label><br>
        <input type="text" name="nom" placeholder="Nom..."><br>

        <label><u>Votre prénom:</u></label><br>
        <input type="text" name="prenom" placeholder="Prenom..."><br>

        <label><u>Votre email:</u></label><br>
        <input type="email" name="email" placeholder="Email..."><br>

        <label><u>Votre numéro de teléphone:</u></label><br>
        <input type="tel" name="phone" placeholder="+33 ....." pattern="[0-9]{10}"><br>

        <label><u>Votre sexe:</u></label><br>
        <input type="radio" name="sexe" value="Homme">
        <label>Homme</label><br>
        <input type="radio" name="sexe" value="Femme">
        <label>Femme</label><br>

        <label><u>Votre pseudo:</u></label><br>
        <input type="text" name="username" placeholder="Username..."><br>
        <label><u>Notez votre mot de passe:</u></label><br>
        <input type="password" name="pwd" placeholder="Mot de passe..."><br>
        <input type="password" name="pwdrep" placeholder="Répéter Mot de passe..."><br>

        <label><u>Etes-vous un médecin ?</u></label><br>
        <input type="radio" name="role" value="client">
        <label>Non</label><br>
        <input type="radio" name="role" value="médecin">
        <label>Oui</label><br>
        <button type="submit" name="submit">Confirmer</button>
      </form>
    </div>
    <div class="container">
      <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p> Veuillez remplir chaque compartiments !</p>";
        } else if ($_GET["error"] == "invaliduid") {
          echo "<p> Veuillez essayer un nouveau username !</p>";
        } else if ($_GET["error"] == "invalidemail") {
          echo "<p> Veuillez mettre un email valide !</p>";
        } else if ($_GET["error"] == "pwdmissmatch") {
          echo "<p> Les mots de passes ne sont pas les mêmes </p>";
        } else if ($_GET["error"] == "uidexists") {
          echo "<p> Veuillez essayer un nouveau username, il existe déjà</p>";
        } else if ($_GET["error"] == "stmtfailed") {
          echo "<p> Quelque chose n'a pas marché, veuillez essayer encore</p>";
        } else if ($_GET["error"] == "none") {
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