<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once '../model/SQL-faq.php';

if (isset($_POST["submit_ques"])){
    $ques = $_POST['question'];

    addQuestion($conn, $ques);
    header("location: ../views/misc/FAQ.php?error=success");
    exit();

} elseif (isset($_GET["idques"])) {

    $idques = $_GET["idques"];

    $result = fetchQuestion($conn, $idques);

    $ques = $result["question"];
    $rep = $result["reponse"];

    header('location: ../views/personalspace/admin/adminfaq-personalspace.php?id='.$idques.'&ques='.$ques.'&rep='.$rep);
    exit();
    
} elseif (isset($_POST["submit_edit"])){
    
    $idques = $_POST["idques"];
    $ques = $_POST["question"];
    $rep = $_POST["reponse"];
    
    $result = modifyRowQuestion($conn, $idques, $ques, $rep);
    
    $idques = $result["idFAQ"];
    $ques = $result["question"];
    $rep = $result["reponse"];

    header('location: ../views/personalspace/admin/adminfaq-personalspace.php?id='.$idques.'&ques='.$ques.'&rep='.$rep.'&error=success');
    exit();
    
} elseif (isset($_GET["idquesrem"])){

    $idques = $_GET["idquesrem"];

    $result = remQuestion($conn, $idques);

    if ($result){
        header('location: ../views/personalspace/admin/adminfaq-personalspace.php?error=rem');
        exit();
    } else {
        header('location: ../views/personalspace/admin/adminfaq-personalspace.php?error=rem');
        exit();
    }
}

else {
    header("location: ../views/misc/FAQ.php");
    exit();
}

?>