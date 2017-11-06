<?php

require_once('funciones.php');

define("LARGO_NOMBRE", 20);
define("CORTO_NOMBRE", 3);

if(isset($_GET['enviar'])) {

	$enviar = $_GET['enviar'];
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];

	if(validarString("Nombre", $nombre, LARGO_NOMBRE, CORTO_NOMBRE) AND validarString("Apellido", $apellido, LARGO_NOMBRE, CORTO_NOMBRE)){
		echo "Bienvenido $nombre $apellido";
	}
	
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
		<input type="text" name="nombre" placeholder="Ingrea tu nombre!" required="true"></input>
		<input type="text" name="apellido" placeholder="Ingrea tu apellido!" required="true"></input>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>