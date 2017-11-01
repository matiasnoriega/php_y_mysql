<?php

$meses = array('Enero',
           	"Febrero",
           	"Marzo",
           	"Abril",
           	"Mayo",
           	"Junio",
           	"Julio",
           	"Agosto",
           	"Septiembre",
           	"Octubre",
           	"Noviembre",
           	"Diciembre");


for ($i=0; $i < count($meses); $i++) {

   echo $meses[$i] . "</br>";

}
echo "<hr>";
$i = 0;
while($i < count($meses)){

	echo $meses[$i] . "</br>";
	$i++;
}
echo "<hr>";

$nombres = array(
              	"Barbara",
              	"Matias",
              	"Andres",
              	"Stephanie",
              	"Hernan",
              	"Guido");
for ($i=0; $i < count($nombres); $i++) {
	echo $nombres[$i] . "</br>";
}
echo "<hr>";

$nombres[] = "Federico";

//USO DE LA FUNCION ARRAY_PUSH, PONE UN ELEMENTO EN EL ULTIMO LUGAR DEL ARRAY.
array_push($nombres, "Jorgelin", "Capitan del Espacio");

//USO DE LA FUNCION ARRAY_UNSHIFT, PONE UN ELEMENTO EN EL PRIMER LUGAR DEL ARRAY.
array_unshift($nombres, "Zatana", "Capitan Marvel");


for ($i=0; $i < count($nombres); $i++) {
  echo $nombres[$i] . "</br>";
}
echo "<hr>";

//FORMAS DE MOSTRAR LO QUE CONTIENE UNA VARIABLE. VAR_DUMP(); MUESTRA EN DETALLE CON EL TIPO DE DATO, MIENTRAS QUE PRINT_R() SOLAMENTE EL CONTENIDO.

echo "<pre>";
var_dump($nombres);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r($nombres);
echo "</pre>";
echo "<hr>";

$persona = array(
              	'altura' => 1.67 ,
              	'peso' => 73,
              	'nombre' => "Daniel",
              	'apellido' => "Rinaldi",
              	'edad' => 30);

foreach ($persona as $key => $value) {

	echo "$key = $value </br>";
}

echo "Altura: " . $persona["altura"] . "mts</br>";

$persona = array(
            	array(
                	'altura' => 1.67 ,
                	'peso' => 73,
                	'nombre' => "Daniel",
                	'apellido' => "Rinaldi",
                	'edad' => 30),
            	array(
                	'altura' => 1.40 ,
                	'peso' => 91,
                	'nombre' => "Juan",
                	'apellido' => "Perez",
                	'edad' => 145)
              	);
$pedro = array(
	'altura' => 1.84 ,
	'peso' => 150,
	'nombre' => "Pedro",
	'apellido' => "Picapiedra",
	'edad' => 68);

array_push($persona, $pedro);

echo $persona[1]['peso'];
echo "<hr>";


$tabla = "<table>";

$tabla .= "<thead><tr><th>Nombre</th><th>Apellido</th><th>Altura</th></tr></thead>";

$tabla .= "<tbody>";

for ($i=0; $i < count($persona); $i++) {

	$tabla .= "<tr><td>" . $persona[$i]["nombre"] . "</td><td>" . $persona[$i]["apellido"] . "</td><td>" . $persona[$i]["peso"];
}
$tabla .= "</tbody></table>";

echo $tabla;
echo "<hr>";
echo "<pre>";
VAR_DUMP($tabla);
echo "</pre>";
echo "<hr>";


$fecha = "2017-10-30";
//LA FUNCION EXPLODE SEPARA EL STRING EN UN ARRAY, USANDO COMO "SEPARADOR" LO QUE YO LE INDIQUE, EJ: -, /, ETC.
$date = explode("-", $fecha);
echo "<pre>";

VAR_DUMP($date);
//LA FUNCION IMPLODE ME DEVUELVE UN STRING "PEGANDO" EL ARRAY CON EL CARACTER QUE YO LEDIGA, EJ: -, /, ETC.
$implode = implode("-", $date);

VAR_DUMP($implode);
echo "</pre>";

