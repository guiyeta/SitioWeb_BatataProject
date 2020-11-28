<?php
error_reporting(0);
$nombre = $_POST['name'];
$mail= $_POST['email'];
$mensaje = $_POST['message'];
$asunto=$_POST['subject'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Asunto: " . $_POST['subject'] . " \r\n";
$mensaje .="Mensaje: ".$_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'guillichm@gmail.com';

mail($para, utf8_decode($mensaje), $header);

header("Location:index.html");

?>