<?php
include_once '../controller/dbh.inc.php';

function createTree($conn, $idkit){
    $sql = "INSERT INTO Arbre(KitDiagnostique_idKitDiagnostique) VALUES (?);";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($idkit)); 
}

function fetchTree($conn, $idkit){
    $sql = "SELECT * FROM Arbre WHERE KitDiagnostique_idKitDiagnostique = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($idkit)); 
    $result = $stmt->fetch();
    return $result;
}

?>