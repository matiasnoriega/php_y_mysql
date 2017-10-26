<?php

$nombre = "Matias";
$apellido = "Noriega";

echo "<table style='border : 2px; border-style : solid'>";
echo "<thead><tr><th>#</th><th>Nombre</th><th>Apellido</th></tr></thead>";
echo "<tbody>";

for($i = 0; $i < 3 ; $i++){
	echo "<tr><td>$i</td><td>$nombre</td><td>$apellido</td></tr></tbody>";
}

echo "</tbody>";
echo "</table>";

echo "------------------------------------------";

$table = "<table>";
$table .= "<thead><tr><th>#</th><th>Nombre</th><th>Apellido</th></tr></thead>";
$table .= "<tbody>";
for($i = 1; $i < 10 ; $i++){
	$table .= "<tr><td>$i</td><td>$nombre</td><td>$apellido</td></tr></tbody>";
}	
$table .= "</tbody></table>";

echo $table;

echo "------------------------------------------";

$i = 0;
echo "<table style='border : 2px; border-style : solid'>";
echo "<thead><tr><th>#</th><th>Nombre</th><th>Apellido</th></tr></thead>";
echo "<tbody>";

while($i < 6){
	echo "<tr><td>$i</td><td>$nombre</td><td>$apellido</td></tr></tbody>";
	$i++;
}

echo "</tbody>";
echo "</table>";

echo "------------------------------------------";

$table = "<table>";
$table .= "<thead><tr><th>#</th><th>Nombre</th><th>Apellido</th></tr></thead>";
$table .= "<tbody>";
do{
	$table .= "<tr><td>$i</td><td>$nombre</td><td>$apellido</td></tr></tbody>";
	$i++;
}while ($i <= 20);
$table .= "</tbody></table>";

echo $table;