<!-- php script for database connection communication -->
<?php

if (isset($_POST["submit"])){
    echo "Work in progress ...";
}
// define variables and set to empty values
$usernameErr = $passwordErr = $passwordrepeatErr = $nomErr = $prenomErr = $sexeErr = $emailErr = $NumdeTelErr  = $medSpeErr = $roleErr = "";
$username = $password = $passwordrepeat = $nom = $prenom = $sexe = $email = $NumdeTel  = $medSpe = $role = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["username"])) {
    $usernameErr = "Un identifiant est requis";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters, special characters and whitespace
    if (!preg_match("/^[-a-z0-9+&@#\/%?=~_|!:,.;]*$/",$username)) {
        $usernameErr = "Seulement les caractères, les chiffres et les symboles sont autorisés";
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "un mot de passe est requis pour votre compte";
  } else {
    $password = test_input($_POST["password"]);
    // check if password only contains letters, special characters and whitespace
    if (!preg_match("/^[0-9+&@#\/%?=~_|!:,.;]*$/",$password)) {
        $passwordErr = "Seulement les caractères, les chiffres et les symboles sont autorisés";
    }
  }

  if (empty($_POST["password-repeat"])) {
    $passwordrepeatErr = "Il est nécessaire de réecrire votre mot de passe";
  } else {
    $passwordrepeat = test_input($_POST["password-repeat"]);
    // check if password only contains letters, special characters and whitespace + if it's the same as the one before
    if (!preg_match("/^[0-9+&@#\/%?=~_|!:,.;]*$/",$password)) {
        $passwordrepeatErr = "Seulement les caractères, les chiffres et les symboles sont autorisés";
    }
  }

  if (empty($_POST["nom"])) {
    $nomErr = "Votre nom est requis";
  } else {
    $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
      $nomErr = "Seulement les caractères et les espaces sont autorisés";
    }
  }

  if (empty($_POST["prenom"])) {
    $prenomErr = "Votre prénom est requis";
  } else {
    $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
      $prenomErr = "Seulement les caractères et les espaces sont autorisés";
    }
  }
  
  if (empty($_POST["sexe"])) {
    $sexeErr = "Determiner le sexe est requis";
  } else {
    $sexe = test_input($_POST["sexe"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Un email est requis";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format de l'email pas valide";
    }
  }
  
  if (empty($_POST["NumdeTel"])) {
    $NumdeTelErr = "Un numéro de téléphone est requis";
  } else {
    $NumdeTel = test_input($_POST["NumdeTel"]);
    // check if phone number is well formed with only numbers
    if (!preg_match("/^[0-9+ ]*$/",$NumdeTel)) {
        $NumdeTelErr = "Seulement les chiffres sont autorisés";
    }
  }

  if (empty($_POST["medSpe"])) {
    $medSpe = "";
    $role = "client";
  } else {
    $medSpe = test_input($_POST["medSpe"]);
    $role = "medecin";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>