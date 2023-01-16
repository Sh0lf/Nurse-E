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

?>