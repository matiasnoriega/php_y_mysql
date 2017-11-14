<?php

include_once('config.php');

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
$usuario = DB_USER;
$contrasena = DB_PASS;

if (isset($_POST['crear'])) {
	//Creo registro en DB
	try {
	    $gbd = new PDO($dsn, $usuario, $contrasena);

	    //Validacion de info 

	    $nota = $gbd->query("INSERT INTO nota 
	    					(titulo, foto, texto, fecha_alta) 
	    					VALUES ( '".$_POST['titulo']."', 
	    						'".$_POST['foto']."',
	    						'".$_POST['texto']."', 
	    						'".$_POST['fecha']."')");

	    if ($nota->rowCount()) {
	    	echo "Registro creado exitosamente";
	    } else {
	    	echo "Error al crear el registro.";
	    }

	} catch (Exception $e) {

	}

	unset($_POST);
}

?>
<html>
<head>
	<title>Editar Nota</title>
</head>
	<body>
		<form action="" method="POST">
			<label>Titulo
				<input type="text" name="titulo" placeholder="Ingrese el titulo" />
			</label>
			<br/><br/>
			<label>Foto
				<input type="text" name="foto" />
			</label>
			<br/><br/>
			<label>Texto
				<input type="text" name="texto" />
			</label>
			<br/><br/>
			<label>Fecha
				<input type="text" name="fecha" />
			</label>
			<br/><br/>
			<input type="submit" name="crear" value="Crear">
		</form>
	</body>
</html>