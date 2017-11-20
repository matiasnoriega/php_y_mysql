<?php

if(!empty($_POST)){

	if(validarNombre($_POST['nombre']) AND validarEmail($_POST['email']) AND validarMensaje($_POST['mensaje'])){

		$asunto = "Consulta de ";
		$destinatario = $_POST['email'];
		$cuerpo = "ComercioIT - Datos de Contacto</br></br>";
		$cuerpo .= "Nombre: " . $_POST['nombre'] . "</br></br>";
		$cuerpo .= "Email: " . $_POST['email'] . "</br></br>";
		$cuerpo .= "Mensaje:</br></br>" . $_POST['mensaje'];

		if(mail($destinatario, $asunto, $cuerpo)){

			header("Location: ./?page=contacto&rta=0x004");

		}else{

			header("Location: ./?page=contacto&rta=0x005");

		}

	}else{

		echo "Error loco.";
		
	}


}else{

	echo "Volver a <a href='./?page=contacto'>Contacto</a>";

}

function validarMensaje($mensaje){

	$mensaje_a_validar = trim($mensaje);

	if(strlen($mensaje_a_validar > 400)){

		header("Location: ./?page=contacto&rta=0x003");

	}else{

		return true;
	}

}

function validarEmail($email){

	$email_a_validar = trim($email);

	if(strpos($email_a_validar, "@") AND strpos($email_a_validar, ".")){

		return true;

	}else{

		header("Location: ./?page=contacto&rta=0x002");

	}

}


function validarNombre($nombre){

	$nombre_a_validar = trim($nombre);

	if(empty($nombre_a_validar) || (strlen($nombre_a_validar) < 3) || is_numeric($nombre_a_validar) || is_numeric($nombre_a_validar[0])){

		header("Location: ./?page=contacto&rta=0x001");

	}else{

		return true;

	}
}