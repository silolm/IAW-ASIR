<?php
$parejas = array(
    "1" => "3",
    "2" => "4",
    "5" => "7",
    "6" => "8",
    "9" => "11"
);

$parejas_num = count($parejas);


for ($i = 0; $i < $parejas_num; $i++) {
    $key = key($parejas);
    $value = current($parejas);
    next($parejas);
    echo $key . ' => ' . $value . '<br>';
}
