<?php


function validarString($campo, $valor, $longitud_maxima = 10, $longitud_minima = 3){

	if(empty($valor)){

		echo "Debe ingresar el $campo.";

	}elseif ((strlen($valor) > $longitud_maxima) OR (strlen($valor) < $longitud_minima)) {

		echo "La longitud del $campo tiene que ser mayor a " . $longitud_minima . " y no puede ser menor de ". $longitud_maxima . "caracteres.";

	}else{

		return true;
	}

}