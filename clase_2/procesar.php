
<?php

define("USUARIO", "matiasnoriega@mail.com");
define("PASSWORD", "123456");

$usuario = $_GET['usuario'];
$password = $_GET['password'];

if( ($usuario == USUARIO) and ($password == PASSWORD)){
	echo "Ingreso Exitoso";
} else {
	echo "Usuario o contraseña invalido";
}