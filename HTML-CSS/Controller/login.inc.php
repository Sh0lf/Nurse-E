<?php
<<<<<<< HEAD
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';

if (isset($_POST["submit"])){
    $username = test_input($_POST["username"]);
    $pwd = test_input($_POST["pwd"]);

    if (EmptyInputLogin($username, $pwd) !== false){
        header("location: ../views/loginsys/login.php?error=emptyinput");
=======

if (isset($_POST["submit"])){
    $username = $POST["username"];
    $pwd = $POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (EmptyInputLogin($username, $pwd) !== false){
        header("location: ../Views/login.php?error=emptyinput");
>>>>>>> 28487d0 (update php MVC partiel login system)
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else {
<<<<<<< HEAD
    header("location:../views/loginsys/login.php");
    exit();
}

?>
=======
    header("location:../Views/login.php");
    exit();
}
>>>>>>> 28487d0 (update php MVC partiel login system)
