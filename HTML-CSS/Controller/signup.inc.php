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

include_once 'dbh.inc.php';
include_once 'mysqli.dbh.php';
include_once 'functions.inc.php';
include_once '../Model/SQL-loginsystem.php';

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
<<<<<<< HEAD
<<<<<<< HEAD
    header("location: ../Views/inscription.php?error=emptyinput");
>>>>>>> 28487d0 (update php MVC partiel login system)
=======
    header("location: ../Views/signup.php?error=emptyinput");
>>>>>>> b1f0779 (update: commit changes)
=======
    header("location: ../Views/loginsys/signup.php?error=emptyinput");
>>>>>>> 9a3888f (organization update, to change stylesheets)
    exit();
  }

  if (invalidUid($username) !== false){
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    header("location: ../views/loginsys/signup.php?error=invaliduid");
=======
    header("location: ../Views/inscription.php?error=invaliduid");
>>>>>>> 28487d0 (update php MVC partiel login system)
=======
    header("location: ../Views/signup.php?error=invaliduid");
>>>>>>> b1f0779 (update: commit changes)
=======
    header("location: ../Views/loginsys/signup.php?error=invaliduid");
>>>>>>> 9a3888f (organization update, to change stylesheets)
    exit();
  }
  
  if (invalidEmail($email) !== false){
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    header("location: ../views/loginsys/signup.php?error=invalidemail");
=======
    header("location: ../Views/inscription.php?error=invalidemail");
>>>>>>> 28487d0 (update php MVC partiel login system)
=======
    header("location: ../Views/signup.php?error=invalidemail");
>>>>>>> b1f0779 (update: commit changes)
=======
    header("location: ../Views/loginsys/signup.php?error=invalidemail");
>>>>>>> 9a3888f (organization update, to change stylesheets)
    exit();
  }

  if (pwdMatch($pwd, $pwdrep) !== false){
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    header("location: ../Views/signup.php?error=pwdmissmatch");
>>>>>>> b1f0779 (update: commit changes)
=======
    header("location: ../Views/loginsys/signup.php?error=pwdmissmatch");
>>>>>>> 9a3888f (organization update, to change stylesheets)
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

  else {
    accVerif_sendingEmail($conn_sqli, $nom, $email, $code);
  }

  if (isset($_GET['code'])) {
    $id = $_GET['code'];
    if (accVerif_verifyingCode($conn, $id) !== false){
      header("location: ../Views/loginsys/signup.php?error=issueverif");
      exit();
    } else {
      createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $idkit);
    }
  }
  
  //createUser($conn, "Sh0lf", "yoplait", "VinSang", "vyvincentyap@gmail.com", 778266459, "Homme", "mdpaupif", "client", 1);
} 
else {
<<<<<<< HEAD
  header("location: ../Views/inscription.php");
>>>>>>> 28487d0 (update php MVC partiel login system)
=======
  header("location: ../Views/signup.php");
>>>>>>> b1f0779 (update: commit changes)
  exit();
}

?>