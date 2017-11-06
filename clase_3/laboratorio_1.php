<?php

$arrayMeses = array(
	array(
		'mes' => "ENE",
		'facturacion' => 500	
	),
	array(
		'mes' => "FEB",
		'facturacion' => 230	
	),
	array(
		'mes' => "MAR",
		'facturacion' => 134	
	),
	array(
		'mes' => "ABR",
		'facturacion' => 425	
	),
	array(
		'mes' => "MAY",
		'facturacion' => 815	
	),
	array(
		'mes' => "JUN",
		'facturacion' => 632	
	),
	array(
		'mes' => "JUL",
		'facturacion' => 54	
	),
	array(
		'mes' => "AGO",
		'facturacion' => 105	
	),
	array(
		'mes' => "SEP",
		'facturacion' => 123	
	),
	array(
		'mes' => "OCT",
		'facturacion' => 478	
	),
	array(
		'mes' => "NOV",
		'facturacion' => 412	
	),
	array(
		'mes' => "DIC",
		'facturacion' => 953	
	)
);


$minimo = $arrayMeses[0]['facturacion'];

for ($i=0; $i < count($arrayMeses); $i++) { 
	
	if($arrayMeses[$i]['facturacion'] < $minimo){

		$minimo = $arrayMeses[$i]['facturacion'];

	}

}


$maximo = $arrayMeses[0]['facturacion'];

for ($i=0; $i < count($arrayMeses); $i++) { 
	
	if($arrayMeses[$i]['facturacion'] > $maximo){

		$maximo = $arrayMeses[$i]['facturacion'];

	}

}


$sumatoria = 0;

for ($i=0; $i < count($arrayMeses); $i++) { 
	
	$sumatoria += $arrayMeses[$i]['facturacion'];

}

$meses = "<table><tr>";
$facturaciones = "<tr>";

for ($i=0; $i < count($arrayMeses); $i++) { 
	
	$meses .= "<td>" . $arrayMeses[$i]['mes'] . "</td>";
	$facturaciones .= "<td>" . $arrayMeses[$i]['facturacion'] . "</td>";

}

$meses .= "</tr>";
$facturaciones .= "</tr></table>";

echo $meses .$facturaciones;

echo "Máxima Facturacion: $" . $maximo . "</br>";
echo "Mínima Facturacion: $" . $minimo . "</br>";
echo "Facturacion Promedio: $" . round($sumatoria/count($arrayMeses), 2) . "</br>";
