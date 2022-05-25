<?php 
$mail->isSMTP();                                            // Set mailer to use SMTP
$mail->Host       = 'smtp-algeriadw.alwaysdata.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'no-reply@algeriadw.studio';                     // SMTP username
$mail->Password   = 'MOLImoli1';                               // SMTP password
$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
$mail->Port       = 587;  
    //Recipients
$mail->setFrom('no-reply@algeriadw.studio', 'AlgeriaDW Team');
$mail->addAddress("$email"); 
$mail->Subject = $subject;
$mail->AltBody = '';                                  // TCP port to connect to
?>