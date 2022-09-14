<?php
$nombre = $_POST['nombre'];
$edificio = $_POST['edificio'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue envíado por: " . $nombre . ",\r\n";
$mensaje .= "El nombre del edificio es: " . $edificio . "\r\n";
$mensaje .= "Su email es: " . $mail . "\r\n";
$mensaje .= "Su teléfono es: " . $telefono . "\r\n";
$mensaje .= "El asunto es: " . $asunto . "\r\n";
$mensaje .= "Mensaje de consulta: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Envíado el " . date('d/m/Y', time());

$para = 'info@castano.com.uy';
$asunto = 'Consulta desde mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('location:exito.html');

?>