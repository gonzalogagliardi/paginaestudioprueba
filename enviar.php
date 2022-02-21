<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header = "X-Mailer: PHP/" . phpversion() . " \r\n";
$header = "MIME-Version: 1.0 \r\n";
$header =   "Content-Type: text/html; charset=utf-8\r\n";

$message = "Este mensaje fue enviado por " . $name . ",\r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Su telefono es: " . $phone . " \r\n";
$message .= "Mensaje: " . $message . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());

$para = 'gagliardigonzalo@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($message), $header);

header("location:index.html");
?>