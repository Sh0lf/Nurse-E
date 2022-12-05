<?php
<<<<<<< HEAD
ini_set('display_errors', 1);
$db_name = "rflzfr_nursemed_db";
$db_user = "rflzfr_nursemed_db";
$db_pass = "M71b-VLo8Is*%9!d";
$db_host = "176.31.132.185";
$conn = new PDO("mysql:host=". $db_host .";dbname=". $db_name ."", $db_user, $db_pass);
if(!$conn){
    die("Fatal Error: Connection Failed!");
=======

$serverName="85.159.213.31";
$dbUsername="adminG5B";
$dbPassword="adminG5B";
$dbName="Projet_BDD_APP";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
>>>>>>> 28487d0 (update php MVC partiel login system)
}

?>