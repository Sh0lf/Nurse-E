<!-- php script for database connection communication -->
<?php

if (isset($_POST["submit"])) {
  $username = $_GET["username"];
  $pwd = $_GET["pwd"];
  $pwdrep = $_GET["pwdrep"];
  $nom = $_GET["nom"];
  $prenom = $_GET["prenom"];
  $email = $_GET["email"];
  $phone = $_GET["phone"];
  $sexe = $_GET["sexe"];
  $role = $_GET["role"];

  include_once 'dbh.inc.php';
  include_once 'functions.inc.php';

  if (EmptyInputSignup($username, $pwd, $pwdrep, $nom, $prenom, $email, $phone, $sexe, $role) != false){
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

  if (UidExists($conn, $username, $email) !== false){
    header("location: ../Views/inscription.php?error=uidexists");
    exit();
  }

  createUser($conn, $username, $pwd, $nom, $prenom, $email, $phone, $sexe, $role);

} 
else {
  header("location: ../Views/inscription.php");
  exit();
}

?>