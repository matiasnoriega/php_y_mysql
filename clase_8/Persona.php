<?php

class Persona{

	private $nombre;
	private $apellido;

	public function __construct($nombre,$apellido){

		echo "Soy un Constructor, me llamo $nombre $apellido";

	}

	public function holaMundo(){

		echo "</br></br>Hola Mundo!";

	}

}
try{

	$persona = new Persona("Matias","Noriega");

	$persona->holaMundo();

}catch(Exception $e){

	echo $e->getMessage();
}