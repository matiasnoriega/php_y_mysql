<?php

//ini_set(, "America/Argentina/Buenos Aires");

/*Cambia la zona horaria a nivel script*/
date_default_timezone_set("America/Argentina/Buenos_Aires");

//Unix Timestamp. Devuelve los segundos desde la creacion de Unix (1 de Enero de 1970) a la fecha.
echo time();

echo "</br></br>";

$date = date("Y-m-d H:i:s");

var_dump($date);