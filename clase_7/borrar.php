<?php

include_once('config.php');

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
$usuario = DB_USER;
$password = DB_PASSWORD;

$id = $_GET['id'];

if(isset($_POST['borrar'])){

	$gbd = new PDO($dsn, $usuario, $password);
	$notas_1 = $gbd->query("DELETE FROM nota WHERE id_nota = " . $id);

	if($notas_1->execute()){

		echo "<h3>Se borro exitosamente!</h3>";
		echo "<a href='pdo.php'>Volver</a>";
	}


}
try{

	$gbd = new PDO($dsn, $usuario, $password);
	$notas_1 = $gbd->query("SELECT * FROM nota WHERE id_nota = " . $id);

	$notas_1->bindValue(":id_nota", $id);

	$notas_1->execute();

	$info = $notas_1->fetchAll(PDO::FETCH_ASSOC);

	$tabla = "<table><thead><tr><th>Id. Nota</th><th>Titulo</th><th>Foto</th><th>Texto</th><th>Fecha</th></tr><tbody>";

	foreach ($info as $nota_1) {
		
		$tabla .= "<tr>";

		$tabla .= "<td>" . $nota_1['id_nota'] . "</td><td>" .
			 $nota_1['titulo'] . "</td><td>" .
			 $nota_1['foto'] . "</td><td>" .
			 $nota_1['texto'] . "</td><td>" .
			 $nota_1['fecha_alta'] . "</td>";

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
	<title>Borrar Nota</title>
</head>
<body>
	
	<h2>"Estas seguro de borrar la entrada?"</h2>
	<form action="" method="POST">
	<input type="submit" name="borrar" value="Borrar"/>
	<a href="pdo.php" target="blank">No</a>
	</form>
</body>
</html>