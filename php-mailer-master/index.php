<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'proyectodh1111@gmail.com';                 // SMTP username
$mail->Password = 'proyecto_dh1234';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('proyectodh1111@gmail.com', 'Mailer');
$mail->addAddress('proyectodh1111@gmail.com', 'Joe User');     // Add a recipient

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);
$mail->Subject = 'Solicitud de usuario para cambiar la contraseña';
$mail->Body    = 'Haz click en el siguiente enlace para reestablecer tu nueva contraseña';

if(!$mail->send()) {
    echo 'No se pudo enviar el mensaje';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Hemos enviado un mensaje para cambiar la contraseña al mail solicitado';
}
