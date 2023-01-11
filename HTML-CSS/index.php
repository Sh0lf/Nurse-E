<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
ini_set('display_errors', 1);
session_start();
if (isset($_SESSION["iduser"])){
    $role = $_SESSION["role"];

    switch($role){

        case 'client':
            $view = 'client';
            break;

        case 'medecin':
            $view = 'medecin';
            break;

        case 'admin':
            $view = 'admin';
            break;
        
        default:
            $view = 'error404';
            break;
    }
    if ($view != "error404"){
        header ('location: https://nurse-medicobot.wstr.fr/views/personalspace/'.$view.'/'.$view.'-personalspace.php');
<<<<<<< HEAD
        exit();
    } else {
        header ("location: views/error404.php");
    }
    
} else {
    header("location: /views/mainmenu.php");
    exit();
}
=======

=======
>>>>>>> 34f6f20 (Contact us is done, email system working)
=======
ini_set('display_errors', 1);
>>>>>>> 1f01c05 (updated: same code as the website)
session_start();
if (isset($_SESSION["iduser"])){
    $role = $_SESSION["role"];

    switch($role){

        case 'client':
            $view = 'client';
            break;

        case 'medecin':
            $view = 'medecin';
            break;

        case 'admin':
            $view = 'admin';
            break;
        
        default:
            $view = 'error404';
            break;
    }
    if ($view != "error404"){
        header ("location :views/personalspace/'.$view.'/'.$view.'-personalspace.php");
=======
>>>>>>> 2de61a8 (update: files from website)
        exit();
    } else {
        header ("location: views/error404.php");
    }
    
} else {
    header("location: /views/mainmenu.php");
    exit();
}
<<<<<<< HEAD

>>>>>>> dc79c0f (trying to implement index.php)
=======
>>>>>>> 7acb80a (Verifying directories)
?>