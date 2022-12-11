<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';

if (isset($_POST["submit"])){
    $username = test_input($_POST["username"]);
    $pwd = test_input($_POST["pwd"]);

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
