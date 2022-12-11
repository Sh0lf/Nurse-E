<?php

if (isset($_POST["submit"])){
    $username = $POST["username"];
    $pwd = $POST["pwd"];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if (EmptyInputLogin($username, $pwd) !== false){
        header("location: ../Views/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else {
    header("location:../Views/login.php");
    exit();
}