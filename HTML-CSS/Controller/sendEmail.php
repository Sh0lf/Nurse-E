<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../bin/phpMyAdmin/vendor/autoload.php';

    class sendEmail

    {
        function send($code, $username, $nom, $prenom, $email)
        {
        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $nomEntier = $nom . ' ' . $prenom;

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

            $mail->setFrom('nurse.medicobot@gmail.com', "Nurse-e"); // sender's email and name

            $mail->addAddress($email, $nomEntier);  // receiver's email and name

            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Verification du compte';

            $mail->Body = '<h1>Veuillez cliquer sur le button pour valider votre compte:</h1>'
                . "<br>"
                . '<ul><a href="http://localhost:8888/Controller/signup.inc.php?code=' . $code . '&username=' . $username . '">'
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

$sendMl = new sendEmail();

//app pwd: qliczfgrslfxmvof
//Client ID: 161896444645-18duvb47sdjdct0674k8obcsl3fbic7t.apps.googleusercontent.com
//Client secret: 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

?>