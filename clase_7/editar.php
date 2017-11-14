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

		$notas = $gbd->prepare("UPDATE nota SET
								titulo = ?,
								foto = ?,
								texto = ?,
								WHERE id_nota = :id_nota");

		$notas->bindValue(':titulo', $titulo);
		$notas->bindValue(':foto', $foto);
		$notas->bindValue(':texto', $texto);
		$notas->bindValue(':id_nota', $id);

		$notas->execute();	

		$info = $notas->fetchAll(PDO::FETCH_ASSOC);

		if($notas->rowCount()){

			echo "Registro actualizado exitosamente!";

		}else{

			echo "Hubo un error!";

		}

		var_dump($info);


	} catch(PDOException $e){
		echo $e->getMessage();
	}
	unset($_POST);	
}
try{

	$gbd = new PDO($dsn, $usuario, $password);
	$notas = $gbd->prepare("SELECT id_nota, titulo, foto, texto, fecha_alta FROM nota WHERE id_nota = :id_nota");

	$notas->bindValue(":id_nota", $id);

	$notas->execute();	

	$info = $notas->fetchAll(PDO::FETCH_ASSOC);


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