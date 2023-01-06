<?php
<<<<<<< HEAD
<<<<<<< HEAD
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
=======
include_once 'dbh.inc.php';
include_once 'functions.inc.php';
>>>>>>> 27f66f0 (contact us fini, sys email marche bien)
=======
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
>>>>>>> 1f01c05 (updated: same code as the website)

if (isset($_POST["submit"])){
    $username = test_input($_POST["username"]);
    $pwd = test_input($_POST["pwd"]);

<<<<<<< HEAD
<<<<<<< HEAD
    if (EmptyInputLogin($username, $pwd) !== false){
        header("location: ../views/loginsys/login.php?error=emptyinput");
<<<<<<< HEAD
=======
    if (EmptyInputLogin($username, $pwd) != false){
<<<<<<< HEAD
        header("location: ../Views/login.php?error=emptyinput");
>>>>>>> af79c64 (update: login system now)
=======
=======
    if (EmptyInputLogin($username, $pwd) !== false){
>>>>>>> 953afe5 (Update: login sys in pdo + stylizing pages)
        header("location: ../Views/loginsys/login.php?error=emptyinput");
>>>>>>> 9a3888f (organization update, to change stylesheets)
=======
>>>>>>> 9c68076 (Updates in organization)
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else {
<<<<<<< HEAD
<<<<<<< HEAD
    header("location:../views/loginsys/login.php");
=======
    header("location:../Views/loginsys/login.php");
>>>>>>> 9a3888f (organization update, to change stylesheets)
=======
    header("location:../views/loginsys/login.php");
>>>>>>> 9c68076 (Updates in organization)
    exit();
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 1f01c05 (updated: same code as the website)
