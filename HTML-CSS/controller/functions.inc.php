<?php
ini_set('display_errors', 1);
include_once '../model/SQL-loginsystem.php';
include_once './dbh.inc.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function EmptyInputSignup($username, $pwd, $pwdrep, $nom, $prenom, $email, $phone, $sexe, $role, $idkit){
    $result = "";
    if (empty($username) or empty($pwd) or empty($pwdrep) or empty($nom) or empty($prenom) or empty($email) or empty($phone) or empty($sexe) or empty($role) or empty($idkit)) {
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function pwdStrengthChecker($pwd){
    $result = "";
    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function invalidUid($username){
    $result = "";
    if (!preg_match("/^[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*$/",$username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrep){
    $result = "";
    if ($pwd !== $pwdrep) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function EmptyInputLogin($username, $pwd){
    $result = "";
    if (empty($username) or empty($pwd)) {
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $checkAcc_Verified = checkAcc_Verified($conn, $username, $username);

    if ($checkAcc_Verified === false) {
        header("location: ../views/loginsys/login.php?error=accnotverified");
        exit();
    } else if ($checkAcc_Verified === "notexist"){
        header("location: ../views/loginsys/login.php?error=accnotexist");
        exit();
    }

    $hashedpwd = $checkAcc_Verified["password"];
    $checkpwd = password_verify($pwd, $hashedpwd);

    if ($checkpwd === false) {
        header("location: ../views/loginsys/login.php?error=wronglogin");
        exit();
    }

    else if ($checkpwd === true) {
        session_start();
        $_SESSION["iduser"]=$checkAcc_Verified["iduser"];
        $_SESSION["username"]=$checkAcc_Verified["username"];
        $_SESSION["familyname"]=$checkAcc_Verified["familyname"];
        $_SESSION["name"]=$checkAcc_Verified["name"];
        $_SESSION["email"]=$checkAcc_Verified["email"];
        $_SESSION["phone"]=$checkAcc_Verified["phone"];
        $_SESSION["sexe"]=$checkAcc_Verified["sexe"];
        $_SESSION["role"]=$checkAcc_Verified["role"];
        $_SESSION["idkit"]=$checkAcc_Verified["KitDiagnostiqueidKitDiagnostique"];

        header("location: ../views/mainmenu.php");
        exit();
    }
}

function EmpytInputpwdReset($pwd, $pwdrep){
    $result = "";
    if (empty($pwd) or empty($pwdrep)) {
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function EmptyInputContact($nom, $email, $sujet, $body){
    $result = "";
    if (empty($nom) or empty($email) or empty($sujet) or empty($body)) {
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function EmptyInputModif($iduser, $username, $familyname, $name, $email, $phone, $sexe, $role, $idkit){
    $result = "";
    if (empty($username) or empty($iduser) or empty($familyname) or empty($name) or empty($email) or empty($phone) or empty($sexe) or empty($role) or empty($idkit)) {
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function EmptyInputQues($s1, $s2, $s3, $s4, $s5){
    $result = "";
    if (empty($s1) or empty($s2) or empty($s3) or empty($s4) or empty($s5)){
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

//In case
/* 
// define variables and set to empty values
$usernameErr = $pwdErr = $pwdrepErr = $nomErr = $prenomErr = $sexeErr = $emailErr = $NumdeTelErr  = $SpeMedErr = $roleErr = "";
$username = $pwd = $pwdrep = $nom = $prenom = $sexe = $email = $NumdeTel  = $SpeMed = $role = $result = "";

if (empty($_POST["username"])) {
    $usernameErr = "Un identifiant est requis";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters, special characters and whitespace
    if (!preg_match("/^[-a-z0-9+&@#\/%?=~_|!:,.;]*$/",$username)) {
        $usernameErr = "Seulement les caractères, les chiffres et les symboles sont autorisés";
        header("location: ../Views/inscription.php?error=wronginput");
        $result = true;
        exit();
    }
} $result = false;

if (empty($_POST["password"])) {
    $passwordErr = "un mot de passe est requis pour votre compte";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} else {
    $password = test_input($_POST["password"]);
    // check if password only contains letters, special characters and whitespace
    if (!preg_match("/^[0-9+&@#\/%?=~_|!:,.;]*$/",$password)) {
        $passwordErr = "Seulement les caractères, les chiffres et les symboles sont autorisés";
        header("location: ../Views/inscription.php?error=wronginput");
        $result = true;
        exit();
    }
} $result = false;

if (empty($_POST["password-repeat"])) {
    $passwordrepeatErr = "Il est nécessaire de réecrire votre mot de passe";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} else {
    $passwordrepeat = test_input($_POST["password-repeat"]);
    // check if password only contains letters, special characters and whitespace + if it's the same as the one before
    if (!preg_match("/^[0-9+&@#\/%?=~_|!:,.;]*$/",$password)) {
        $passwordrepeatErr = "Seulement les caractères, les chiffres et les symboles sont autorisés";
        header("location: ../Views/inscription.php?error=wronginput");
        $result = true;
        exit();
    }
} $result = false;

if (empty($_POST["nom"])) {
    $nomErr = "Votre nom est requis";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} else {
    $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
        $nomErr = "Seulement les caractères et les espaces sont autorisés";
        header("location: ../Views/inscription.php?error=wronginput");
        $result = true;
        exit();
    }
} $result = false;

if (empty($_POST["prenom"])) {
    $prenomErr = "Votre prénom est requis";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} else {
    $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
        $prenomErr = "Seulement les caractères et les espaces sont autorisés";
        header("location: ../Views/inscription.php?error=wronginput");
        $result = true;
        exit();
    }
} $result = false;

if (empty($_POST["sexe"])) {
    $sexeErr = "Determiner le sexe est requis";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} $result = false;

if (empty($_POST["email"])) {
    $emailErr = "Un email est requis";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format de l'email pas valide";
        header("location: ../Views/inscription.php?error=wronginput");
        $result = true;
        exit();
    }
} $result = false;

if (empty($_POST["NumdeTel"])) {
    $NumdeTelErr = "Un numéro de téléphone est requis";
    header("location: ../Views/inscription.php?error=emptyvalue");
    $result = true;
    exit();
} else {
    $NumdeTel = test_input($_POST["NumdeTel"]);
    // check if phone number is well formed with only numbers
    if (!preg_match("/^[0-9+ ]*$/",$NumdeTel)) {
        $NumdeTelErr = "Seulement les chiffres sont autorisés";
        header("location: ../Views/inscription.php?error=wronginput");
        $result = true;
        exit();
    }
} $result = false;

if (empty($_POST["SpeMed"])) {
    $result = false;
    $SpeMed = "";
    $role = "client";
} else {
    $SpeMed = test_input($_POST["SpeMed"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$SpeMed)) {
        $SpeMedErr = "Seulement les caractères et les espaces sont autorisés";
        header("location: ../Views/inscription.php?error=wronginput");
        exit();
    } $result = false;
    $role = "medecin";
} 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
*/

?>
