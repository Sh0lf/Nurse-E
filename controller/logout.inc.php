<?php
ini_set('display_errors', 1);
    session_start();
    session_unset();
    session_destroy();

    header("location:../views/mainmenu.php")
?>