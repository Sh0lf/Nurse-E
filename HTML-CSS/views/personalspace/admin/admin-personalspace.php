<!DOCTYPE hmtl >
<html lang="fr">
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="admin-personalspace.css" >
        <link rel="stylesheet" href="../../navbar/navbar-main.css">
        <link rel="stylesheet" href="../../assets/template.css">
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
        include_once '../../assets/templatev.php';
        if ($_SESSION["role"]==="admin"){ 
            echo '
            <div class="center">
            <h1 class="h1">Bienvenue, '.$_SESSION["name"].'. Les opérations que vous pouvez effectuer sont :</h1>
            </div>
                <div class="admin">
            <div class="liste">
                <div>
                    <p>Modifier les informations d\'un utilisateur </p> 
                    </br>
                </div>
                <div>
                    <p>Supprimer un utilisateur </p>
                    </br>
                </div>
                <div>  
                    <p>Rechercher un utilisateur </p>  
                    </br> 
                </div>
                <div>          
                    <p>Acceder aux multiples informations de nos utilisateurs</p>
                    </br>
                </div>
            </div>
            <section class="utili">
                <div class="center">
                    <h1 class="h1">Modification</h1>
                </div>
                    <div class="utilisateur">
                        <div class=avant>
                            <h2> Modification utilisateur </h2>
                            <div class="oee">
                                <button class="btn-34"><span><a href="adminmodif-personalspace.php">Voir plus</a></span></button>  
                            </div> 
                        </div>
                        <div class=avant>
                            <h2>Supprimer un utilisateur</h2>
                            <div class="oee">
                                <button class="btn-34"><span><a href="adminsupp-personalspace.php">Voir plus</a></span></button>
                            </div>
                        </div> 
                        <div class=avant>       
                            <h2>Modification FAQ</h2>
                            <div class="oee">
                                <button class="btn-34"><span><a href="adminfaq-personalspace.php">Voir plus</a></span></button>  
                            </div>
                        </div>
                    </a>
                </div>
    
            </section>
            <section class="recherche">
            <div class="form">
            <div class="center">
                <h1>Recherche utilisateur</h1>
            </div>
                <form action="../../../controller/adminpage.php" method="post">
                    <input type="text" placeholder="Username/id/email" name="input">
                    <input type="submit" name="submit">
                </form>
            </div>
            <div class="table">'; 
                    if (isset($_GET["id"])){
                        echo '<table>
                        <tr class="tr"><th>iduser</th><th>Pseudo</th><th>Nom</th><th>Nom de famille</th><th>Email</th><th>Phone</th><th>Sexe</th><th>Role</th><th>idkit</th></tr>
                        <tr><td>'.$_GET["id"].'</td><td>'.$_GET["username"].'</td><td>'.$_GET["name"].'</td><td>'.$_GET["family"].'</td><td>'.$_GET["email"].'</td><td>'.$_GET["phone"].'</td><td>'.$_GET["sexe"].'
                        </td><td>'.$_GET["role"].'</td><td>'.$_GET["idkit"].'</td></tr></table>';
                    }
                    echo '<div class="center">
                        <h1>Liste des utilisateurs:</h1>
                    </div>
                    
                    
                    <table>
                    <tr class="tr">
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
                        
                    echo "</table>            
                    </div>
            </section>
        </div>";        
    
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
            
            