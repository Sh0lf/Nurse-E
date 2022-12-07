<?php

require '../Controller/functions.inc.php';
require '../Controller/dbh.inc.php';

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

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $SpeMed, $role){
    $sql = "INSERT INTO user (username, familyname, name, email, phone, sexe, password, speMed, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Views/inscription.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssissss", $username, $nom, $prenom, $email, $phone, $sexe, $hashedpwd, $SpeMed, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Views/inscription.php?error=none");
    exit();
}

?>