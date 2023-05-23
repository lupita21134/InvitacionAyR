<?php
require 'assets/lib/PHPMailer/src/Exception.php';
require 'assets/lib/PHPMailer/src/PHPMailer.php';
require 'assets/lib/PHPMailer/src/SMTP.php';


// Recibir los datos del formulario
$name= $_POST['name'];
$asistencia = $_POST['asistencia'];
$comment = $_POST['comment'];

// Configurar el objeto PHPMailer
//$mail = new PHPMailer;
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Port = 587;
$mail->Host = 'smtp.gmail.com';// Coloca el servidor SMTP que utilizarás
//$mail->Port = 587; // Coloca el puerto del servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'mariagzs217@gmail.com'; // Coloca tu dirección de correo electrónico
$mail->Password = 'kimbum721PJM*'; // Coloca tu contraseña de correo electrónico
$mail->SMTPSecure = 'tls';

$mail->setFrom('mariagzs217@gmail.com', 'TLU'); // Coloca tu dirección de correo y tu nombre
$mail->addAddress('lupitaksb721@gmail.com', 'lupita'); // Coloca la dirección de correo del destinatario y su nombre
$mail->Subject = 'Confirmación de Asistencia y Felicitación de Boda'; // Asunto del correo electrónico

// Cuerpo del correo electrónico
$mail->Body = "Estimados novios,\n\n";
$mail->Body .= "Quiero confirmar mi asistencia a su boda.\n";
$mail->Body .= "Nombre: " . $name . "\n";
$mail->Body .= "Asistencia: " . $asistencia . "\n\n";
$mail->Body .= "¡Felicidades por su matrimonio! Les deseo una vida llena de amor y felicidad.\n\n";
$mail->Body .= "Mensaje de Felicitación:\n" . $comment . "\n";

if ($mail->send()) {
    echo "El correo electrónico se envió correctamente.";
} else {
    echo "Hubo un error al enviar el correo electrónico: " . $mail->ErrorInfo;
}
?>
