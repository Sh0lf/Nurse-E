<?php

include_once '../Controller/functions.inc.php';
include_once '../Controller/dbh.inc.php';

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultData);

    mysqli_stmt_close($stmt);

    if ($row){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
}

function createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $idkit){
    $sql = "INSERT INTO user(username, familyname, name, email, phone, sexe, password, role, KitDiagnostique_idKitDiagnostique) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssisssi", $username, $nom, $prenom, $email, $phone, $sexe, $hashedpwd, $role, $idkit);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Views/loginsys/signup.php?error=none");
    exit();
}

?>