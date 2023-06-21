<?php
include_once '../controller/dbh.inc.php';

function addVal($conn, $typecapteur, $valeur)
{
    $sql = "INSERT INTO Valeur(Valeur, idCapteur) VALUES (?, ?);";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/client/capteurs.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($valeur, $typecapteur));
}

function fetchValeur($conn, $idcapt)
{
    $sql = "SELECT Valeur FROM Valeur WHERE idCapteur = ? ORDER BY idValeur DESC LIMIT 3";
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/client/capteurs.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($idcapt));
    $fetchedRow = $stmt->fetch();
    return $fetchedRow;
}
?>