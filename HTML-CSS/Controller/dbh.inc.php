<?php
<<<<<<< HEAD
ini_set('display_errors', 1);
$db_name = "rflzfr_nursemed_db";
$db_user = "rflzfr_nursemed_db";
$db_pass = "M71b-VLo8Is*%9!d";
$db_host = "176.31.132.185";
$conn = new PDO("mysql:host=". $db_host .";dbname=". $db_name ."", $db_user, $db_pass);
=======

$db_username = 'root';
$db_password = 'root';
$conn = new PDO( 'mysql:host=localhost;dbname=Projet_BDD_APP', $db_username, $db_password );
>>>>>>> 953afe5 (Update: login sys in pdo + stylizing pages)
if(!$conn){
    die("Fatal Error: Connection Failed!");
}

?>