<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nombre = htmlspecialchars($_POST['nombre']);
$correo = htmlspecialchars($_POST['correo']);
$mensaje = htmlspecialchars($_POST['mensaje']);


$registro = date('Y-m-d H:i:s') . " | $nombre | $correo | $mensaje" . PHP_EOL;


file_put_contents('mensajes.txt', $registro, FILE_APPEND);


echo '<h2>Mensaje enviado correctamente</h2>';
echo '<a href="index.php">Volver</a>';
}

?>