<?php

include_once 'dbh.inc.php';
include_once 'functions.inc.php';
include_once '../model/SQL-loginsystem.php';

if (isset($_POST["submit_pwd"])){
    $newpwd = $_POST["pwd"];
    $code = $_POST["code"];
    error_log(print_r($code, TRUE));
    $result = changePwd($conn, $newpwd, $code);

    if ($result == true){
        header("location: ../views/loginsys/login.php?error=remadepwd");
        exit();
    }
} else {
    header("location: ../views/loginsys/login.php");
    exit();
}
?>