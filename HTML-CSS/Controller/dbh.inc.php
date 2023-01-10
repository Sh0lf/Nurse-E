<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1f01c05 (updated: same code as the website)
ini_set('display_errors', 1);
$db_name = "projet_bdd_app";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";
$conn = new PDO("mysql:host=". $db_host .";dbname=". $db_name ."", $db_user, $db_pass);
<<<<<<< HEAD
=======

<<<<<<< HEAD
$db_username = 'root';
$db_password = 'root';
$conn = new PDO( 'mysql:host=localhost;dbname=Projet_BDD_APP', $db_username, $db_password );
>>>>>>> 953afe5 (Update: login sys in pdo + stylizing pages)
=======
$db_username = 'rflzfr_nursemed_db';
$db_password = 'M71b-VLo8ls*%9!d';
<<<<<<< HEAD
$conn = new PDO( 'mysql:host=176.31.132.185;dbname=Projet_BDD_APP', $db_username, $db_password );
>>>>>>> 3ec4b8c (added time restrictions)
=======
$conn = new PDO( 'mysql:host=176.31.132.185;dbname=rflzfr_nursemed_db', $db_username, $db_password );
>>>>>>> 13556d4 (Updated for web host)
=======
>>>>>>> 1f01c05 (updated: same code as the website)
if(!$conn){
    die("Fatal Error: Connection Failed!");
}

?>