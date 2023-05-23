<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    //$email = $_POST["email"];
    $asistencia = $_POST["asistencia"];
    $comment = $_POST["comment"];

    $to = "lupitaksb721@gmail.com";
    $subject = "Confirmación de Asistencia y Felicitación de Boda";
    $message = "Estimados novios,\n\n";
    $message .= "Quiero confirmar mi asistencia a su boda.\n";
    $message .= "Nombre: " . $name . "\n";
   // $message .= "Email: " . $email . "\n";
    $message .= "Asistencia: " . $asistencia . "\n\n";
    $message .= "¡Felicidades por su matrimonio! Les deseo una vida llena de amor y felicidad.\n\n";
    $message .= "Mensaje de Felicitación:\n" . $comment . "\n";

     $headers = "From: "  . "\r\n";
  //  $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "El correo electrónico se envió correctamente.";
    } else {
        echo "Hubo un error al enviar el correo electrónico.";
    }
}
?>
