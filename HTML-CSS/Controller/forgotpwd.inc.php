<?php
<<<<<<< HEAD
<<<<<<< HEAD
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';
include_once './sendEmailRecovery.php';
=======

include_once 'dbh.inc.php';
include_once 'functions.inc.php';
include_once '../model/SQL-loginsystem.php';
include_once 'sendEmailRecovery.php';
>>>>>>> b14763e (made pwd recovery !)
=======
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-loginsystem.php';
include_once './sendEmailRecovery.php';
>>>>>>> 1f01c05 (updated: same code as the website)

if(isset($_POST['submit_email']) && $_POST['email']){
    $email = $_POST['email'];
    $pwdRecovery = pwdRecovery($conn, $email);
<<<<<<< HEAD
<<<<<<< HEAD
    error_log(print_r($pwdRecovery, TRUE));
    if ($pwdRecovery == false) {
        header("location: ../views/loginsys/forgotpwd.php?error=accnotverified");
<<<<<<< HEAD
        exit();
    } else if ($pwdRecovery == "notexist"){
        header("location: ../views/loginsys/forgotpwd.php?error=accnotexist");
=======

=======
    error_log(print_r($pwdRecovery, TRUE));
>>>>>>> 4410b50 (loginsys functionnal, just need to timestamps)
    if ($pwdRecovery == false) {
        header("location: ../Views/loginsys/forgotpwd.php?error=accnotverified");
        exit();
    } else if ($pwdRecovery == "notexist"){
        header("location: ../Views/loginsys/forgotpwd.php?error=accnotexist");
>>>>>>> b14763e (made pwd recovery !)
=======
        exit();
    } else if ($pwdRecovery == "notexist"){
        header("location: ../views/loginsys/forgotpwd.php?error=accnotexist");
>>>>>>> 9c68076 (Updates in organization)
        exit();
    }

    $code = $pwdRecovery["code"];

    $sendMlrecov->send($code, $email);

<<<<<<< HEAD
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
=======
    header("location:../views/loginsys/forgotpwd.php?error=verifyacc");
    exit();

} else {
    header("location: ../views/loginsys/forgotpwd.php");
>>>>>>> 9c68076 (Updates in organization)
    exit();
}

?>