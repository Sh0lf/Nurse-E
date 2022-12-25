<?php

include_once '../Controller/functions.inc.php';
include_once '../Controller/dbh.inc.php';
include_once '../Controller/mysqli.dbh.php';
include_once '../Controller/sendEmail.php';

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../Views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($username, $email));

    $row = $stmt->rowCount();
    $fetchedRow = $stmt->fetch();

    if ($row > 0) {
        return $fetchedRow;
    } else {
        $result = false;
        return $result;
    }
} 

function accVerif_sendingEmail($conn_sqli, $sendMl, $nom, $email, $code){
    $sql = "INSERT INTO user_verif ('nom', 'email', 'code') VALUES ('$nom', '$email', '$code')";
    $result = mysqli_query($conn_sqli,$sql);

    if ($result) {
        $sendMl->send($code);
        header("location: ../Views/loginsys/signup.php?error=verifyemail");
        exit();
    } else {
        header("location: ../Views/loginsys/signup.php?error=accprocfailed");
        exit();
    }

}

function accVerif_verifyingCode($conn, $id){
    $sql = "SELECT * FROM user_verif WHERE code='$id' AND is_verified = 0";
    $stmt = $conn->prepare($sql);
    $stmt->execute(); 
    $row = $stmt->rowCount();
    if ($row == 1) {
        $sql = "DELETE FROM user_verif WHERE code='$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
        return false;  
    }
    else {
        return true;
    }
}

function createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $idkit)
{
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO user(username, familyname, name, email, phone, sexe, password, role, KitDiagnostiqueidKitDiagnostique) VALUES ('$username', '$nom', '$prenom', '$email', '$phone', '$sexe', '$hashedpwd', '$role', '$idkit');";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../Views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(); 
    header("location: ../Views/loginsys/signup.php?error=none");
    exit();

}


?>