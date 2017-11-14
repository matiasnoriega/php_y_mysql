<?php

include_once('config.php');

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
$usuario = DB_USER;
$contrasena = DB_PASS;

$id = $_GET['id'];

if (isset($_POST['actualizar'])) {
	//Actualizo registro en DB
	try {
	    $gbd = new PDO($dsn, $usuario, $contrasena);

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

	} catch (Exception $e) {

	}

	unset($_POST);
}

try {

    $gbd = new PDO($dsn, $usuario, $contrasena);

    $nota = $gbd->prepare("SELECT id_nota, titulo, foto, texto, fecha_alta 
    					  FROM nota
    					  WHERE id_nota = :id_nota");
    $nota->bindValue(':id_nota', $id);
    $nota->execute();

    $info = $nota->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {

}

?>
<html>
<head>
	<title>Editar Nota</title>
</head>
	<body>
		<form action="" method="POST">
			<label>Titulo
				<input type="text" name="titulo" value="<?= $info[0]['titulo'] ?>" />
			</label>
			<br/><br/>
			<label>Foto
				<input type="text" name="foto" value="<?= $info[0]['foto'] ?>" />
			</label>
			<br/><br/>
			<label>Texto
				<input type="text" name="texto" value="<?= $info[0]['texto'] ?>" />
			</label>
			<br/><br/>
			<label>Fecha
				<input type="text" name="fecha" value="<?= $info[0]['fecha_alta'] ?>" />
			</label>
			<br/><br/>
			<input type="hidden" name="idNota" value="<?= $id ?>" />
			<input type="submit" name="actualizar" value="Actualizar">
		</form>
	</body>
</html>