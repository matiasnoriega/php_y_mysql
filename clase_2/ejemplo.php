<?php

$numero_1 = 0;
$numero_2 = "0";

if ($numero_1 == $numero_2){
	print "Son iguales </br>";
} else{
	print "No son iguales </br>";
}
if ($numero_1 === $numero_2){
	print "Son iguales </br>";
} else{
	print "No son iguales </br>";
}


switch ($numero_1) {
	case '0':
		echo "La variable es 0";
		break;
	case '1':
		echo "La variable es 1";
		break;
	case '2':
		echo "La variable es 4";
		break;
	case '3':
		echo "La variable es 3";
		break;
	case '4':
		echo "La variable es 4";
		break;
	default:
		echo "La variable no es ni 0, 1, 2, 3 ni 4.";
		break;
}
