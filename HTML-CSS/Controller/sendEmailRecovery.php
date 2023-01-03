<?php

<<<<<<< HEAD
ini_set('display_errors', 1);
=======
>>>>>>> b14763e (made pwd recovery !)
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

<<<<<<< HEAD
require '../../vendor/autoload.php';

    class sendEmailRecovery
=======
require '../../bin/phpMyAdmin/vendor/autoload.php';

<<<<<<< HEAD
    class sendEmail
>>>>>>> b14763e (made pwd recovery !)
=======
    class sendEmailRecovery
>>>>>>> aafffe2 (need to test deeply)

    {
        function send($code, $email)
        {
        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.


        $mail = new PHPMailer(true);                              

        try {
            //Enable verbose debug output
            $mail->SMTPDebug = 1;//SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nurse.medicobot@gmail.com';
            $mail->Password = 'qliczfgrslfxmvof';                     

            //Enable SSL encryption;
            $mail->SMTPSecure = 'tls';                           

            $mail->Port = 587;   // port for SMTP     

<<<<<<< HEAD
            $mail->isHTML(true);

            $mail->CharSet = 'utf-8';
=======
            $mail->isHTML(true); 
>>>>>>> b14763e (made pwd recovery !)

            $mail->setFrom('nurse.medicobot@gmail.com', "Nurse-e"); // sender's email and name

            $mail->addAddress($email);  // receiver's email and name

<<<<<<< HEAD
            $headers .= 'Content-type: text/html;' . "\r\n"; 
=======
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
>>>>>>> b14763e (made pwd recovery !)

            $mail->Subject = 'Recuperation de votre compte';

            $mail->Body = '<h1>Veuillez cliquer sur le button pour modifier le mot de passe:</h1>'
                . "<br>"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                . '<ul><a href="http://nurse-medicobot.wstr.fr/controller/resetpwd.inc.php?code=' . $code .'">'
=======
                . '<ul><a href="http://localhost:8888/Controller/resetpwd.php?code=' . $code .'">'
>>>>>>> b14763e (made pwd recovery !)
=======
                . '<ul><a href="http://localhost:8888/Views/loginsys/resetpwd.php?code=' . $code .'">'
>>>>>>> aafffe2 (need to test deeply)
=======
                . '<ul><a href="http://localhost:8888/views/loginsys/resetpwd.php?code=' . $code .'">'
>>>>>>> 9c68076 (Updates in organization)
=======
                . '<ul><a href="http://nurse-medicobot.wstr.fr/controller/resetpwd.inc.php?code=' . $code .'">'
>>>>>>> 3ec4b8c (added time restrictions)
                . '<button style="padding: 5px 15px; margin-left: 20px; margin-top: 18px; font-size: 17px; color: white; border:1px solid white; background-color: #43B1F8;cursor:pointer;">'
                . 'Validation</button></a></ul>';

 

            $mail->send();

            echo 'Message has been sent';

            $mail->smtpClose();

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

        }

    }

<<<<<<< HEAD
<<<<<<< HEAD
$sendMlrecov = new sendEmailRecovery();
=======
$sendMlrecov = new sendEmail();
>>>>>>> b14763e (made pwd recovery !)
=======
$sendMlrecov = new sendEmailRecovery();
>>>>>>> aafffe2 (need to test deeply)
