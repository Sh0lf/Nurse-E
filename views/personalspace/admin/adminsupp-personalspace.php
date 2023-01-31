<!DOCTYPE hmtl >
<html lang="fr">
<head>
    <meta charset="utf-8"> 
    <link rel="stylesheet"  href="adminsupp-personalspace.css" >
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png" />
    <title>Supprimer compte admin panel</title>
</head>
    <header>
        <?php
            include_once '../../navbar/header-main.php';
        ?>
    </header>
     <?php
    if ($_SESSION["role"]==="admin"){ echo'
    <p>instruction: Inserer le numero id du compte que vous souhaitez supprimer</P>


<form action="../../../controller/delete.inc.php" method="post">
    <label>Id membre à supprimer : </label>
    <input type="text" name="iduser" />
    <input type="submit" name="submit" value="Supprimer" />
</form>';

            if (isset($_GET["error"])){
                if ($_GET["error"] === "success"){
                    echo '<p>Succès modification !</p>';
                } else if ($_GET["error"] === "issue"){
                    echo '<p>Erreur, veuillez vérifier les valeurs</p>';
                } else if ($_GET["error"]=== "stmtfailed"){
                    echo '<p> Problème de process derrière, regardez code </p>';
                }
            }
    } else {
        header("location: ../../mainmenu.php");
        exit();
    }
    
?>