<?php 
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-arbre.php';

session_start();

if (isset($_SESSION["idkit"])){
    $idkit = $_SESSION["idkit"];
    $result = fetchTree($conn, $idkit);

    $idtree = $result["idArbre"];
    $timestamp = $result["Timestamp"];

    $creationtime = strtotime($timestamp);
    $curTmstp = time();

    $interval = abs(($curTmstp - $creationtime));

    header('location:../views/personalspace/ecologie-arbre.php?idkit='.$idkit.'&time='.$interval.'&idtree='.$idtree);
    exit();
} else {
    header("location:../views/mainmenu.php");
    exit();
}

?>