<?php

<<<<<<< HEAD
<<<<<<< HEAD
ini_set('display_errors', 1);
=======
>>>>>>> 27f66f0 (contact us fini, sys email marche bien)
=======
ini_set('display_errors', 1);
>>>>>>> 1f01c05 (updated: same code as the website)
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
require '../../vendor/autoload.php';
=======
require '../../bin/phpMyAdmin/vendor/autoload.php';
>>>>>>> 27f66f0 (contact us fini, sys email marche bien)
=======
require '../../vendor/autoload.php';
>>>>>>> 1f01c05 (updated: same code as the website)
=======
require '../../bin/phpMyadmin/vendor/autoload.php';
>>>>>>> 3836c0f (New updates: maps and user modify)

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

<<<<<<< HEAD
<<<<<<< HEAD
            $mail->isHTML(true);

            $mail->CharSet = 'utf-8';
=======
            $mail->isHTML(true); 
>>>>>>> 27f66f0 (contact us fini, sys email marche bien)
=======
            $mail->isHTML(true);

            $mail->CharSet = 'utf-8';
>>>>>>> 3836c0f (New updates: maps and user modify)

            $mail->setFrom('nurse.medicobot@gmail.com', "Nurse-e"); // sender's email and name

            $mail->addAddress($email, $nom);  // receiver's email and name

            $mail->AddCC('nurse.medicobot@gmail.com');

<<<<<<< HEAD
<<<<<<< HEAD
            $headers .= 'Content-type: text/html;' . "\r\n";
=======
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
>>>>>>> 27f66f0 (contact us fini, sys email marche bien)
=======
            $headers .= 'Content-type: text/html;' . "\r\n";
>>>>>>> 3836c0f (New updates: maps and user modify)

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