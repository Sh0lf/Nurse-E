<?php

ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-personalinfopage.php';

if (isset($_POST['submit'])){
    $iduser = test_input($_POST['iduser']);
    
    $result = deleteUser($conn, $iduser);
    
    if($result === true){
        header("location:../views/personalspace/admin/adminsupp-personalspace.php?error=success");
        exit();
    } else {
        header("location:../views/personalspace/admin/adminsupp-personalspace.php?error=issue");
        exit();
    }
}
?>