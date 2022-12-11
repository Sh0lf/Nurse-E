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
  $role = $_POST["role"];

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