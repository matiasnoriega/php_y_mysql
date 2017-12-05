<?php

include_once('config.php');

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;
$usuario = DB_USER;
$password = DB_PASSWORD;

if(isset($_POST['actualizar'])){
	
	//Actualizo registro en DB

	try{

		$titulo = $_POST['titulo'];
		$foto = $_POST['foto'];
		$texto = $_POST['texto'];

		$gbd = new PDO($dsn, $usuario, $password);

		$nota = $gbd->query("UPDATE nota SET 
	    					titulo = '".$_POST['titulo']."', 
	    					foto= '".$_POST['foto']."',
	    					texto= '".$_POST['texto']."' 
	    					WHERE id_nota = ".$id);


		if ($nota->rowCount()) {
	    	echo "Registro actualizado exitosamente";
	    } else {
	    	echo "Error al actualizar el registro.";
	    }


	} catch(PDOException $e){
		echo $e->getMessage();
	}
	unset($_POST);	
}
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
			 "<a href='editar/". $nota['id_nota'] . "'>Editar</a> <a href='borrar.php?id=". $nota['id_nota'] . "'>Borrar</a></td>";

		$tabla .= "</tr>";

	}

	$tabla .= "</tbody></table>";

	echo $tabla;

} catch(PDOException $e){
	//LOG_FILE=>
	echo 'Fallo la conexion: ' . $e->getMessage();

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
</head>
<body>
<a href="agregar">INGRESAR NOTA</a>
</body>
</html>