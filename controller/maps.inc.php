<?php 
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once './maps.js';
include_once '../model/SQL-personalinfopage.php';

session_start();
$iduser = $_SESSION["iduser"];
$username = $_SESSION["username"];
$familyname = $_SESSION["familyname"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$sexe = $_SESSION["sexe"];
$role = $_SESSION["role"];
$idkit = $_SESSION["idkit"];

$fullAddresse = fetchAddressAsker($conn, $iduser);
echo json_encode(array($name,$fullAddresse))
?>