<?php
ini_set('display_errors', 1);
$db_name = "projet_bdd_app";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";
$conn = new PDO("mysql:host=". $db_host .";dbname=". $db_name ."", $db_user, $db_pass);
if(!$conn){
    die("Fatal Error: Connection Failed!");
}

?>