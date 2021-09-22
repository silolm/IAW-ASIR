<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hola Mundo</title>
</head>

<body>

<table class="articulos">
<tr><th colspan="2" align="center">Precio de los artículos</th></tr>
<tr><td>Frenos</td><td>100</td></tr>
<tr><td>Aceite</td><td>10</td></tr>
<tr><td>Ruedas</td><td>4</td></tr>
</table>

<br><br>

<?php
$frenos = 45;
$aceite = 1;
$ruedas = 1;
$end = false;
?>

<table class="pedido">
<tr><th colspan="2" align="center">Pedido</th></tr>
<tr><th>Descripción</th><th>Cantidad</th></tr>
<tr><td>Frenos</td><td align="right"><?php echo $frenos; ?></td></tr>
<tr><td>Aceite</td><td align="right"><?php echo $aceite; ?></td></tr>
<tr><td>Ruedas</td><td align="right"><?php echo $ruedas; ?></td></tr>
</table>

<?php
if ( $frenos < 1 | $aceite < 1 | $ruedas < 1 ) { 
    $end = true;
    ?>
<h4>¡La petición ha de contener todos los tipos de artículos!</h4>            
<?php }else { 
	$tFrenos = $frenos * 100;
	$tAceite = $aceite * 10;
	$tRuedas = $ruedas * 4;
	}
    if (!$end) {
        echo "<br><b> Cantidad total de artículos: " . $frenos + $aceite + $ruedas;
        echo "<br> Subtotal: " . number_format($tFrenos + $tAceite + $tRuedas) . "€";
        echo "<br> Total (I.V.A. incluido): " . number_format(($tFrenos + $tAceite + $tRuedas) * 1.21, 2) . "€ </b>";    
    }
?>

</body>
</html>