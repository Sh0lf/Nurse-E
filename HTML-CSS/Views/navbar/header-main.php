<<<<<<< HEAD
<nav>  
    <?php
    session_start();  
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if($curPageName = "ecologie.php") {
        echo '<img class="logo" src="nurse.png">';
    }  else {
        echo '<img class="logo" src="logo.png">';
    }
    ?> 
=======
<nav>
<<<<<<< HEAD
    <img class="logo" src="logo.png">
>>>>>>> d9a6817 (made navbar based on if session exists (help me))
=======
    <?php  
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if($curPageName = "ecologie.php") {
        echo '<img class="logo" src="nurse.png">';
    }  else {
        echo '<img class="logo" src="logo.png">';
    }
    ?>   
    
>>>>>>> 31cd901 (changes updated navbar)
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <?php
            if (isset($_SESSION["username"])){
<<<<<<< HEAD
                echo '<li><a href="http://nurse-medicobot.wstr.fr/views/mainmenu.php">Accueil</a></li>';
            } else {
            echo '<li>
                    <label for="btn-1" class="show">Accueil +</label>
                    <a href="http://nurse-medicobot.wstr.fr/views/mainmenu.php">Accueil <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-1">
                    <ul>
                        <li><a href="http://nurse-medicobot.wstr.fr/views/mainmenu.php#comment">Comment ça marche ?</a></li>
                        <li><a href="http://nurse-medicobot.wstr.fr/views/mainmenu.php#produit">Notre produit</a></li>
                        <li><a href="http://nurse-medicobot.wstr.fr/views/mainmenu.php#updates">Les updates</a></li>
                        <li><a href="http://nurse-medicobot.wstr.fr/views/mainmenu.php#questions">Vos questions</a></li>                                
=======
                echo '<li><a href="#accueil">Accueil</a></li>';
            } else {
            echo '<li>
                    <label for="btn-1" class="show">Accueil +</label>
                    <a href="#home">Accueil <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-1">
                    <ul>
                        <li><a href="#">Comment ça marche ?</a></li>
                        <li><a href="#">Notre produit</a></li>
                        <li><a href="#">Les updates</a></li>
                        <li><a href="#">Vos questions</a></li>                                
>>>>>>> d9a6817 (made navbar based on if session exists (help me))
                    </ul>
                </li>';
            }
        ?>
<<<<<<< HEAD
<<<<<<< HEAD
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li><label for="btn-2" class="show">MédicoBot +</label>
=======
        
        <li>
            <label for="btn-2" class="show">MédicoBot +</label>
>>>>>>> d9a6817 (made navbar based on if session exists (help me))
=======
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li><label for="btn-2" class="show">MédicoBot +</label>
>>>>>>> 31cd901 (changes updated navbar)
            <a href="#produits">MédicoBot <i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="btn-2">
            <ul>
                <li><a href="#">Vos analyses</a></li>
                <li><a href="#">Votre dossier</a></li>
<<<<<<< HEAD
<<<<<<< HEAD
            </ul></li>';
        } else {
            echo '<li><a href="http://nurse-medicobot.wstr.fr/views/medicalbot/medicobot.php">Médicobot</a></li>';
=======
            </ul></li>';
        } else {
            echo '<li><a href="#medicobot">Médicobot</a></li>';
>>>>>>> 31cd901 (changes updated navbar)
        }
        ?>    
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li>
                    <label for="btn-3" class="show">Ecologie +</label>
<<<<<<< HEAD
                    <a href="#eco">Ecologie <i class="fas fa-caret-down"></i></a>
=======
                    <a href="eco">Ecologie <i class="fas fa-caret-down"></i></a>
>>>>>>> 31cd901 (changes updated navbar)
                    <input type="checkbox" id="btn-3">
                    <ul>
                        <li><a href="#">Votre arbre</a></li>
                    </ul>
                </li>';
        } else {
<<<<<<< HEAD
            echo '<li><a href="#ecologie">Ecologie</a></li>';
        }
        ?>
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li>
                    <label for="btn-4" class="show">Mon profil +</label>
                    <a href="http://nurse-medicobot.wstr.fr">Mon profil <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-4">
                    <ul>
                        <li><a href="#">Options</a></li>
                        <li><a href="http://nurse-medicobot.wstr.fr/controller/logout.inc.php">Logout</a></li>
                    </ul></li>';
        } else {
            echo '<li><a href="http://nurse-medicobot.wstr.fr/views/loginsys/login.php"><button class="bouton">Connexion</button></a></li>';
=======
            </ul>    
        </li>      
        <li><a href="#questions">Ecologie</a></li>
=======
            echo '<li><a href="#questions">Ecologie</a></li>';
        }
        ?>
>>>>>>> 31cd901 (changes updated navbar)
        <li><a href="#apropos">A propos</a></li>
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li><button class="bouton" href="#profil">Mon profil</button></li>';
        } else {
            echo '<li><button class="bouton" href="../loginsys/login.php">Connexion</button></li>';
>>>>>>> d9a6817 (made navbar based on if session exists (help me))
        }
        ?>
    </ul>
</nav>