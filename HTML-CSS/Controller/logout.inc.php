<?php
ini_set('display_errors', 1);
    session_start();
    session_unset();
    session_destroy();

<<<<<<< HEAD
    header("location:../views/mainmenu.php")
=======
    header("location:../Views/index.php")
>>>>>>> fe02d72 (Updating on clarity)
?>