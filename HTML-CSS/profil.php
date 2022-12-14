<<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mon profil</title>
	<link rel="stylesheet" type="text/css" href="profil.css">
</head>

<?php
	session_start();
	<!--include('connexion.html')-->
    //S'il n'y a pas de session, cette page ne s'affiche pas.
	if(!isset($_SESSION['id'])){
		header()
		exit;
	}

    //Récupération des informations de l'utilisateur s'étant connecté.
	$afficher_profil== $DB->query("SELECT * 
    	FROM user 
    	WHERE iduser = ?", 
 	array($_SESSION['id']));
  
  	$afficher_profil = $afficher_profil->fetch(); 
?>

<!-- Affichage des informations de l'utilisateur connecté.-->
<body>
	<h1>Profil de <?= $afficher_profil['username'] . $afficher_profil['familyname']; ?></h1>
	<ul>
		<li>Votre id d'utilisateur est : <?=$afficher_profil['userid'] ?></li>
		<li>Votre prénom est : <?=$afficher_profil['username'] ?></li>
		<li>Votre nom de famille est : <?=$afficher_profil['familyname'] ?></li>
		<li>Votre rôle est : <?=$afficher_profil['role'] ?> </li>
		<li>Votre couriel est : <?= $afficher_profil['mail'] ?></li>
		<li>Votre numéro de téléphone est : <?=$afficher_profil['phone'] ?></li>
		<li>Votre genre est : <?=$afficher_profil['sexe'] ?></li>
	</ul>
</body>
</html>
