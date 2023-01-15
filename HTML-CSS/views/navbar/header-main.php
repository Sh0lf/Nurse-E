<nav>  
    <?php
    session_start();
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if ($curPageName === "medicobot.php"){
        echo '<img class="logo" src="http://nurse-medicobot.wstr.fr/views/assets/logo nurse-e 1.png">';
    } else {
        echo '<img class="logo" src="http://nurse-medicobot.wstr.fr/views/assets/Logo-medicobot.png">';
    }
    ?>
    <img class="logo" src="http://nurse-medicobot.wstr.fr/views/assets/Logo-medicobot.png">
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <?php
            if (isset($_SESSION["username"])){
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
                    </ul>
                </li>';
            }
        ?>
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li><label for="btn-2" class="show">MédicoBot +</label>
            <a href="#produits">MédicoBot <i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="btn-2">
            <ul>
                <li><a href="#">Vos analyses</a></li>
                <li><a href="#">Votre dossier</a></li>
            </ul></li>';
        } else {
            echo '<li><a href="http://nurse-medicobot.wstr.fr/views/medicalbot/medicobot.php">Médicobot</a></li>';
        }
        ?>    
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li>
                    <label for="btn-3" class="show">Ecologie +</label>
                    <a href="#eco">Ecologie <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-3">
                    <ul>
                        <li><a href="#">Votre arbre</a></li>
                    </ul>
                </li>';
        } else {
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
        }
        ?>
    </ul>
</nav>