<?php
include_once '../controller/dbh.inc.php';

function addVal($conn, $typcapteur, $valeur)
{
    $sql = "INSERT INTO Valeur SET Valeur = ?, idCapteur = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($valeur, $typcapteur));
}

function fetchValeur($conn, $idcapt)
{
    $sql = "SELECT Valeur FROM Valeur WHERE idcapteur = ? ORDER BY idvaleur DESC LIMIT 3";
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($idcapt));
    $fetchedRow = $stmt->fetch();
    return $fetchedRow['Valeur'];
}
?>