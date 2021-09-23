<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hola Mundo</title>
</head>
<body>

<h2>Operaciones aritméticas:</h2>

<h3>Control de errores</h3>

<p>
	Vamos a realizar las operaciones con los siguientes dos números: <br>
	n1 = 4<br>
	n2 = 0<br>
</p>

<?php
$n1 = 4;
$n2 = 0;

echo "4 + 0 = " . $n1 + $n2 . "<br>";
echo "4 - 0 = " . $n1 - $n2 . "<br>";
echo "4 · 0 = " . $n1 * $n2 . "<br>";
echo "4 / 0 = " . error_reporting(0); @number_format($n1 / $n2, 9, ','). "<br>";
echo "4 Mod 0 = " . $n1 % $n2 . "<br>";

?>

</body>
</html>