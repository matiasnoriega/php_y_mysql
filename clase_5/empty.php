<?php

require_once('funciones.php');

define("LARGO_NOMBRE", 20);
define("CORTO_NOMBRE", 3);

if(isset($_GET['enviar'])) {

	$enviar = $_GET['enviar'];
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];

	validarString("Nombre", $nombre, LARGO_NOMBRE, CORTO_NOMBRE);
	validarString("Apellido", $apellido, LARGO_NOMBRE, CORTO_NOMBRE);
}

/* Al finalizar destruir todo lo recibido en la peticion porque no se va a necesitar mas y previene problemas de re-carga de datos. */
unset($_GET);
//$_GET = null;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="">
		<label>Nombre: 
		<input type="text" name="nombre" placeholder="Ingrea tu nombre!" required="true">
		</label>
		<label>Apellido: 
		<input type="text" name="apellido" placeholder="Ingrea tu apellido!" required="true">
		</label>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>