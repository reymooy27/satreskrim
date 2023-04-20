<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

session_start();

//These must be at the top of your script, not inside a function

//Load Composer's autoloader
if(isset($_POST['laporan'])){

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'laporanmasyarakatmalaka@gmail.com';                     //SMTP username
      $mail->Password   = 'xzdmweehooadyoik';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 587;     
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('laporanmasyarakatmalaka@gmail.com', "Laporan Masyarakat");
      $mail->addAddress('reymooy27@gmail.com',);     //Add a recipient
    //Optional name
  
      //Content
      $mail->Subject = 'Laporan Masyarakat';
      $mail->Body    = $_POST['laporan'];
  
      $mail->send();
      $_SESSION['email-sent'] = 'Email berhasil terkirim';
      header('Location: ./kontak.php');
      exit;
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}