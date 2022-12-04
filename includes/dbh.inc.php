<?php

$serverName="85.159.213.31";
$dbUsername="adminG5B";
$dbPassword="adminG5B";
$dbName="medicobot";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

?>