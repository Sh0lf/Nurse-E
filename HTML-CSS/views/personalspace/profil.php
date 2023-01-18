<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="profil.css">
</head>

<?php 
if (!isset($_SESSION["id"])){
	header("location: ../views/loginsys/login.php");
    exit();
}
?>

<body class="corps">
	<div class='rectangle'>
	<img <?php echo 'src="'.$_SESSION["pfp_path"].'"'?> alt="Photo de profil">
	<h1 class="titre"><?php echo $_SESSION["username"] ?></h1>
	<ul class="puce">
		<li class="list">Prénom : <?php echo $_SESSION["name"];?></li>
		<li class="list">Nom de famille : <?php echo $_SESSION["familyname"];?></li>
		<li class="list">Couriel : <?php echo $_SESSION["email"];?></li>
		<li class="list">Numéro de téléphone : <?php $_SESSION["phone"];?></li>
	</ul>
	</div>
	<form action="../../controller/profiledit.php" method="post" id="edit-form">
		<input type="hidden" name="iduser" <?php echo 'value="'.$_SESSION["iduser"].'"' ?>>
	</form>
	<button type="submit" form="edit-form" name="submit" class="confbutton">Voulez-vous modifier votre compte ?</button>

	<?php
	if (isset($_GET["username"])){
        echo '
        <div class="container" id="second-form">
            <div class="container-box">
            <form action="../../../controller/profiledit.php" method="post">
                <input type="hidden" name="iduser" value="' . $_GET["id"] . '">
                <p><b>Username</b></p>
                <input type="text" name="username" value="' . $_GET["username"].'">
                <p><b>Nom de famille</b></p>
                <input type="text" name="familyname" value="'.$_GET["familyname"].'">
                <p><b>Prénom</b></p>
                <input type="text" name="name" value="'.$_GET["name"].'">
                <p><b>Email</b></p>
                <input type="text" name="email" value="'.$_GET["email"].'">
                <p><b>Numéro de tel</b></p>
                <input type="text" name="phone" value="'.$_GET["phone"].'">
                <button type="submit" name="submit_modify" class="submitbutton">Confirmer Modification</button>
            </div>
            </div>
            <div class="container">';
            if (isset($_GET["error"])){
                if ($_GET["error"] === "success"){
                    echo '<p>Succès modification !</p>';
                } else if ($_GET["error"] === "issue"){
                    echo '<p>Erreur, veuillez vérifier les valeurs</p>';
                } else if ($_GET["error"]=== "emptyinput"){
                    echo '<p>Ne laissez aucune case vide ! </p>';
                } else if ($_GET["error"]=== "stmtfailed"){
                    echo '<p> Problème de process derrière, regardez code </p>';
                }
            }
        echo '</div>';
        }

		?>
</body>
</html>