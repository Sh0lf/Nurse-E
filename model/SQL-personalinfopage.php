<?php

ini_set('display_errors', 1);

function fetchAddressAsker($conn, $iduser){
    $sql = "SELECT * from Adresse where user_iduser = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/maps.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($iduser));
    $fetchedRow = $stmt->fetch();

    $fullAddresse= $fetchedRow["rue"]." ".$fetchedRow["ville"]." ".$fetchedRow["codepostal"];
    return $fullAddresse;
}

function fetchAddressesMedecin($conn){
    $sql = "SELECT * from Adresse where user.role = 'medecin'";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/maps.php?error=stmtfailed");
        exit();
    }

    $stmt->exec();
    $fetchedRow = $stmt->fetch();

    return $fetchedRow;
}

function fetchRowUser($conn, $input){
    $sql = "SELECT * from user where username = ? or iduser = ? or email = ? or familyname = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminmodif-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($input, $input, $input, $input));
    $fetchedRow = $stmt->fetch();
    return $fetchedRow;
}

function modifyRowUser($conn, $iduser, $username, $familyname, $name, $email, $phone, $sexe, $role, $idkit){
    $sql= "UPDATE user SET username = ?, familyname = ?, 
    name = ?, email = ?, phone = ?, sexe = ?, role = ?, KitDiagnostiqueidKitDiagnostique = ? WHERE iduser = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminmodif-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($username, $familyname, $name, $email, $phone, $sexe, $role, $idkit, $iduser));

    return fetchRowUser($conn, $username);
}   

function deleteUser($conn, $iduser){
    $sql = "DELETE FROM user WHERE iduser = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminsupp-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($iduser));
    
    if($stmt){
        return true;
    } else {
        return false;
    }
}

function fetchAllUser($conn){
    $sql = "SELECT * FROM user";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminsupp-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->fetchAll();
    return $result;
    
}

function fetchAllUserClient($conn){
    $sql = "SELECT * FROM user WHERE role = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminsupp-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array("client"));
    // set the resulting array to associative
    $result = $stmt->fetchAll();
    return $result;
    
}

function profilEditRowUser($conn, $iduser, $username, $familyname, $name, $email, $phone, $file_destination){
    $sql= "UPDATE user SET username = ?, familyname = ?, 
    name = ?, email = ?, phone = ?, pfp_path = ? WHERE iduser = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/profil.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($username, $familyname, $name, $email, $phone, $file_destination, $iduser));

    return fetchRowUser($conn, $username);
}   

function addQuestionTicket($conn, $ques, $iduser){
    $sql = "INSERT INTO Ticket(question, iduser) VALUES (?, ?)";
    // use exec() because no results are returned
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($ques, $iduser));
}

function fetchAllQuestionsTicket($conn){
    $sql = "SELECT * FROM Ticket";
    // use exec() because no results are returned
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function fetchQuestionTicket($conn, $idques){
    $sql = "SELECT * FROM Ticket WHERE idTicket = ?";
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

function modifyRowQuestionTicket($conn, $idques, $ques, $rep){
    $sql= "UPDATE Ticket SET question = ?, reponse = ? WHERE idTicket = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/personalspace/admin/adminfaq-personalspace.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($ques, $rep, $idques));

    return fetchQuestionTicket($conn, $idques);
}   

function remQuestionTicket($conn, $idques){
    $sql = "DELETE FROM Ticket WHERE idTicket = ?";
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

function showAllTicketClient($conn, $iduser)
{
    $sql = "SELECT * FROM Ticket WHERE iduser = ?  ";
    $statement = $conn->prepare($sql);
    $statement->execute(array($iduser));
    $questions = $statement->fetchAll();
    return $questions;
}

?>
