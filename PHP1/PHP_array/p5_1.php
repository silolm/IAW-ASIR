<?php
$array = [10, 20, 30, 40, 50];
$array_num = count($array);

$e1[0] = 10;
$e1[1] = 20;
$e1[2] = 30;
$e1[3] = 40;
$e1[4] = 50;
$e1_num = count($e1);

echo '<ul><b>Array</b>';
for ($i = 0; $i < $array_num; $i++) {
    echo '<li>Elemento ' . $i . ' valor: ' . $array[$i] . '</li>';
}
echo '</ul>';

echo '<ul><b>Array primitivo</b>';
for ($i = 0; $i < $e1_num; $i++) {
    echo '<li>Elemento ' . $i . ' valor: ' . $e1[$i] . '</li>';
}
echo '</ul>';


