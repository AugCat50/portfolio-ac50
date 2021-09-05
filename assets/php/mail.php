<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

 /**Отпровка почты
 * @param string  $to
 * @param string  $title
 * @param string  $message_html
 * @param string  $message_nohtml
 */
function send_mail($to, $title, $fromMail, $message_html, $message_nohtml){
    
    $mail = new PHPMailer(true);
    try{
        $mail->CharSet = 'UTF-8';
        //Server settings
        //Подробный лог на страницу
        //$mail->SMTPDebug  = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = "smtp.gmail.com";
        $mail->SMTPAuth   = true;
        $mail->Username   = "paapperlapapp@gmail.com";
        $mail->Password   = "mXHst684arazFnY";
        //    $mail->SMTPSecure = "ssl";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //    $mail->Port       = "465";
        $mail->Port       = 587;
        
        //Recipients
        $mail->setFrom($fromMail, "AugCat50.com");
        $mail->addAddress($to);
        //$mail->addAddress("wilcher@mail.ru");
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = $title;
        //$mail->Subject = "Тема письма";
        $mail->Body    = $message_html;
        $mail->AltBody = $message_nohtml;
        
        $mail->send();
        $data = 'Successful';
    }catch (Exception $e){
        $data = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
    return $data;
}
