<?php

ini_set('display_errors', 1);
include_once '../controller/functions.inc.php';
include_once '../controller/dbh.inc.php';

function fetchAddressAsker($conn, $iduser){
    $sql = "SELECT * from Adresse where user_iduser = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/maps.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($iduser));
    $fetchedRow = $stmt->fetch();

    $fullAddresse= $fetchedRow["rue"]." ".$fetchedRow["ville"]." ".$fetchedRow["codepostal"];
    return $fullAddresse;
}

function fetchAddressesMedecin($conn){
    $sql = "SELECT * from Adresse where user.role = 'medecin'";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/maps.php?error=stmtfailed");
        exit();
    }

    $stmt->exec();
    $fetchedRow = $stmt->fetch();

    return $fetchedRow;
}

function fetchRowUser($conn, $username){
    $sql = "SELECT * from user where username = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($username));
    $fetchedRow = $stmt->fetch();
    return $fetchedRow;
}

function modifyRowUser($conn, $iduser, $username, $familyname, $name, $email, $phone, $sexe, $role, $idkit){
    $sql= "UPDATE user SET(username = ?, familyname = ?, 
    name = ?, email = ?, phone = ?, sexe = ?, role = ?, KitDiagnostiqueidKitDiagnostique = ?) WHERE iduser = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($username, $familyname, $name, $email, $phone, $sexe, $role, $idkit, $iduser));

    return fetchRowUser($conn, $username);
}   



?>