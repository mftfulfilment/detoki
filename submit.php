<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';



extract($_POST);


if(isset($_POST['action']) && $action == "contact_us_now"){

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Username = 'echodigitesting@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Aman@2021'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('echodigitesting@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('254dala@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = '(Enquiry Form) Product Enquiry';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone: $phone <br>Message : $message</h3>";

    $mail->send();
      
    echo "<script>window.location.href='index.php?response=success';</script>";  
  }
        catch (Exception $e){
            echo "<script>window.location.href='index.php?response=error';</script>";
        }
 
}



else{
    //echo "Invalid Request";
      echo "<script>alert('Invalid Request');window.location.href='index.php';</script>";
    }
?>




