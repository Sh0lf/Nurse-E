<?php 

ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-questions.php';

session_start();

if (isset($_SESSION["iduser"])){
    $iduser = $_SESSION["iduser"];
    $fetchedRow = createDiag($conn, $iduser);

    $idDia = $fetchedRow["idDiagnostique"];

    header("location:../views/personalspace/client/questionnaire.php?idDia=" . $idDia);
    exit();
} else {
    header("location:../views/loginsys/login.php");
    exit();
}





?>
