<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-personalinfopage.php';

if (isset($_POST["submit"])){
    $iduser = $_POST["iduser"];

    $result = fetchRowUser($conn, $iduser);

    $username = $result["username"];
    $familyname = $result["familyname"];
    $name = $result["name"];
    $email = $result["email"];
    $phone = $result["phone"];


    header('location: ../views/personalspace/profil.php?username='.$username.'&familyname='.$familyname.'&name='.$name.'&email='.$email.'&phone='.$phone);
    exit();
} elseif (isset($_POST["submit_modify"])){
    $iduser = test_input($_POST["iduser"]);
    $username = test_input($_POST["username"]);
    $familyname = test_input($_POST["familyname"]);
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);

    if (isset($_FILES['pfp'])) {
        $file = $_FILES['pfp'];
        $file_destination = uploadpfp($file);
    }

    if (EmptyInputEdit($iduser, $username, $familyname, $name, $email, $phone) !== false){
        header("location: ../views/personalspace/profil.php?error=emptyinput");
        exit();
    }

    $result = profileEditRowUser($conn, $iduser, $username, $familyname, $name, $email, $phone, $file_destination);

    $username = $result["username"];
    $familyname = $result["familyname"];
    $name = $result["name"];
    $email = $result["email"];
    $phone = $result["phone"];
    $file_path = $result["pfp_path"];

    session_start();
    $_SESSION["username"]=$username;
    $_SESSION["familyname"]=$familyname;
    $_SESSION["name"]=$name;
    $_SESSION["email"]=$email;
    $_SESSION["phone"]=$phone;
    $_SESSION["pfp_path"] = $file_path;


    header('location: ../views/personalspace/profil.php?error=success');
    exit();
}

else {
    header('location: ../views/mainmenu.php');
    exit();
}