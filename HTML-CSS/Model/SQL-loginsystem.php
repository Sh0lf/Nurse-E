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

function createUser_temp($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $code, $idkit, $sendMl)
{
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO user(username, familyname, name, email, phone, sexe, password, role, code, KitDiagnostiqueidKitDiagnostique) VALUES ('$username', '$nom', '$prenom', '$email', '$phone', '$sexe', '$hashedpwd', '$role', '$code', '$idkit');";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../Views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(); 
    $sendMl->send($code, $username, $nom, $prenom, $email);
    header("location: ../Views/loginsys/signup.php?error=verifyemail");
    exit();
}

function accCompletion($conn, $username, $code){
    $sql = "UPDATE user SET is_verified = 1 WHERE username = '$username' AND code ='$code'";
    $stmt = $conn->prepare($sql);
    $stmt->execute(); 
    header("location: ../Views/loginsys/signup.php?error=none");
    exit();
}


?>