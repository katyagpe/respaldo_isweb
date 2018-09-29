<?php

$nombre = $_POST["nombre"];

$telefono = $_POST["telefono"];

$asunto = $_POST["asunto"];

$correo = $_POST["correo"];

$paquete = $_POST["paquete"];

$mensaje = $_POST["mensaje"];


$para = "salas-rodriguez@hotmail.com";
$otro = "Nuevo mensaje de $nombre";


$mensaje_dos = "

Nombre del remitente: ".$nombre."
Teléfono: ".$telefono."
Correo: ".$correo."
Paquete: ".$paquete."
Mensaje: ".$mensaje."

";

mail($para, $otro, utf8_decode($mensaje_dos));
//echo "<p><h2>Hemos recibido tu mensaje correctamente, pronto te contaremos, gracias.</h2></p>";
header("Location: contacto.php");  
?>