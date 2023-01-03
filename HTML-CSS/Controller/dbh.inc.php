<?php

$db_username = 'rflzfr_nursemed_db';
$db_password = 'M71b-VLo8ls*%9!d';
$conn = new PDO( 'mysql:host=176.31.132.185;dbname=rflzfr_nursemed_db', $db_username, $db_password );
if(!$conn){
    die("Fatal Error: Connection Failed!");
}

?>