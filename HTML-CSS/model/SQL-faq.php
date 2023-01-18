<?php
include_once '../controller/dbh.inc.php';

function addQuestion($conn, $ques){
    $sql = "INSERT INTO FAQ(question) VALUES (?)";
    // use exec() because no results are returned
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($ques));
}

function fetchAllQuestions($conn){
    $sql = "SELECT * FROM FAQ";
    // use exec() because no results are returned
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function fetchQuestion($conn, $idques){
    $sql = "SELECT * FROM FAQ WHERE idFAQ = ?";
    // use exec() because no results are returned
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($idques));
    $fetchedRow = $stmt->fetch();
    return $fetchedRow;
}

function modifyRowQuestion($conn, $idques, $ques, $rep){
    $sql= "UPDATE FAQ SET question = ?, reponse = ? WHERE idFAQ = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($ques, $rep, $idques));

    return fetchQuestion($conn, $idques);
}   

function remQuestion($conn, $idques){
    $sql = "DELETE FROM FAQ WHERE idFAQ = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($idques));
    
    if($stmt){
        return true;
    } else {
        return false;
    }
}

function showAllQuestionsClient($conn)
{
    $sql = "SELECT * FROM questions WHERE Reponse != ''  ";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $questions = $statement->fetchAll();
    return $questions;
}

?>