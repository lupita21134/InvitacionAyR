<?php
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      //  
$mail->Host = "mail.example.com;mail2.example.com";  // Especificar servidor principal y de copia.
$mail->SMTPAuth = true;     // Activar la autenticación SMTP
$mail->Username = "jswan";  // SMTP usuario
$mail->Password = "secret"; // SMTP contraseña

$mail->From = "from@example.com";
$mail->FromName = "Mailer";
$mail->AddAddress("josh@example.net", "Carlos Flores");
$mail->AddAddress("ellen@example.com");                  // name is optional
$mail->AddReplyTo("info@example.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "El mensaje ha sido enviado";
?>