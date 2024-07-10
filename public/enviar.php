<?php
//Llamado de campos

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

//Datos para el correo

$destinatario = "lautaroledesma@televisionalternativa.com.ar";
$asunto = "Contacto desde Pagina web";

$carta = "De: $nombre \n";
$carta .= "Apellido: $apellido \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

//Envio de Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje_enviado.html');

?>