
<?php

include("admin_panel/external_pages/config.php");

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST["action"]) == "subscribe_now") {
    $email = $_POST['email'];
    $country = $_POST['country'];
    $captcha_error = $_POST['g-recaptcha-response'];

    if ($captcha_error == '') {
        echo "<script>window.location.href='index.php?response=validation';</script>";
        exit;
    } else {
        $secret_key = '6Lf39UAaAAAAAFVFj6vnEL_Nlkb8SO5g2YiGk-XV';
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
        $response_data = json_decode($response);

        if ($response_data->success != "") {
            $query = mysqli_query($conn, "Insert into newsletter set email = '".$email."', country = '".$country."', received_on = '".date('Y-m-d')."'");
            if ($query) {
                try {
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
                    $mail->Body = "<h3>email: $email <br>country: $country </h3>";

                    $mail->send();
                    echo "<script>window.location.href='index.php?response=success';</script>";
                } catch (Exception $e) {
                    echo "<script>window.location.href='index.php?response=error';</script>";
                }
            }
            echo "<script>window.location.href='index.php?response=success';</script>";
        } else {
            echo "<script>window.location.href='index.php?response=error';</script>";
        }
    }
}
?>
