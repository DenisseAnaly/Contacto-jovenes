<!DOCTYPE html>
<html lang="es">
<head>
       <title>CONTACTO</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="estilocontac.css">
</head>

<body>
<form method="post">
       <h2>Contacto</h2>
       <input type="text" name="Nombre" placeholder="Nombre" require="">
       <input type="text" name="Correo" placeholder="Correo" require="">
       <input type="text" name="Telefono" placeholder="Telefono" require="">
       <textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
       <input type="button" value="Enviar" id="boton" name="Enviar">
</form>
<?php
include("correo.php");
?>
</body>
</html>