<?php

// Llamando a los campos 
$correo = $_POST['correo'];

// Datos para el correo
$destinatario = "comercial@appsus.co";
$asunto = "Mensaje envio desde la pagina principal de APPSUS.CO";

$carta = "De:Posible cliente ¡URGENTE!\n";
$carta .= "Correo: $correo\n";
$carta .= "Mensaje: Quisiera saber mas sobre mi alcaldia, por favor contactarse conmigo.";

// Enviando Mensaje

mail($destinatario, $asunto, $carta);
header('Location:index.html');

?>