<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hola Mundo</title>
</head>

<body>
<?php

$frenos = 2;
$aceite = 1;
$ruedas = 1;
$errormsg = "Seleccione una unidad de cada articulo";

echo "N.º frenos = " . ($frenos = $frenos + 1) . "<br>";
echo "N.º aceite = " . "<br>";
echo "N.º ruedas = ";


if ( $frenos < 1 | $aceite < 1 | $ruedas < 1 ) { ?>
<h4>Compra todo</h4>            
<?php }else { 
	$frenos = $frenos * 100;
	$aceite = $aceite * 10;
	$ruedas = $ruedas * 4;

	echo "<br> Polla = " . $frenos;
}
?>









</body>
</html>