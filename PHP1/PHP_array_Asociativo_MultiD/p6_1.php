<?php
$parejas = array(
    "1" => "3",
    "2" => "4",
    "5" => "7",
    "6" => "8",
    "9" => "11"
);
//reset($parejas);
$parejas_num = count($parejas);

/*
la función each() está "deprecated" desde la versión 7.2.0 de PHP

while ($chain = each($parejas)) {
    echo '<br>' . $chain;
    $chain = next($parejas);
}
*/

/***************************************************************
*   Por lo tanto he resuelto el ejercicio con una alternativa  *
****************************************************************/

for ($i = 0; $i < $parejas_num; $i++) {
    $key = key($parejas);
    $value = current($parejas);
    next($parejas);
    echo $key . ' => ' . $value . '<br>';
}
