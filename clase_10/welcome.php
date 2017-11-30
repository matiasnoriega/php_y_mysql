<?php

session_start();

if(isset($_SESSION['login']) && ($_SESSION['login'] == 1 )){

	echo "Bienvenido " . $_SESSION['name'];
	echo "<a href='cerrar_sesion.php'>Cerrar Sesion</a>";

	if(isset($_COOKIE['SESION_PRUEBA'])){

		echo $_COOKIE['SESION_PRUEBA'];

	}

}else{
	header("Location: formulario_login.php");
}

phpinfo();