<?php
for ($i = 0; $i < 24; $i++) {
    if ($i==1) echo "<br>Fracciones de la $i:<br>";
    else echo "<br>Fracciones de las $i:<br>";
    
    for ($j = 0; $j <= 55; $j += 5) {
        $salida=sprintf("%02d:%02d",$i,$j) ;
        echo $salida . '<br>';
    }
}