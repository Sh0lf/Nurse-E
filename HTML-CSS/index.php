<?php
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
        include DIR ('/views/personalspace/'.$view.'/'.$view.'-personalspace.php');
    } else {
        include DIR('/views/error404.php');
    }
    
} else {
    include DIR ('/views/mainmenu.php');
}

?>