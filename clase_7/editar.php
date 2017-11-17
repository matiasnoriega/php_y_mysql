<?php

include_once('config.php');

$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;
$usuario = DB_USER;
$password = DB_PASSWORD;

$id = $_GET['id'];


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
	$notas_1 = $gbd->query("SELECT * FROM nota WHERE id_nota = " . $id);

	$notas_1->bindValue(":id_nota", $id);

	$notas_1->execute();

	$info = $notas_1->fetchAll(PDO::FETCH_ASSOC);

	$tabla = "<table><thead><tr><th>Id. Nota</th><th>Titulo</th><th>Foto</th><th>Texto</th><th>Fecha</th><th>Accion</th></tr><tbody>";

	foreach ($info as $nota_1) {
		
		$tabla .= "<tr>";

		$tabla .= "<td>" . $nota_1['id_nota'] . "</td><td>" .
			 $nota_1['titulo'] . "</td><td>" .
			 $nota_1['foto'] . "</td><td>" .
			 $nota_1['texto'] . "</td><td>" .
			 $nota_1['fecha_alta'] . "</td><td>" . 
			 "<a href='editar.php?id=". $nota_1['id_nota'] . "'>Editar</a> <a href='borrar.php?id=". $nota_1['id_nota'] . "'>Borrar</a></td>";

		$tabla .= "</tr>";

	}

	$tabla .= "</tbody></table>";

	echo $tabla;


} catch(PDOException $e){

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>
	</br></br></br>
	<form action="" method="POST">
		<label>Titulo
				<input type="text" name="titulo" value="<?= $info[0]['titulo'] ?>" />
		</label></br></br>
		<label>Foto
				<input type="text" name="foto" value="<?= $info[0]['foto'] ?>" />
		</label></br></br>
		<label>Texto
				<input type="text" name="texto" value="<?= $info[0]['texto'] ?>"/>
		</label></br></br>
		<label>Fecha
				<input type="text" name="fecha" value="<?= $info[0]['fecha_alta'] ?>" />
		</label></br></br>
		<input type="submit" name="actualizar">

	</form>
</body>
</html>