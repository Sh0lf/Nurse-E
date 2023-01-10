<?php

ini_set('display_errors', 1);
<<<<<<< HEAD
=======
include_once '../controller/functions.inc.php';
include_once '../controller/dbh.inc.php';
>>>>>>> 3836c0f (New updates: maps and user modify)

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

<<<<<<< HEAD
function fetchRowUser($conn, $input){
    $sql = "SELECT * from user where username = ? or iduser = ? or email = ? or familyname = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/adminmodif-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($input, $input, $input, $input));
=======
function fetchRowUser($conn, $username){
    $sql = "SELECT * from user where username = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($username));
>>>>>>> 3836c0f (New updates: maps and user modify)
    $fetchedRow = $stmt->fetch();
    return $fetchedRow;
}

function modifyRowUser($conn, $iduser, $username, $familyname, $name, $email, $phone, $sexe, $role, $idkit){
<<<<<<< HEAD
    $sql= "UPDATE user SET username = ?, familyname = ?, 
    name = ?, email = ?, phone = ?, sexe = ?, role = ?, KitDiagnostiqueidKitDiagnostique = ? WHERE iduser = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/adminmodif-personalspace.php?error=stmtfailed");
=======
    $sql= "UPDATE user SET(username = ?, familyname = ?, 
    name = ?, email = ?, phone = ?, sexe = ?, role = ?, KitDiagnostiqueidKitDiagnostique = ?) WHERE iduser = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin-personalspace.php?error=stmtfailed");
>>>>>>> 3836c0f (New updates: maps and user modify)
        exit();
    }
    $stmt->execute(array($username, $familyname, $name, $email, $phone, $sexe, $role, $idkit, $iduser));

    return fetchRowUser($conn, $username);
}   

<<<<<<< HEAD
function deleteUser($conn, $iduser){
    $sql = "DELETE FROM user WHERE iduser = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/adminsupp-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($iduser));
    
    if($stmt){
        return true;
    } else {
        return false;
    }
}

function fetchAllUser($conn){
    $sql = "SELECT * FROM user";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/adminsupp-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->fetchAll();
    return $result;
    
}
=======
>>>>>>> 3836c0f (New updates: maps and user modify)


?>