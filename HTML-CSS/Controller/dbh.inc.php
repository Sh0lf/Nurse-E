<?php
ini_set('display_errors', 1);
$db_name = "rflzfr_nursemed_db";
$db_user = "rflzfr_nursemed_db";
$db_pass = "M71b-VLo8Is*%9!d";
$db_host = "176.31.132.185";
$conn = new PDO("mysql:host=". $db_host .";dbname=". $db_name ."", $db_user, $db_pass);
if(!$conn){
    die("Fatal Error: Connection Failed!");
}

?>