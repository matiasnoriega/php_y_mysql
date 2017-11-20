<?php

function cargarPagina($pagina){

	include($pagina . ".php");

}

function mostrarMensaje($respuesta){

	switch ($respuesta) {
		case '0x001':
			echo "<p class='rta rta-0x001'>El nombre ingresado no es valido</p>";
			break;
		case '0x002':
			echo "<p class='rta rta-0x002'>El E-mail ingresado no es valido</p>";
			break;
		case '0x003':
			echo "<p class='rta rta-0x003'>El mensaje ingresado no es valido</p>";
			break;
		case '0x004':
			echo "<p class='rta rta-0x004'>Consulta enviada!</p>";
			break;
		case '0x005':
			echo "<p class='rta rta-0x005'>Consulta no enviada!</p>";
			break;
		default:
			# code...
			break;
	}

}