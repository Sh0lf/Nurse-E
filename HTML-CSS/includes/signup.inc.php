<!-- php script for database connection communication -->
<?php

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $pwdrep = $_POST["pwdrep"];
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $sexe = $_POST["sexe"];
  $SpeMed = $_POST["SpeMed"];
  $role = "";

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($username, $pwd, $pwdrep, $nom, $prenom, $email, $phone, $sexe) !== false){
    header("location: ../Views/inscription.php?error=emptyinput");
    exit();
  }

  if (invalidUid($username) !== false){
    header("location: ../Views/inscription.php?error=invaliduid");
    exit();
  }
  
  if (invalidEmail($email) !== false){
    header("location: ../Views/inscription.php?error=invalidemail");
    exit();
  }

  if (pwdMatch($pwd, $pwdrep) !== false){
    header("location: ../Views/inscription.php?error=pwdmissmatch");
    exit();
  }

  if (UidExists($username) !== false){
    header("location: ../Views/inscription.php?error=invaliduid");
    exit();
  }

  if(emptyInputSignup($conn, $SpeMed) == true){
    $role="client";
  } else {
    $role="medecin";
  }

  createUser($conn, $username, $pwd, $nom, $prenom, $email, $phone, $sexe) {
    
  }

} else {
  header("location: ../Views/inscription.php");
}


?>