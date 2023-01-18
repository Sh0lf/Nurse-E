<!-- php script for database connection communication -->
<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';
include_once './sendEmail.php';
include_once '../model/SQL-personalinfopage.php';
include_once '../model/SQL-arbre.php';
include_once './uploadpfp.php';

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
    exit();
  }

  if (invalidUid($username) !== false){
    header("location: ../views/loginsys/signup.php?error=invaliduid");
    exit();
  }
  
  if (invalidEmail($email) !== false){
    header("location: ../views/loginsys/signup.php?error=invalidemail");
    exit();
  }

  if (pwdMatch($pwd, $pwdrep) !== false){
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
  
  $file_destination = '/uploadspfp/defaultpfp.jpg';

  if (isset($_FILES['pfp'])) {
    $file = $_FILES['pfp'];
    $file_destination = uploadpfp($file);
  }

  createUser_temp($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $code, $idkit, $file_destination, $sendMl);
}
if (isset($_GET["code"])) {
  $code = $_GET["code"];
  $username = $_GET["username"];
  $t = time();
  $timestamp = date(("Y-m-d H:i:s"));
  accCompletion($conn, $username, $timestamp, $code);
  $result = fetchRowUser($conn, $username);
  if ($result){
    $idkit = $result["KitDiagnostiqueidKitDiagnostique"];
    createTree($conn, $idkit);
    session_start();
    $_SESSION["iduser"]=$result["iduser"];
    $_SESSION["username"]=$result["username"];
    $_SESSION["familyname"]=$result["familyname"];
    $_SESSION["name"]=$result["name"];
    $_SESSION["email"]=$result["email"];
    $_SESSION["phone"]=$result["phone"];
    $_SESSION["sexe"]=$result["sexe"];
    $_SESSION["role"]=$result["role"];
    $_SESSION["idkit"]=$result["KitDiagnostiqueidKitDiagnostique"];
    $_SESSION["pfp_path"] = $result["pfp_path"];
  } else {
    header("location: ../views/loginsys/signup.php?error=stmtfailed");
    exit();
  }
  header("location: ../views/loginsys/signup.php?error=none");
  exit();

}

else {
  header("location: ../views/loginsys/signup.php");
  exit();
}

?>