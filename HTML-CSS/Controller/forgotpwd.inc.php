<?php
<<<<<<< HEAD
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';
include_once './sendEmailRecovery.php';
=======

include_once 'dbh.inc.php';
include_once 'functions.inc.php';
include_once '../Model/SQL-loginsystem.php';
include_once 'sendEmailRecovery.php';
>>>>>>> b14763e (made pwd recovery !)

if(isset($_POST['submit_email']) && $_POST['email']){
    $email = $_POST['email'];
    $pwdRecovery = pwdRecovery($conn, $email);
<<<<<<< HEAD
    error_log(print_r($pwdRecovery, TRUE));
    if ($pwdRecovery == false) {
        header("location: ../views/loginsys/forgotpwd.php?error=accnotverified");
        exit();
    } else if ($pwdRecovery == "notexist"){
        header("location: ../views/loginsys/forgotpwd.php?error=accnotexist");
=======

    if ($pwdRecovery == false) {
        header("location: ../Views/loginsys/forgotpwd.php?error=accnotverified");
        exit();
    } else if ($pwdRecovery == "notexist"){
        header("location: ../Views/loginsys/forgotpwd.php?error=accnotexist");
>>>>>>> b14763e (made pwd recovery !)
        exit();
    }

    $code = $pwdRecovery["code"];

    $sendMlrecov->send($code, $email);

<<<<<<< HEAD
    header("location:../views/loginsys/forgotpwd.php?error=verifyacc");
    exit();

} else {
    header("location: ../views/loginsys/forgotpwd.php");
=======
    header("location:../Views/loginsys/forgotpwd.php?error=verifyacc");
    exit();


} else {
    header("location: ../Views/loginsys/forgotpwd.php");
>>>>>>> b14763e (made pwd recovery !)
    exit();
}

?>