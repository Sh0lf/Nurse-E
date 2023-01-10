<?php

ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../bin/phpMyadmin/vendor/autoload.php';

    class sendEmailRecovery

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

            $mail->isHTML(true);

            $mail->CharSet = 'utf-8';

            $mail->setFrom('nurse.medicobot@gmail.com', "Nurse-e"); // sender's email and name

            $mail->addAddress($email);  // receiver's email and name

            $headers .= 'Content-type: text/html;' . "\r\n"; 

            $mail->Subject = 'Recuperation de votre compte';

            $mail->Body = '<h1>Veuillez cliquer sur le button pour modifier le mot de passe:</h1>'
                . "<br>"
                . '<ul><a href="http://nurse-medicobot.wstr.fr/controller/resetpwd.inc.php?code=' . $code .'">'
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

$sendMlrecov = new sendEmailRecovery();