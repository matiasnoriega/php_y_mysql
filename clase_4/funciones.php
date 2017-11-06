<?php

function holaMundo($nombre){
	echo "Hola $nombre!";
}

holaMundo("Matias");

echo "</br>";

function sumar($num1, $num2){

	$suma = $num1 + $num2;
	return $suma;
}

echo sumar(2, 4);

echo "</br>";

function iva($num){

	$iva = $num * 1.21;
	return $iva;
}


echo iva(140012213);

/**
 * Function armarTabla
 * Arma una tabla a partir de un array que se pasa como argumento.
 * @author Matias <matiasnoriega86@gmail.com>
 * @param $data
 * @return Void
*/
function armarTabla($data){

	$tabla = "<table>";

	for ($i=0; $i < count($data); $i++) { 
		
		$tabla .= "<tr><td>" . ($i+1) . "</td><td>" . $data[$i] . "</td></tr>"; 

	}
	$tabla .= "</table>";

	return $tabla;
}

$nombres = array("Matias", "Julieta","Norberto", "Oscar","Mercedes");

echo armarTabla($nombres);