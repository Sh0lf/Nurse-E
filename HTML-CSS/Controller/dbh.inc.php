<?php

$conn = mysqli_connect("localhost", "root", "root", "Projet_BDD_APP");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

?>