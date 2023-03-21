<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'coquette.tailoring@gmail.com';
        $mail->Password = 'ozindwealobqoffw';
        $mail->SMTPSecure = 'tls';
        $mail->Port = '587';

        $mail->setFrom('coquette.tailoring@gmail.com');
        $mail->addAddress('coquette.tailoring@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message received from contact form:' . $name;
        $mail->Body = "Name: $name <br> Email: $email <br> Message: $message";

        $mail->send();
        $alert = "<div class='alert-success'><span>Message sent! Thank you for contacting me.</span></div>";
    } catch (Exception $e){
        $alert = "<div class='alert-error'><span>".$e->getMessage()."</span></div>";
    }
}

?>