<?php
include("admin_panel/external_pages/config.php");

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';


/*$servername = "localhost";
$username = "logikngf_angelsu";
$password = "[VFNu+9S}-~}";
$dbname = "logikngf_myangelsacademy";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
} */



extract($_POST);




if(isset($_POST['action']) && $action == "subscribe_now"){
//    print_r($_POST);
//    echo "<br>";
    $query = mysqli_query($conn,"Insert into newsletter set email = '".$email_address."', country = '".$country."', received_on = '".date('Y-m-d')."'");
    if($query){
    
        try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Username = 'infomyangelsacademy@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'A@home2021'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('infomyangelsacademy@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('myangelsacademy@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = '(News Letter) My Angels Academy';
    $mail->Body = "<h3>Email: $email_address <br>country: $country</h3>";

    $mail->send();
            // echo $e->getMessage();
        
    echo "<script>window.location.href='index.php?response=success';</script>"; 
        
    }catch (Exception $e){
            //echo $e->getMessage();
            echo "<script>window.location.href='index.php?response=error';</script>";
        }
                    //echo $e->getMessage();

        echo "<script>alert('Data Submitted Successfully');window.location.href='index.php';</script>";
    
    }else{
        //echo $e->getMessage();
        echo "<script>alert('Server Error. Please try after sometime!');window.location.href='index.php';</script>";
    }   
}





if(isset($_POST['action']) && $action == "contact_us_now"){
     $query = mysqli_query($conn,"Insert into contact_details set name = '".$name."', email = '".$email."', phone = '".$phone."', message = '".$message."' ");
    if($query){
        

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Username = 'infomyangelsacademy@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'A@home2021'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('infomyangelsacademy@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('myangelsacademy@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = '(Contact Page) My Angels Academy';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone: $phone <br>Message : $message</h3>";

    $mail->send();
      
    echo "<script>window.location.href='contact-us.php?response=success';</script>";  
  }
        catch (Exception $e){
            echo "<script>window.location.href='contact-us.php?response=error';</script>";
        }
        
    }else{
        echo "<script>window.location.href='contact-us.php?response=error2';</script>";
    }  
}



else{
    //echo "Invalid Request";
      echo "<script>alert('Invalid Request');window.location.href='index.php';</script>";
    }
?>




