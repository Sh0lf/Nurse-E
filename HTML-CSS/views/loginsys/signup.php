<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
    <div class="centerbox">
      <h3>INSCRIPTION</h3>
      <h4>Vous ne pouvez que vous inscrire si vous possédez un kit.</h4>
      <div class="container_form">
        <form action="../../controller/signup.inc.php" method="post" id="signup-form" enctype="multipart/form-data">
          <input type="number" name="idkit" placeholder="Veuillez noter l'id de votre kit :">
          <br>
          <input type="text" name="nom" placeholder="Nom">
          <br>
          <input type="text" name="prenom" placeholder="Prénom">
          <br>
          <input type="email" name="email" placeholder="Adresse Mail">
          <br>
          <input type="tel" name="phone" placeholder="Numéro de téléphone" pattern="[0-9]{10}">
          <br>
          <input type="radio" name="sexe" value="Homme">
          <label>Homme</label><br>
          <input type="radio" name="sexe" id="lastsex" value="Femme">
          <label>Femme</label><br>
          <input type="text" name="username" placeholder="Votre pseudo">
          <br>
          <input type="password" name="pwd" placeholder="Votre mot de passe"><br>
          <p id="note">*Au moins 8 caractères, 1 lettre majuscule et minuscule<br>ainsi qu'un caractère spécial et un chiffre</p>
          <input type="password" name="pwdrep" id="lastpwd" placeholder="Répétez le mot de passe">
          <br>
          <p style="font-weight:bold;">Etes-vous un médecin ?</p>
          <input type="radio" name="role" value="client">
          <label>Non</label><br>
          <input type="radio" name="role" value="médecin">
          <label>Oui</label><br><br>
          <label style="font-weight:bold;">Ajoutez une photo de profil :</label>
          <input type="file" id="pfp" name="pfp" accept="image/*">
        </form>    
      </div>
      <div class="centerbox"> 
        <button type="submit" form="signup-form" name="submit" class="confbutton">Confirmer</button>
      </div>
    </div>
    </div>
    <div class="centerbox">
      <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] === "emptyinput") {
          echo "<p> Veuillez remplir chaque compartiments !</p>";
        } else if ($_GET["error"] === "invaliduid") {
          echo "<p> Veuillez essayer un nouveau username !</p>";
        } else if ($_GET["error"] === "invalidemail") {
          echo "<p> Veuillez mettre un email valide !</p>";
        } else if ($_GET["error"] === "pwdmissmatch") {
          echo "<p> Les mots de passes ne sont pas les mêmes </p>";
        } else if ($_GET["error"] === "uidexists") {
          echo "<p> Veuillez essayer un nouveau username ou un nouveau email, un compte existe déjà avec vos identifiants</p>";
        } else if ($_GET["error"] === "pwdstrength") {
          echo "<p> Votre mot de passe ne remplit pas les conditions nécessaires. Je vous rappelle qu'il faut:<br> Au moins 8 caractères, 1 lettre majuscule et minuscule ainsi qu'un caractère spécial et un chiffre </p>";
        } else if ($_GET["error"] === "verifyemail") {
          echo "<p> Inscription passée, veuillez vérifier votre email sous les 2 prochaines heures !</p>";
        } else if ($_GET["error"] === "stmtfailed") {
          echo "<p> Quelque chose n'a pas marché, veuillez essayer encore</p>";
        } else if ($_GET["error"] === "toolate") {
          echo "<p> Vous avez passé trop de temps à valider le compte, veuillez recommencer entièrement</p>";
        } else if ($_GET["error"] === "toobig") {
            echo "<p> Votre fichier de photo de profile est trop lourd, veuillez choisir un auter plus léger</p>";
        } else if ($_GET["error"] === "badformat") {
          echo "<p> Votre fichier de photo de profile n'est pas un format que nous acceptons: seulement .jpg, .jpeg et .png</p>";
        } else if ($_GET["error"] === "uploaderr") {
          echo "<p> Il y a eu un problème de publication de votre fichier, veuillez contacter l'admin ou réessayer ultérieurement.</p>";
        } else if ($_GET["error"] === "none") {
          echo "<p> Succès ! Votre compte est bien enregistré et vérifié !</p>";
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
