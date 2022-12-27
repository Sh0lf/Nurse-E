<!-- php script for database connection communication -->
<?php

include_once 'dbh.inc.php';
include_once 'functions.inc.php';
include_once '../Model/SQL-loginsystem.php';
include_once 'sendEmail.php';

if (isset($_POST["submit"])) {
  $code = rand();
  $username = test_input($_POST["username"]);
  $nom = test_input($_POST["nom"]);
  $prenom = test_input($_POST["prenom"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $sexe = test_input($_POST["sexe"]);
  $pwd = test_input($_POST["pwd"]);
  $pwdrep = test_input($_POST["pwdrep"]);
  $role = test_input($_POST["role"]);
  $idkit = test_input($_POST["idkit"]);

  if (EmptyInputSignup($username, $nom, $prenom, $email, $phone, $sexe, $pwd, $pwdrep, $role, $idkit) != false){
    header("location: ../Views/loginsys/signup.php?error=emptyinput");
    exit();
  }

  if (invalidUid($username) !== false){
    header("location: ../Views/loginsys/signup.php?error=invaliduid");
    exit();
  }
  
  if (invalidEmail($email) !== false){
    header("location: ../Views/loginsys/signup.php?error=invalidemail");
    exit();
  }

  if (pwdMatch($pwd, $pwdrep) !== false){
    header("location: ../Views/loginsys/signup.php?error=pwdmissmatch");
    exit();
  }

  if (uidExists($conn, $username, $email) !== false){
    header("location: ../Views/loginsys/signup.php?error=uidexists");
    exit();
  }

  if (pwdStrengthChecker($pwd) !== false){
    header("location: ../Views/loginsys/signup.php?error=pwdstrength");
    exit();
  }

  createUser_temp($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $code, $idkit, $sendMl);
}
if (isset($_GET["code"])) {
  $code = $_GET["code"];
  $username = $_GET["username"];
  accCompletion($conn, $username, $code);
}

else {
  header("location: ../Views/loginsys/signup.php");
  exit();
}

?>