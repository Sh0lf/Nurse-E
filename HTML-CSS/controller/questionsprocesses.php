<?php
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-questions.php';

session_start();

if (isset($_POST["submit"])) {
  $idDia = $_POST["idDia"];
  $s1 = $_POST["s1"];
  $s2 = $_POST["s2"];
  $s3 = $_POST["s3"];
  $s4 = $_POST["s4"];
  $s5 = $_POST["s5"];

  if (EmptyInputQues($s1, $s2, $s3, $s4, $s5) !== false){
    header("location: ../views/personalspace/client/questionnaire.php?error=emptyinput");
    exit();
  }

  $fetchedRow = quest($conn,$s1, $s2, $s3, $s4, $s5);

  $sentence = "<br> Maladie: " . $fetchedRow["name"] . " - gravité: " . $fetchedRow["description"] . "<br>";

 
} 
else {
  header("location: ../views/personalspace/client/questionnaire.php");
  exit();
}