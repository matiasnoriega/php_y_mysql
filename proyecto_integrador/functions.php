<?php

function cargarPagina($pagina){

	include($pagina . ".php");

}

function mostrarMensaje($respuesta){

	switch ($respuesta) {
		case '0x001':
			echo "<p class='rta'>El nombre ingresado no es valido</p>";
			break;
		case '0x002':
			echo "<p class='rta'>El E-mail ingresado no es valido</p>";
			break;
		case '0x003':
			echo "<p class='rta'>El mensaje ingresado no es valido</p>";
			break;
		case '0x004':
			echo "<p class='rta'>Consulta enviada!</p>";
			break;
		case '0x005':
			echo "<p class='rta'>Consulta no enviada!</p>";
			break;
		default:
			# code...
			break;
	}

}