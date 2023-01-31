<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-personalinfopage.php';


if (isset($_POST["submit"]))
{
    $input = test_input($_POST["input"]);

    $result = fetchRowUser($conn, $input);
    
    $iduser=$result["iduser"];
    $username=$result["username"];
    $familyname=$result["familyname"];
    $name=$result["name"];
    $email=$result["email"];
    $phone=$result["phone"];
    $sexe=$result["sexe"];
    $role=$result["role"];
    $idkit=$result["KitDiagnostiqueidKitDiagnostique"];

    header('location:../views/personalspace/admin/admin-personalspace.php?id='.$iduser.'&username='.$username.'&family='.$familyname.'&name='
    .$name.'&email='.$email.'&phone='.$phone.'&sexe='.$sexe.'&role='.$role.'&idkit='.$idkit);
    exit();
} else {
    header('location: ../views/mainmenu.php');
    exit();
}

?>