<?php
function media($sumando1, $sumando2){
    return ($sumando1 + $sumando2) / 2;
}

$a = 651;
$b = 256;

echo "La media aritmética de la suma de  $a y $b es: " . media($a,$b);