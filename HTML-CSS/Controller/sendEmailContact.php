<?php

ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';

    class sendEmailContact

    {
        function send($nom, $email, $sujet, $body)
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

            $mail->setFrom('nurse.medicobot@gmail.com', "Nurse-e"); // sender's email and name

            $mail->addAddress($email, $nom);  // receiver's email and name

            $mail->AddCC('nurse.medicobot@gmail.com');

            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $mail->Subject = 'Sujet Medicobot: ' . $sujet;

            $mail->Body = '<h1>Voici votre demande:</h1><br>'
                . '<h3>' . $body . '</h3><br>'
                . '<h2> Nous allons vous répondre dans les plus brefs delais, veuillez considerer entre 24h et 48h pour obtenir votre réponse</h2>';

 

            $mail->send();

            echo 'Message has been sent';

            $mail->smtpClose();

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

        }

    }

$sendMlContact = new sendEmailContact();

//app pwd: qliczfgrslfxmvof
//Client ID: 161896444645-18duvb47sdjdct0674k8obcsl3fbic7t.apps.googleusercontent.com
//Client secret: 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

?>