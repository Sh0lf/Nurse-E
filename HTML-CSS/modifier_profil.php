<<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modifiier mon profil</title>
	<link rel="stylesheet" type="text/css" href="modifier_profil.css">
</head>


<?php
	session_start();
	//Cette page ne s'ouvre que si l'utilisateur s'est déjà connecté.
	if (!isset($_SESSION['id'])){
		header('location: index.php')
		exit;
	}


	// Récupération des informations de l'utilisateur.
	$afficher_profil=$DB->query("SELECT *
		FROM utilisateur
		WHERE id = ?",
		array($_SESSION['id']));
	$afficher_profil = $afficher_profil->flecht();



	if(!empty($_POST){
		extract($_POST);
		$valid = true;

		if ( isset($_POST['modification'])){
			$iduser = htmlentities(trim($iduser));
			$username = htmlentities(trim($username));
			$familyname = htmlentities(trim($familyname))
			$mail = htmlentities(strtolower(trim($mail)));
			$phone = htmlentities(trim($phone))
            
            //L'utilisateur doit compléter les informations manquantes.
			if(empty($iduser)){
				$valid = false;
				$er_id = "Ajoutez votre ID utilisateur.";
			}

			if(empty($username)){
				$valid = false;
				$er_username = "Ajoutez votre prénom.";
			 }

			if (empty($familyname)) {
				$valid = false;
				$er_familyname = "Ajoutez votre nom de famille.";
			}

			if (empty($mail)){
				$valid = false;
				$er_mail = "Ajoutez votre mail";
			}
			
			if (empty($phone)) {
				$valid = false;
				$er_phone = "Ajoutez votre numéro de téléphone.";
			}
			if (empty($sexe)) {
				$valid = false;
				$er_phone = "Ajoutez votre genre.";
			}

            // Vérification du couriel de l'utilisateur.
			else{
				$req_mail = $DB->query("SELECT mail
					FROM user
					WHERE mail = ?",
					array($mail));
				$req_mail = $req_mail->fetch();

				if ($req_mail['mail']) <> "" && $_SESSION['mail']
					$valid = false;
					$er_mail = "Ce mail est déjà utilisé.";
			}

		}

        //Modification des informations et insertion des nouvelles dans la base de donnée.
		if ($valid){

			$DB->insert("UPDATE user SET username = ?, familyname = ?, mail = ?, phone = ?, sexe = ?
				WHERE id = ?")
				array($username, $familyname, $mail, $phone, $sexe, $_SESSION['id']);
			$_SESSION['username'] = $username;
			$_SESSION['familyname'] = $familyname;
			$_SESSION['mail'] = $mail;
			$_SESSION['phone'] = $phone;
			$_SESSION['sexe'] = $sexe;

			header('location: profil.php')
			exit;
		}
    )


    //L'utilisateur peut modifier son
    <body>
        <div>Modification</div>
        <form method="post">
                <?php
            ?>
            <input type="text" placeholder="Votre nom" name="nom" value="<?php if(isset($familyname)){ echo $familyname; }else{ echo $afficher_profil['nom'];}?>" required>
            <?php
                if (isset($er_prenom)){
                ?>
                    <div><?= $er_prenom ?></div>
                <?php 
                }
            ?>
            <input type="text" placeholder="Votre prénom" name="prenom" value="<?php if(isset($username)){ echo $username; }else{ echo $afficher_profil['prenom'];}?>" required>
            <?php
                if (isset($er_mail)){
                ?>
                    <div><?= $er_mail ?></div>
                <?php
                }
            ?>
            <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }else{ echo $afficher_profil['mail'];}?>" required>
            <button type="submit" name="modification">Modifier</button>
        </form>
    </body>
</html>