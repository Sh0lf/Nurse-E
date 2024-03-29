<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';

if (isset($_GET["code"])){
    $code = $_GET["code"];
    $t = time();
    $timestamp = date(("Y-m-d H:i:s"));

    if (checkQueryPwdReset($conn, $timestamp, $code) !== false){
        header("location: ../views/loginsys/forgotpwd.php?error=outoftime");
        exit();
    } else {
        header("location: ../views/loginsys/resetpwd.php?code='.$code.'");
        exit();
    }

} else if (isset($_POST["submit_pwd"])){
    $newpwd = test_input($_POST["pwd"]);
    $newpwdrep = test_input($_POST["pwdrep"]);
    $code = $_POST["code"];
    error_log(print_r($code, TRUE));

    if (EmpytInputpwdReset($newpwd, $newpwdrep) !== false){
        header("location: ../views/loginsys/resetpwd.php?error=emptyinput&code='.$code.'");
        exit();
    }

    if (pwdMatch($newpwd, $newpwdrep) !== false){
        header("location: ../views/loginsys/resetpwd.php?error=pwdmissmatch&code='.$code.'");
        exit();
    }

    if (pwdStrengthChecker($newpwd) !== false){
        header("location: ../views/loginsys/resetpwd.php?error=pwdstrength&code='.$code.'");
        exit();
    }
    
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