<?php

include_once '../Controller/functions.inc.php';
include_once '../Controller/dbh.inc.php';

function uidExists($conn, $username, $email)
{
    try {
        $sql = "SELECT * FROM user_test WHERE username = ? OR email = ?;";
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
    } else {
        header("location: ../Views/loginsys/signup.php?error=failedprocess");
        exit();
    }
}

function createUser($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $idkit)
{
    try {
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO user(username, familyname, name, email, phone, sexe, password, role, KitDiagnostiqueidKitDiagnostique) VALUES ('$username', '$nom', '$prenom', '$email', '$phone', '$sexe', '$hashedpwd', '$role', '$idkit');";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: ../Views/loginsys/signup.php?error=stmtfailed");
            exit();
        }

        $stmt->exec($sql); 
        header("location: ../Views/loginsys/signup.php?error=none");
        exit();
    }

    catch(PDOException $e){
        echo $e->getMessage();
    }
    
}

?>