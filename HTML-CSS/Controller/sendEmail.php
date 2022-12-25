<?php
<<<<<<< HEAD
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';
=======

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;
>>>>>>> 6d2a226 (trying something new: acc verif by email.)

    class sendEmail

    {
<<<<<<< HEAD
        function send($code, $username, $nom, $prenom, $email)
=======
        function send($code)
>>>>>>> 6d2a226 (trying something new: acc verif by email.)
        {
        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

<<<<<<< HEAD
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

            $mail->CharSet = 'utf-8';

            $mail->setFrom('nurse.medicobot@gmail.com', "Nurse-e"); // sender's email and name

            $mail->addAddress($email, $nomEntier);  // receiver's email and name

            $headers .= 'Content-type: text/html;' . "\r\n"; 

            $mail->Subject = 'Verification du compte';

            $mail->Body = '<h1>Veuillez cliquer sur le button pour valider votre compte:</h1>'
                . "<br>"
                . '<ul><a href="http://nurse-medicobot.wstr.fr/controller/signup.inc.php?code=' . $code . '&username=' . $username . '">'
                . '<button style="padding: 5px 15px; margin-left: 20px; margin-top: 18px; font-size: 17px; color: white; border:1px solid white; background-color: #43B1F8;cursor:pointer;">'
                . 'Validation</button></a></ul>';
=======
        $mail = new PHPMailer(true);                              

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '256dcb280beb42';
            $mail->Password = 'b2f1796c3be83e';                        

            $mail->SMTPSecure = 'tls';  // for encrypted connection                           

            $mail->Port = 587;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('sender@gmail.com', "Sender"); // sender's email and name

            $mail->addAddress('receiver@gmail.com', "Receiver");  // receiver's email and name

            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification';

            $mail->Body    = 'Please click this button to verify your account: <a http://localhost:8888/Controller/signup.inc.php?code='.$code.'>Verify</a>' ;
>>>>>>> 6d2a226 (trying something new: acc verif by email.)

 

            $mail->send();

            echo 'Message has been sent';

<<<<<<< HEAD
            $mail->smtpClose();

=======
>>>>>>> 6d2a226 (trying something new: acc verif by email.)
        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

        }

    }

$sendMl = new sendEmail();

<<<<<<< HEAD
//app pwd: qliczfgrslfxmvof
//Client ID: 161896444645-18duvb47sdjdct0674k8obcsl3fbic7t.apps.googleusercontent.com
//Client secret: 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

=======
>>>>>>> 6d2a226 (trying something new: acc verif by email.)
?>