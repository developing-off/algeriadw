<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$subject="Password Changed at StreamItDZ.ga";


    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer(true);
    try {
    include_once('PHPMailer/phpmailer_head.php');
    $mail->Body  =('
   ');
    include_once('PHPMailer/phpmailer_footer.php');
 echo "<script>window.location.assign('../auth/login?stat=chpass')</script>";
} catch (Exception $e) {
  $stat= "Message could not be sent. Mailer Error: ";
}

?>
