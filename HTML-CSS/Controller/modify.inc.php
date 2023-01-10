<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-personalinfopage.php';

if (isset($_POST["submit_seek"]))
{
    $username = test_input($_POST["username"]);

    $result = fetchRowUser($conn, $username);

    $iduser=$result["iduser"];
    $username=$result["username"];
    $familyname=$result["familyname"];
    $name=$result["name"];
    $email=$result["email"];
    $phone=$result["phone"];
    $sexe=$result["sexe"];
    $role=$result["role"];
    $idkit=$result["KitDiagnostiqueidKitDiagnostique"];

    header('location:../views/personalspace/admin/admin-personalspace.php?id='.$idkit.'&username='.$username.'&family='.$familyname.'&name='
    .$name.'&email='.$email.'&phone='.$phone.'&sexe='.$sexe.'&role='.$role.'&idkit='.$idkit);
    exit();
}

if (isset($_POST["submit_modify"])){
    $iduser = test_input($_POST["iduser"]);
    $username = test_input($_POST["username"]);
    $familyname = test_input($_POST["familyname"]);
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $sexe = test_input($_POST["sexe"]);
    $role = test_input($_POST["role"]);
    $idkit = test_input($_POST["idkit"]);

    if (EmptyInputModif($iduser, $username, $familyname, $name, $email, $phone, $sexe, $role, $idkit) !== false){
        header("location: ../views/personalspace/admin/admin-personalspace.php?error=emptyinput");
        exit();
    }

    $result = modifyRowUser($conn, $iduser, $username, $familyname, $name, $email, $phone, $sexe, $role, $idkit);
    if (isset($result)){
        $iduser=$result["iduser"];
        $username=$result["username"];
        $familyname=$result["familyname"];
        $name=$result["name"];
        $email=$result["email"];
        $phone=$result["phone"];
        $sexe=$result["sexe"];
        $role=$result["role"];
        $idkit=$result["KitDiagnostiqueidKitDiagnostique"];

        header('location:../views/personalspace/admin/admin-personalspace.php?id='.$idkit.'&username='.$username.'&family='.$familyname.'&name='
        .$name.'&email='.$email.'&phone='.$phone.'&sexe='.$sexe.'&role='.$role.'&idkit='.$idkit.'&error=success');
        exit();
    } else {
        header('location:../views/personalspace/admin/admin-personalspace.php?id='.$idkit.'&username='.$username.'&family='.$familyname.'&name='
        .$name.'&email='.$email.'&phone='.$phone.'&sexe='.$sexe.'&role='.$role.'&idkit='.$idkit.'&error=issue');
        exit();
    }
    
} else {
    header('location:../views/personalspace/admin-personalspace.php');
    exit();
}

?>