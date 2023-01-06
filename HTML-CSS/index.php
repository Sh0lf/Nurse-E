<?php
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
        header ("location :views/personalspace/'.$view.'/'.$view.'-personalspace.php");
        exit();
    } else {
        header ("location: views/error404.php");
    }
    
} else {
    header("location: /views/mainmenu.php");
    exit();
}
?>