<?php

<<<<<<< HEAD
<<<<<<< HEAD
ini_set('display_errors', 1);
=======
>>>>>>> 9c68076 (Updates in organization)
include_once '../controller/functions.inc.php';
include_once '../controller/dbh.inc.php';
include_once '../controller/sendEmail.php';
include_once '../controller/sendEmailRecovery.php';
<<<<<<< HEAD

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($username, $email));

    $row = $stmt->rowCount();
    $fetchedRow = $stmt->fetch();

    if ($row > 0) {
        return $fetchedRow;
    } else {
        $result = false;
        return $result;
    }
} 

function checkAcc_Verified($conn, $username, $email)
{
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($username, $email));

    $row = $stmt->rowCount();
    $fetchedRow = $stmt->fetch();

    if ($row > 0) {
        if ($fetchedRow["is_verified"] == 1) {
            return $fetchedRow;
        } else {
            return false;
        }
    } else {
        return "notexist";
    }
}

function createUser_temp($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $code, $idkit, $sendMl)
{
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO user(username, familyname, name, email, phone, sexe, password, role, code, KitDiagnostiqueidKitDiagnostique) VALUES ('$username', '$nom', '$prenom', '$email', '$phone', '$sexe', '$hashedpwd', '$role', '$code', '$idkit');";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(); 
    $sendMl->send($code, $username, $nom, $prenom, $email);
    header("location: ../views/loginsys/signup.php?error=verifyemail");
    exit();
}

function accCompletion($conn, $username, $timestamp, $code)
{
    $sql = "SELECT * FROM user where code= ?";
    $now_timestamp = strtotime($timestamp);
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php");
        exit();
    }
    $stmt->execute(array($code));
    $fetchedRow = $stmt->fetch();
    $intervale = abs($now_timestamp - (strtotime($fetchedRow["creation_time"])));
    if ($intervale <= 2 * 60 * 60) {
        $sql = "UPDATE user SET is_verified = 1 WHERE username = '$username' AND code ='$code'";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: ../views/loginsys/signup.php?error=stmtfailed");
            exit();
        }
        $stmt->execute();
        header("location: ../views/loginsys/signup.php?error=none");
        exit();
    } else {
        $sql = "DELETE FROM user WHERE code=?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: ../views/loginsys/signup.php?error=stmtfailed");
            exit();
        }
        $stmt->execute(array($code));
        header("location: ../views/loginsys/signup.php?error=toolate");
        exit();
    }
}

function pwdRecovery($conn, $email){
    $sql = "SELECT * FROM user where email= ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/forgotpwd.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($email));
    $row = $stmt->rowCount();
    $fetchedRow = $stmt->fetch();

    if ($row > 0) {
        if ($fetchedRow["is_verified"] == 1) {
            $code = rand();
            $t = time();
            $timestamp = date(("Y-m-d H:i:s"), $t);
            $sql = "UPDATE user SET code = ?, code_timestamp = ? WHERE email= ?";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                header("location: ../views/loginsys/forgotpwd.php?error=stmtfailed");
                exit();
            }
            $stmt->execute(array($code, $timestamp, $email));
            $sql = "SELECT * FROM user where email= ?";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                header("location: ../views/loginsys/forgotpwd.php?error=stmtfailed");
                exit();
            }
            $stmt->execute(array($email));
            $fetchedRow = $stmt->fetch();
            return $fetchedRow;
        } else {
            return false;
        }
    } else {
        return "notexist";
    }
}

function checkQueryPwdReset($conn, $timestamp, $code){
    $sql = "SELECT * FROM user where code= ?";
    $now_timestamp=strtotime($timestamp);
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/forgotpwd.php");
        exit();
    }
    $stmt->execute(array($code));
    $fetchedRow = $stmt->fetch();
    $intervale = abs($now_timestamp - (strtotime($fetchedRow["code_timestamp"])));
    if ($intervale >= 2*60*60){
        return true;
    } else {
        return false;
    }
}

function changePwd($conn, $pwd, $code){
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    error_log(print_r($pwd, TRUE));
    error_log(print_r($hashedpwd, TRUE));
    $sql = "UPDATE user SET password = ? where code = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header('location: ../views/mainmenu.php');
        exit();
    }
    $stmt->execute(array($hashedpwd, $code));
    return true;
}

=======
<<<<<<< HEAD
require '../Controller/functions.inc.php';
=======
include_once '../Controller/functions.inc.php';
include_once '../Controller/dbh.inc.php';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 06adc99 (small update; some modifications)
=======
include_once '../Controller/mysqli.dbh.php';
=======
>>>>>>> 66306bb (IT WORKS EMAIL VERIF IS GOOD)
include_once '../Controller/sendEmail.php';
<<<<<<< HEAD
>>>>>>> 6d2a226 (trying something new: acc verif by email.)
=======
include_once '../Controller/sendEmailRecovery.php';
>>>>>>> b14763e (made pwd recovery !)
=======
>>>>>>> 9c68076 (Updates in organization)

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?;";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($username, $email));

    $row = $stmt->rowCount();
    $fetchedRow = $stmt->fetch();

    if ($row > 0) {
        return $fetchedRow;
    } else {
        $result = false;
        return $result;
    }
} 

function checkAcc_Verified($conn, $username, $email)
{
    $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(array($username, $email));

    $row = $stmt->rowCount();
    $fetchedRow = $stmt->fetch();

    if ($row > 0) {
        if ($fetchedRow["is_verified"] == 1) {
            return $fetchedRow;
        } else {
            return false;
        }
    } else {
        return "notexist";
    }
}

function createUser_temp($conn, $username, $nom, $prenom, $email, $phone, $sexe, $pwd, $role, $code, $idkit, $sendMl)
{
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO user(username, familyname, name, email, phone, sexe, password, role, code, KitDiagnostiqueidKitDiagnostique) VALUES ('$username', '$nom', '$prenom', '$email', '$phone', '$sexe', '$hashedpwd', '$role', '$code', '$idkit');";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/signup.php?error=stmtfailed");
        exit();
    }

    $stmt->execute(); 
    $sendMl->send($code, $username, $nom, $prenom, $email);
    header("location: ../views/loginsys/signup.php?error=verifyemail");
    exit();
}

function accCompletion($conn, $username, $timestamp, $code)
{
    $sql = "SELECT * FROM user where code= ?";
    $now_timestamp = strtotime($timestamp);
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/forgotpwd.php");
        exit();
    }
    $stmt->execute(array($code));
    $fetchedRow = $stmt->fetch();
    $intervale = abs($now_timestamp - (strtotime($fetchedRow["creation_time"])));
    if ($intervale >= 2 * 60 * 60) {
        $sql = "UPDATE user SET is_verified = 1 WHERE username = '$username' AND code ='$code'";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: ../views/loginsys/signup.php?error=stmtfailed");
            exit();
        }
        $stmt->execute();
        header("location: ../views/loginsys/signup.php?error=none");
        exit();
    } else {
        $sql = "DELETE FROM user WHERE code=?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: ../views/loginsys/signup.php?error=stmtfailed");
            exit();
        }
        $stmt->execute(array($code));
        header("location: ../views/loginsys/signup.php?error=toolate");
        exit();
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fe02d72 (Updating on clarity)
=======
=======
function pwdRecovery($conn, $email){
    $sql = "SELECT * FROM user where email= ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/forgotpwd.php?error=stmtfailed");
        exit();
    }
    $stmt->execute(array($email));
    $row = $stmt->rowCount();
    $fetchedRow = $stmt->fetch();

    if ($row > 0) {
        if ($fetchedRow["is_verified"] == 1) {
            $code = rand();
            $t = time();
            $timestamp = date(("Y-m-d H:i:s"), $t);
            $sql = "UPDATE user SET code = ?, code_timestamp = ? WHERE email= ?";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                header("location: ../views/loginsys/forgotpwd.php?error=stmtfailed");
                exit();
            }
            $stmt->execute(array($code, $timestamp, $email));
            $sql = "SELECT * FROM user where email= ?";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                header("location: ../views/loginsys/forgotpwd.php?error=stmtfailed");
                exit();
            }
            $stmt->execute(array($email));
            $fetchedRow = $stmt->fetch();
            return $fetchedRow;
        } else {
            return false;
        }
    } else {
        return "notexist";
    }
}

function checkQueryPwdReset($conn, $timestamp, $code){
    $sql = "SELECT * FROM user where code= ?";
    $now_timestamp=strtotime($timestamp);
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: ../views/loginsys/forgotpwd.php");
        exit();
    }
    $stmt->execute(array($code));
    $fetchedRow = $stmt->fetch();
    $intervale = abs($now_timestamp - (strtotime($fetchedRow["code_timestamp"])));
    if ($intervale >= 2*60*60){
        return false;
    } else {
        return true;
    }
}

function changePwd($conn, $pwd, $code){
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    error_log(print_r($pwd, TRUE));
    error_log(print_r($hashedpwd, TRUE));
    $sql = "UPDATE user SET password = ? where code = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header('location: ../views/mainmenu.php');
        exit();
    }
    $stmt->execute(array($hashedpwd, $code));
    return true;
}
>>>>>>> b14763e (made pwd recovery !)

>>>>>>> 6d2a226 (trying something new: acc verif by email.)
?>