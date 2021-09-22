<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hola Mundo</title>
</head>
<body>

<?php
const EARTHRATIO = 6371;
const DISFROMSUN = 149600000;
const AROUNDTHEWORLD = 2 * M_PI * EARTHRATIO;

echo "El radio de la Tierra es de: <b>" . EARTHRATIO . " km </b> <br>";
echo "Distancia desde el Sol: <b>" . number_format(DISFROMSUN) . " km </b> <br>";
echo "Una vuelta al mundo son: <b>" . number_format(AROUNDTHEWORLD, 9, ',', '.') . " km </b> <br>";
echo "Equivalencia en vueltas de la distancia desde el Sol: <b>" .number_format(DISFROMSUN / AROUNDTHEWORLD, 9, ',', '.'). " vueltas </b>";

?>

</body>
</html>