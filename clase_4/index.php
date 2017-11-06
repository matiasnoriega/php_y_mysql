<?php

//error_reporting(false);

$archivo = $_GET['seccion'] . ".php";

if (file_exists($archivo)) {

	require($archivo);
	require('body.php');
	
}

/*include ('header2.php');
include ('body.php');*/
