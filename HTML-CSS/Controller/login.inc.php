<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';

if (isset($_POST["submit"])){
<<<<<<< HEAD
    $username = test_input($_POST["username"]);
    $pwd = test_input($_POST["pwd"]);
=======
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
>>>>>>> b7cda79 (login system update)

<<<<<<< HEAD
    if (EmptyInputLogin($username, $pwd) !== false){
        header("location: ../views/loginsys/login.php?error=emptyinput");
=======
    if (EmptyInputLogin($username, $pwd) != false){
        header("location: ../Views/login.php?error=emptyinput");
>>>>>>> af79c64 (update: login system now)
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else {
    header("location:../views/loginsys/login.php");
    exit();
}

?>
