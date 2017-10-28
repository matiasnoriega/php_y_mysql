<?php

$filas = 12	;
$columnas = 15;

$tabla = "<table>";

for($i = 0; $i < $filas; $i++){

	$tabla .= "<tr>";

	for($j = 0; $j < $columnas ; $j++){

		if(($i % 2) == 0){
		
			$tabla .= "<td style='border: 1px solid; height: 30px; width: 30px; background-color: black'></td>";
		
		}else{

			$tabla .= "<td style='border: 1px solid; height: 30px; width: 30px; background-color: orange'></td>";

		}
	}

	$tabla .= "</tr>";

}

$tabla .= "</table>";

echo $tabla;

$tabla2 = "<table>";

$i = 0;

while($i < $filas){

	$tabla2 .= "<tr>";
	$j = 0;

	while ($j < $columnas) {

		if(($j % 2) == 0){

			$tabla2 .= "<td style='border: 1px solid; height: 30px; width: 30px; background-color: pink'></td>";

		}else{
			
			$tabla2 .= "<td style='border: 1px solid; height: 30px; width: 30px; background-color: green'></td>";
		}	
		$j++;

	}

	$i++;
}

$tabla2 .= "</table>";

echo $tabla2;
$a = 3;
$filas = $columnas = --$a;

echo $filas;