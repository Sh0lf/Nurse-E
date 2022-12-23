<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';

if (isset($_POST["submit"])){
    $username = htmlspecialchars($_POST["username"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

<<<<<<< HEAD
<<<<<<< HEAD
    if (EmptyInputLogin($username, $pwd) !== false){
        header("location: ../views/loginsys/login.php?error=emptyinput");
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
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else {
<<<<<<< HEAD
    header("location:../views/loginsys/login.php");
=======
    header("location:../Views/loginsys/login.php");
>>>>>>> 9a3888f (organization update, to change stylesheets)
    exit();
}

?>
