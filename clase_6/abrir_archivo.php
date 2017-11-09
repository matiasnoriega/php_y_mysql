<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
define("RUTA", __DIR__ . "\\");
define("EOL", PHP_EOL); //PHP_EOL es una constante que hace un END OF LINE dependiendo del SO en el que este


$log = "[" . date("Y-m-d H:i:s", time()) . "]\t on line (" . __LINE__ . ") " . __FILE__ . " " . "Hola Mundo!" . EOL;

$archivo_a_escribir = RUTA . "alumnos.txt";
//var_dump(RUTA);
function escribirArchivo($nombreAchivo, $modo, $mensaje){
	$fp = fopen($nombreAchivo, $modo);

	if(is_resource($fp)){

		fwrite($fp, $mensaje);
		
	}else{

		echo "No se pudo abrir.";
	}
}

$archivo_leer = RUTA . "usuarios.csv";

function leerArchivo($nombreAchivo, $modo){

	$fp = fopen($nombreAchivo, $modo);
	$tabla = "<table><tr><td>Nombre</td><td>Edad</td><td>Pais</td></tr>";

	if(is_resource($fp)){
		while (($line = fgets($fp)) !== false){

			$linea = explode(";", $line);
			$tabla .= "<tr>";
			$tabla .= "<td>". $linea[0] . "</td>";
			$tabla .= "<td>". $linea[1] . "</td>";
			$tabla .= "<td>". $linea[2] . "</td>";
			$tabla .= "</tr>";
		}
	}
	$tabla .= "</table>";

	echo $tabla;
	//return $tabla;

}
//escribirArchivo($archivo, "a+", $log);

escribirArchivo($archivo_a_escribir, "a+", leerArchivo($archivo_leer, "r"));

unlink($archivo);


