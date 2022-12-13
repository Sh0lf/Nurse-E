<?php
$username = "Sh0lf";
$nom = "Yoplait";
$prenom = "Vincent";
$email = "vyvincentyap@gmail.com";
$phone = 778266459;
$sexe = "Homme";
$pwd = "mdpaupif";
$role = "client";
$idkit = 1;

include_once 'SQL-loginsystem.php';

//testing if code works
createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $idkit)

?>