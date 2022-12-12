<?php

<<<<<<< HEAD
require '../Controller/functions.inc.php';
=======
include_once '../Controller/functions.inc.php';
include_once '../Controller/dbh.inc.php';
>>>>>>> 06adc99 (small update; some modifications)

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM User WHERE Username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Views/inscription.php?error=stmtfailed");
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

function createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role){
    $sql = "INSERT INTO user_test (username, familyname, name, email, phone, sexe, password, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Views/inscription.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssisss", $username, $nom, $prenom, $email, $phone, $sexe, $hashedpwd, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Views/inscription.php?error=none");
    exit();
}

?>