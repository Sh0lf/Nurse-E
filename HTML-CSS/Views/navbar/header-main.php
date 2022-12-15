<nav>
    <?php  
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if($curPageName = "ecologie.php") {
        echo '<img class="logo" src="nurse.png">';
    }  else {
        echo '<img class="logo" src="logo.png">';
    }
    ?>   
    
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
    <ul>
        <?php
            if (isset($_SESSION["username"])){
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
            echo '<li><a href="#medicobot">Médicobot</a></li>';
        }
        ?>    
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li>
                    <label for="btn-3" class="show">Ecologie +</label>
                    <a href="eco">Ecologie <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-3">
                    <ul>
                        <li><a href="#">Votre arbre</a></li>
                    </ul>
                </li>';
        } else {
            echo '<li><a href="#questions">Ecologie</a></li>';
        }
        ?>
        <li><a href="#apropos">A propos</a></li>
        <?php
        if(isset($_SESSION["username"])) {
            echo '<li><button class="bouton" href="#profil">Mon profil</button></li>';
        } else {
            echo '<li><button class="bouton" href="../loginsys/login.php">Connexion</button></li>';
        }
        ?>
    </ul>
</nav>