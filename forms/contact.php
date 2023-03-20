<?php
echo "respuesta";
exit;

$receiving_email_address = 'flor.rueda@gmail.com';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . ",\r\n";
$message .= "Su email es: " . $email . " \r\n";
$message .= "El asunto es: " . $subject . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el dia: " . date('d/m/Y', time());

$to = $receiving_email_address;
$subject = 'Mail enviado desde pagina web de flor';

mail($to, $subject,  mb_convert_encoding($message, "UTF-8", mb_detect_encoding($message)), $header);

header('Location: index.html');

?>