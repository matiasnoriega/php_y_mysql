<?php

include_once('config.php');

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
$usuario = DB_USER;
$contrasena = DB_PASS;

try {

    $gbd = new PDO($dsn, $usuario, $contrasena);
    $notas = $gbd->query("SELECT id_nota, titulo, foto, texto, fecha_alta FROM nota");

    echo "<a href='crear.php'>Crear </a><br/><br/>";

    $table = "<table>";
    $table .= "<tr>";
	$table .= "<th>Titulo</th><th>Foto</th><th>Texto</th><th>Fecha</th><th>Accion</th>";
    $table .= "</tr>";

    foreach ($notas as $nota) {

    	$table .= "<tr>";
    	$table .= "<td>".$nota['titulo']."</td>";
    	$table .= "<td>".$nota['foto']."</td>";
    	$table .= "<td>".$nota['texto']."</td>";
    	$table .= "<td>".$nota['fecha_alta']."</td>";
    	$table .= "<td>
    				<a href='editar.php?id=".$nota['id_nota']."'>Editar</a>
    				<a href='borrar.php?id=".$nota['id_nota']."'>Borrar</a>
    				</td>";
    }

    $table .= "</table>";

    echo $table;

} catch (Exception $e) {
    //LOG_FILE => 
    //echo 'Falló la conexión: ' . $e->getMessage();
}