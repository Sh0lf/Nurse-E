<div class="bottombar">
    <a href="/views/misc/cgu.php">CGU</a>
    <a href="/views/misc/FAQ.php">FAQ</a>
    <a href="/views/misc/apropos.php">A propos de</a> 
    <a href="/views/misc/contact.php">Contact</a>
    <?php
    if (isset($_SESSION["iduser"])){
        echo '<a class="end" href="/views/personalspace/ticket.php">Ticket Personnalisé</a>';
    }
    ?>
</div>