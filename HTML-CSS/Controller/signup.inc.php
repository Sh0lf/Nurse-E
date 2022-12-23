<!-- php script for database connection communication -->
<?php

if (isset($_POST["submit"])) {
  $username = htmlspecialchars($_POST["username"]);
  $nom = htmlspecialchars($_POST["nom"]);
  $prenom = htmlspecialchars($_POST["prenom"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $sexe = htmlspecialchars($_POST["sexe"]);
  $pwd = htmlspecialchars($_POST["pwd"]);
  $pwdrep = htmlspecialchars($_POST["pwdrep"]);
  $role = htmlspecialchars($_POST["role"]);
  $idkit = htmlspecialchars($_POST["idkit"]);

  include_once 'dbh.inc.php';
  include_once 'functions.inc.php';

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

  if (UidExists($conn, $username, $email) !== false){
    header("location: ../Views/loginsys/signup.php?error=uidexists");
    exit();
  }

  createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $idkit);

  //createUser($conn, "Sh0lf", "yoplait", "VinSang", "vyvincentyap@gmail.com", 778266459, "Homme", "mdpaupif", "client", 1);
} 
else {
  header("location: ../Views/signup.php");
  exit();
}

?>