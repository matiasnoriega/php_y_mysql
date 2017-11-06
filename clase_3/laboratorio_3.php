<?php

$alumnos = array(

	array(
		'nombre' => "Juan", 
		'nota' => 5, 
	),
	array(
		'nombre' => "Martin" , 
		'nota' => 7, 
	),
	array(
		'nombre' => "Nicolas" , 
		'nota' => 10, 
	),
	array(
		'nombre' => "Miguel", 
		'nota' => 2, 
	),
	array(
		'nombre' => "Carlos", 
		'nota' => 8, 
	)

);

$tabla = "<table><thead><tr><th>Alumno</th><th>Nota</th</tr></thead><tbody>";

for ($i=0; $i < count($alumnos); $i++) { 

	$tabla .= "<tr><td>" . $alumnos[$i]['nombre'] . "</td><td>" . $alumnos[$i]['nota'] . "</td></tr>";
	
}

$tabla .= "</tbody></table>";

echo $tabla . "</br>";

