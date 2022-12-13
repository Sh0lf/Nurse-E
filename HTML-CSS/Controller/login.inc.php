<?php

if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if (EmptyInputLogin($username, $pwd) != false){
        header("location: ../Views/loginsys/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}

else {
    header("location:../Views/loginsys/login.php");
    exit();
}