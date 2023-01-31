<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-personalinfopage.php';
include_once './uploadpfp.php';

if (isset($_POST["submit"])){
    $iduser = $_POST["iduser"];

    $result = fetchRowUser($conn, $iduser);

    $username = $result["username"];
    $familyname = $result["familyname"];
    $name = $result["name"];
    $email = $result["email"];
    $phone = $result["phone"];


    header('location: ../views/personalspace/profil.php?iduser='.$iduser.'&username='.$username.'&familyname='.$familyname.'&name='.$name.'&email='.$email.'&phone='.$phone);
    exit();
} elseif (isset($_POST["submit_modify"])){
    $iduser = test_input($_POST["iduser"]);
    $username = test_input($_POST["username"]);
    $familyname = test_input($_POST["familyname"]);
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);

    if (EmptyInputEdit($iduser, $username, $familyname, $name, $email, $phone) != false){
        header("location: ../views/personalspace/profil.php?error=emptyinput");
        exit();
    }
    

    if (isset($_FILES['pfp'])) {
        $file = $_FILES['pfp'];
        $file_destination = uploadpfp($file);
    } else {
        $result = fetchRowUser($conn, $iduser);
        $pfp_path = $result["pfp_path"];
        if (empty($pfp_path)){
            $file_destination = "/uploadspfp/defaultpfp.jpg";
        }
    }

    if ($file_destination == false){
        header("location: ../views/personalspace/profil.php?error=uploadpfp");
        exit();
    } elseif ($file_destination == "badformat"){
        header("location: ../views/personalspace/profil.php?error=badformat");
        exit();
    } elseif ($file_destination == "toobig"){
        header("location: ../views/personalspace/profil.php?error=toobig");
        exit();
    }

    $result = profilEditRowUser($conn, $iduser, $username, $familyname, $name, $email, $phone, $file_destination);
    
    session_start();
    
    $_SESSION["iduser"]=$result["iduser"];
    $_SESSION["username"]=$result["username"];
    $_SESSION["familyname"]=$result["familyname"];
    $_SESSION["name"]=$result["name"];
    $_SESSION["email"]=$result["email"];
    $_SESSION["phone"]=$result["phone"];
    $_SESSION["sexe"]=$result["sexe"];
    $_SESSION["role"]=$result["role"];
    $_SESSION["idkit"]=$result["KitDiagnostiqueidKitDiagnostique"];
    $_SESSION["pfp_path"] = $result["pfp_path"];


    header('location: ../views/personalspace/profil.php?error=success');
    exit();
}

else {
    header('location: ../views/mainmenu.php');
    exit();
}