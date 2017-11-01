<?php

$nombres  = array("Juan", "Martin", "Nicolas", "Miguel", "Carlos");

//sort($nombres);

for ($i=0; $i < count($nombres) ; $i++) { 
	
	$temporal = "";

	for ($j=0; $j < count($nombres); $j++) { 
		
		if($nombres[$i] < $nombres[$j]){
			$temporal = $nombres[$j];
			$nombres[$j] = $nombres[$i];
			$nombres[$i] = $temporal;
		}

	}

}

$tabla = "<table><thead><tr><th>Indice</th><th>Nombre</th</tr></thead><tbody>";

for ($i=0; $i < count($nombres); $i++) { 

	$tabla .= "<tr><td>" . ($i+1) . "</td><td>" . $nombres[$i] . "</td></tr>";
	
}

$tabla .= "</tbody></table>";

echo $tabla;


$uno = "Matias";
$dos = "Julieta";

