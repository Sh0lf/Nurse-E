<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';
include_once './sendEmailRecovery.php';

if(isset($_POST['submit_email']) && $_POST['email']){
    $email = $_POST['email'];
    $pwdRecovery = pwdRecovery($conn, $email);
    error_log(print_r($pwdRecovery, TRUE));
    if ($pwdRecovery == false) {
        header("location: ../views/loginsys/forgotpwd.php?error=accnotverified");
        exit();
    } else if ($pwdRecovery == "notexist"){
        header("location: ../views/loginsys/forgotpwd.php?error=accnotexist");
        exit();
    }

    $code = $pwdRecovery["code"];

    $sendMlrecov->send($code, $email);

    header("location:../views/loginsys/forgotpwd.php?error=verifyacc");
    exit();

} else {
    header("location: ../views/loginsys/forgotpwd.php");
    exit();
}

?>