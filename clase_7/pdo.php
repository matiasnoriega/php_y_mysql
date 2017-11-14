<?php

include_once('config.php');

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;
$usuario = DB_USER;
$password = DB_PASSWORD;

try{

	$gbd = new PDO($dsn, $usuario, $password);
	$notas = $gbd->query("SELECT * FROM nota");

	$tabla = "<table><thead><tr><th>Id. Nota</th><th>Titulo</th><th>Foto</th><th>Texto</th><th>Fecha</th><th>Accion</th></tr><tbody>";

	foreach ($notas as $nota) {
		
		$tabla .= "<tr>";

		$tabla .= "<td>" . $nota['id_nota'] . "</td><td>" .
			 $nota['titulo'] . "</td><td>" .
			 $nota['foto'] . "</td><td>" .
			 $nota['texto'] . "</td><td>" .
			 $nota['fecha_alta'] . "</td><td>" . 
			 "<a href='editar.php?id=". $nota['id_nota'] . "'>Editar</a> <a href='editar.php?id=". $nota['id_nota'] . "'>Borrar</a></td>";

		$tabla .= "</tr>";

	}

	$tabla .= "</tbody></table>";

	echo $tabla;

} catch(PDOException $e){
	//LOG_FILE=>
	echo 'Fallo la conexion: ' . $e->getMessage();

}