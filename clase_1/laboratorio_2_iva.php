<?php



define(IVA, 1.21);

$x1 = $_GET['var1'];
$x2 = $_GET['var2'];
$x3 = $_GET['var3'];

echo $x1 * IVA . "</br>";
echo $x2 * IVA . "</br>";
echo $x3 * IVA . "</br>";

echo ($x1 + $x2 + $x3)/3 . "</br>";

echo "<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>";
echo "<table>";
echo "<table>";
echo "<table>";
echo "<thead><tr><th>Variable</th><th>Variable con IVA</th><th>Variable sin IVA</th></tr></thead>";;
echo "<tbody>";
echo "<tr><td>X1</td><td>" . $x1 * IVA . "</td><td>". $x1 ."</td></tr>";
echo "<tr><td>X2</td><td>" . $x2 * IVA . "</td><td>". $x2 ."</td></tr>";
echo "<tr><td>X3</td><td>" . $x3 * IVA . "</td><td>". $x3 ."</td></tr>";
echo "</tbody>";
echo "</table>";
echo "</body>
</html>";

?>
