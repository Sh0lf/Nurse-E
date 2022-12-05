<?php

function EmptyInputSignup($username, $pwd, $pwdrep, $nom, $prenom, $email, $phone, $sexe){
    $result = "";
    if (empty($username) || empty($$pwd) || empty($pwdrep) || empty($nom) || empty($prenom) || empty($email) || empty($phone) || empty($sexe)) {
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function invalidUid($username){
    $result = "";
    if (!preg_match("/^[-a-z0-9+&@#\/%?=~_|!:,.;]*$/",$username)) {
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

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM User WHERE Username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Views/inscription.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $SpeMed, $role){
    $sql = "INSERT INTO user (username, familyname, name, email, phone, sexe, password, speMed, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Views/inscription.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT);

    mysqli_stmt_bind_param($stmt, "ssssissss", $username, $nom, $prenom, $email, $phone, $sexe, $hashedpwd, $SpeMed, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Views/inscription.php?error=none");
    exit();
}

function EmptyInputLogin($username, $pwd){
    $result = "";
    if (empty($username) || empty($$pwd)) {
        $result = true;
    } else {
        $result = false; 
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists == false) {
        header("location: ../Views/login.php?error=wronglogin");
        exit();
    }

    $hashedpwd = $uidExists["password"];
    $checkpwd = password_verify($pwd, $hashedpwd);

    if ($checkpwd == false) {
        header("location: ../Views/login.php?error=wronglogin");
        exit();
    }

    else if ($checkpwd == true) {
        session_start();
        $_SESSION["iduser"]=$uidExists["iduser"];
        $_SESSION["username"]=$uidExists["username"];
        header("location: ../Views/index.php");
        exit();
    }
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