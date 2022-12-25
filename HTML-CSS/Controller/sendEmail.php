<?php

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

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
            $mail-> SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nurse.medicobot@gmail.com';
            $mail->Password = 'AdminG5B@';                        

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // for encrypted connection                           

            $mail->Port = 587;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('nurse.medicobot@gmail.com', "Nurse-e"); // sender's email and name

            $mail->addAddress($email, $nomEntier);  // receiver's email and name

            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification';

            $mail->Body    = 'Please click this button to verify your account: <a http://localhost:8888/Controller/signup.inc.php?code='.$code.'&username='.$username.'>Verify</a>' ;

 

            $mail->send();

            echo 'Message has been sent';

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

        }

    }

$sendMl = new sendEmail();

?>