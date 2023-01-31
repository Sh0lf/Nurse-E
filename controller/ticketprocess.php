<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-personalinfopage.php';

if (isset($_POST["submit_ques"])){
    
    $iduser = test_input($_POST['iduser']);
    $ques = test_input($_POST['question']);

    addQuestionTicket($conn, $ques, $iduser);
    header("location: ../views/personalspace/ticket.php?error=success");
    exit();

} elseif (isset($_GET["idques"])) {

    $idques = $_GET["idques"];

    $result = fetchQuestionTicket($conn, $idques);

    $ques = $result["question"];
    $rep = $result["reponse"];

    header('location: ../views/personalspace/admin/adminticket-personalspace.php?id='.$idques.'&ques='.$ques.'&rep='.$rep);
    exit();
    
} elseif (isset($_POST["submit_edit"])){
    
    $idques = test_input($_POST["idques"]);
    $ques = test_input($_POST["question"]);
    $rep = test_input($_POST["reponse"]);
    
    $result = modifyRowQuestionTicket($conn, $idques, $ques, $rep);
    
    $idques = $result["idFAQ"];
    $ques = $result["question"];
    $rep = $result["reponse"];

    header('location: ../views/personalspace/admin/adminticket-personalspace.php?id='.$idques.'&ques='.$ques.'&rep='.$rep.'&error=success');
    exit();
    
} elseif (isset($_GET["idquesrem"])){

    $idques = $_GET["idquesrem"];

    $result = remQuestionTicket($conn, $idques);

    if ($result){
        header('location: ../views/personalspace/admin/adminticket-personalspace.php?error=rem');
        exit();
    } else {
        header('location: ../views/personalspace/admin/adminticket-personalspace.php?error=rem');
        exit();
    }
}

else {
    header("location: ../views/personalspace/ticket.php");
    exit();
}

?>