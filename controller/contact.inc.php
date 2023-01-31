<?php
ini_set('display_errors', 1);
include_once './dbh.inc.php';
include_once './functions.inc.php';
include_once './sendEmailContact.php';

if (isset($_POST["submit_contact"])){
    $nom = test_input($_POST["nom"]);
    $email = test_input($_POST["email"]);
    $sujet = test_input($_POST["sujet"]);
    $body = test_input($_POST["body"]);

    if (EmptyInputContact($nom, $email, $sujet, $body) !== false){
        header("location: ../views/misc/contact.php?error=emptyinput");
        exit();
    }

    $sendMlContact->send($nom, $email, $sujet, $body);
    header("location: ../views/misc/contact.php?error=none");
    exit();

} else {
    header("location: ../views/misc/contact.php");
    exit();
}

?>