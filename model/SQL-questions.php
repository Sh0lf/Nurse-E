<?php

ini_set('display_errors', 1);
include_once '../controller/dbh.inc.php';


function createDiag($conn, $iduser){
    $sql = "INSERT INTO Diagnostique(user_iduser) VALUES (?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/client/client-personalspace.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($iduser));

    $sql = "SELECT * FROM Diagnostique WHERE user_iduser = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/client/client-personalspace.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($iduser));
    $fetchedRow = $stmt->fetch();
    return $fetchedRow;
}

function quest($conn, $s1, $s2, $s3, $s4, $s5)
{
    $sql = "SELECT * FROM symptoms where (s1,s2,s3,s4,s5) = (?,?,?,?,?);";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/client/questionnaire.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($s1, $s2, $s3, $s4, $s5));

    $fetchedRow = $stmt->fetch();
    return $fetchedRow;
} 


?>