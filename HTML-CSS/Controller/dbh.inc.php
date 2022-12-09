<?php

$conn = new mysqli("85.159.213.31", "adminG5B", "adminG5B", "Projet_BDD_APP");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

?>