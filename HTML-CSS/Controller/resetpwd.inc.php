<?php

include_once 'dbh.inc.php';
include_once 'functions.inc.php';
include_once '../Model/SQL-loginsystem.php';

if (isset($_POST["submit_pwd"])){
    $newpwd = $_POST["pwd"];
    $code = $_POST["code"];
    $result = changePwd($conn, $newpwd, $code);

    if ($result == true){
        header("location: ../Views/loginsys/login.php?error=remadepwd");
        exit();
    }
} else {
    header("location: ../Views/loginsys/login.php");
    exit();
}
?>