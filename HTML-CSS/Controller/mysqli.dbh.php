<?php

$conn_sqli = mysqli_connect("localhost", "root", "root", "Projet_BDD_APP");

if (!$conn_sqli) {

  die("Connection failed: " . mysqli_connect_error());

}