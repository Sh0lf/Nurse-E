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
        if ($_SESSION["role"] !== "admin") {
            header('location:../../mainmenu.php');
            exit();
        } else {
           echo '
            <h2>LISTE DES QUESTIONS/RÉPONSES ET DES QUESTIONS</h2>
            
            <table>
            <tr>
            <th>idFAQ</th>
            <th>Question</th>
            <th>Réponse</th>
            <th></th>
            </tr>';
            
            include_once '../../../model/SQL-faq.php';
            include_once '../../../controller/dbh.inc.php';

            $result = fetchAllQuestions($conn);
            
            foreach($result as $row)
                {
                echo "<tr>";
                echo '<td>' . $row["idFAQ"] . '</td><td>' . $row["question"] . '</td><td>' . $row["reponse"] . '</td><td><a href="../../../controller/faqprocess.php?idques='.$row["idFAQ"].'"><button class="editbutton">Modifier</button></a> <a href="../../../controller/faqprocess.php?idquesrem='.$row["idFAQ"].'"><button class="remove">Supprimer</button></a>';
                echo "</tr>";
                
                }
                
            echo "</table>"; 
        }

        if (isset($_GET["id"])){
            echo '
            <div class="container" id="second-form">
            <div class="container-box">
            <form action="../../../controller/faqprocess.php" method="post">
                <input type="hidden" name="idques" value="' . $_GET["id"] . '">
                <div>              
                <p><b>Question</b></p>
                <input type="text" name="question" value="' . $_GET["ques"].'">  
                </div>
                <div>                 
                <p><b>Réponse</b></p>
                <input type="text" name="reponse" value="'.$_GET["rep"].'">
                </div>
                <button type="submit" name="submit_edit">Confirmer Modification</button>
            </form>
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
        <footer>
        <?php
            include_once '../../navbar/footer.php';
        ?>
        </footer>