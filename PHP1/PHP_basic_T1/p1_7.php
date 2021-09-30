<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Hola Mundo</title>
</head>

<body>

	<h2>Operaciones aritméticas:</h2>

	<p>
		Vamos a realizar las operaciones con los siguientes dos números: <br>
		n1 = 8<br>
		n2 = 3<br>
	</p>

	<?php
	$n1 = 8;
	$n2 = 3;

	echo "8 + 3 = " . $n1 + $n2 . "<br>";
	echo "8 - 3 = " . $n1 - $n2 . "<br>";
	echo "8 · 3 = " . $n1 * $n2 . "<br>";
	echo "8 / 3 = " . number_format($n1 / $n2, 9, ',') . "<br>";
	echo "8 Mod 3 = " . $n1 % $n2 . "<br>";

	?>

</body>

</html>