<!DOCTYPE hmtl >
<html lang="fr">
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet"  href="admin-personalspace.css" >
        <link rel="stylesheet" href="../../navbar/navbar-main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin panel</title>
    </head>
    <body>
        <header>
        <?php
            include_once '../../navbar/header-main.php';
        ?>
        </header>
        <?php
        if ($_SESSION["role"]==="admin"){ echo '
        <h1>BIENVENUE ADMIN LES OPERATIONS POSSIBLES A EFFECTUER ICI :</h1>
        <ul>
            <li>acceder au multiple informations de nos utilisateurs</li>
            </br>
            <li>modifier les information dun utilisateur (tout en suivant les instructions indiquer par compartiments) </li> 
            </br>
            <li>supprimer un utilisateur (tout en suivant les instructions indiquer par compartiments)</li>
            </br>
            <li>rechercher un utilisateur grace a des informations spécifiques</li> 
        </ul>
        <section>
        <h2> MODIFICATION SUR UN UTILISATEUR </h2>
            Veuillez cliquer <a href="adminmodif-personalspace.php">ICI</a>
        <h2>SUPPRESSION SUR UN UTILISATEUR </h2>
            Veuillez cliquer <a href="adminsupp-personalspace.php">ICI</a>
        <h2>MODIFICATION FAQ</h2>
        Veuillez cliquer <a href="adminfaq-personalspace.php">ICI</a>
        <h2>EFFECTUER UNE RECHERCHE (Ecrivez soit le numero id, le pseudo, le nom de famille ou email)</h2>
        <form action="../../../controller/adminpage.php" method="post">
            <input type="text" name="input">
            <input type="submit" name="submit">
        </form>';
        
            if (isset($_GET["id"])){
                echo '<table>
                <tr><th>iduser</th><th>Pseudo</th><th>Nom</th><th>Nom de famille</th><th>Email</th><th>Phone</th><th>Sexe</th><th>Role</th><th>idkit</th></tr>
                <tr><td>'.$_GET["id"].'</td><td>'.$_GET["username"].'</td><td>'.$_GET["name"].'</td><td>'.$_GET["family"].'</td><td>'.$_GET["email"].'</td><td>'.$_GET["phone"].'</td><td>'.$_GET["sexe"].'
                </td><td>'.$_GET["role"].'</td><td>'.$_GET["idkit"].'</td></tr></table>';
            }
     
            echo '
            <h2>LISTE DES UTILISATEURS AVEC LES INFORMATIONS COMPLEMENTAIRES A LEUR PROFIL </h2>
            
            <table>
            <tr>
            <th>iduser</th>
            <th>Pseudo</th>
            <th>Nom</th>
            <th>Nom de famille</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Sexe</th>
            <th>Role</th>
            <th>idkit</th>
            </tr>';
            
            include_once '../../../model/SQL-personalinfopage.php';
            include_once '../../../controller/dbh.inc.php';

            $result = fetchAllUser($conn);
            
            foreach($result as $row)
                {
                    echo "<tr>";
                    echo '<td>'. $row["iduser"].'</td><td>' . $row["username"]. '</td><td>' . $row["familyname"]. '</td><td>' . $row["name"]. '</td><td>' . $row["email"]. '</td><td>' . $row["phone"]. '</td><td>' . $row["sexe"]. '</td><td>' . $row["role"]. '</td><td>' . $row["KitDiagnostiqueidKitDiagnostique"].'</td>';
                    echo "</tr>";
                }
                
            echo "</table>";
        } else {
            header('location:../../mainmenu.php');
            exit();
        }
            ?>
        <footer>
        <?php
            include_once '../../navbar/footer.php';
        ?>
        </footer>
            
            