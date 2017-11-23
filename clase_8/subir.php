<?php

define("RUTA_DESTINO", "./");

if($_FILES['archivo']['error'] == UPLOAD_ERR_OK){

	$date = new Datetime();

	$formatted = $date->format("Y-m-dHis");

	$archivo = md5(RUTA_DESTINO. $formatted .$_FILES['archivo']['name']) . ".jpg";

	if(move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo)){

		echo "Se subio exitosamente";
		
	}else{

		echo "Hubo un error al mover el archivo al destino.";

	}



}else{

	echo "Error al subir el archivo!";
}
