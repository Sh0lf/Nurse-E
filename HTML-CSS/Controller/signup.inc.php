<!-- php script for database connection communication -->
<?php
<<<<<<< HEAD
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';
include_once './sendEmail.php';

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

  if (EmptyInputSignup($username, $nom, $prenom, $email, $phone, $sexe, $pwd, $pwdrep, $role, $idkit) !== false){
    header("location: ../views/loginsys/signup.php?error=emptyinput");
=======

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $sexe = $_POST["sexe"];
  $pwd = $_POST["pwd"];
  $pwdrep = $_POST["pwdrep"];
  $role = $_POST["role"];
  $idkit = $_POST["idkit"];

  include_once 'dbh.inc.php';
  include_once 'functions.inc.php';

  if (EmptyInputSignup($username, $nom, $prenom, $email, $phone, $sexe, $pwd, $pwdrep, $role, $idkit) != false){
    header("location: ../Views/inscription.php?error=emptyinput");
>>>>>>> 28487d0 (update php MVC partiel login system)
    exit();
  }

  if (invalidUid($username) !== false){
<<<<<<< HEAD
    header("location: ../views/loginsys/signup.php?error=invaliduid");
=======
    header("location: ../Views/inscription.php?error=invaliduid");
>>>>>>> 28487d0 (update php MVC partiel login system)
    exit();
  }
  
  if (invalidEmail($email) !== false){
<<<<<<< HEAD
    header("location: ../views/loginsys/signup.php?error=invalidemail");
=======
    header("location: ../Views/inscription.php?error=invalidemail");
>>>>>>> 28487d0 (update php MVC partiel login system)
    exit();
  }

  if (pwdMatch($pwd, $pwdrep) !== false){
<<<<<<< HEAD
    header("location: ../views/loginsys/signup.php?error=pwdmissmatch");
    exit();
  }

  if (uidExists($conn, $username, $email) !== false){
    header("location: ../views/loginsys/signup.php?error=uidexists");
    exit();
  }

  if (pwdStrengthChecker($pwd) !== false){
    header("location: ../views/loginsys/signup.php?error=pwdstrength");
    exit();
  }

  createUser_temp($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $code, $idkit, $sendMl);
}
if (isset($_GET["code"])) {
  $code = $_GET["code"];
  $username = $_GET["username"];
  $t = time();
  $timestamp = date(("Y-m-d H:i:s"));
  accCompletion($conn, $username, $timestamp, $code);
}

else {
  header("location: ../views/loginsys/signup.php");
=======
    header("location: ../Views/inscription.php?error=pwdmissmatch");
    exit();
  }

  if (UidExists($conn, $username, $email) !== false){
    header("location: ../Views/inscription.php?error=uidexists");
    exit();
  }

  createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $idkit);

} 
else {
  header("location: ../Views/inscription.php");
>>>>>>> 28487d0 (update php MVC partiel login system)
  exit();
}

?>