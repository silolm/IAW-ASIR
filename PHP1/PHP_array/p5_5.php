<?php
$array = [10, 20, 30, 40, 50];
$array_num = count($array);
$suma = 0;

echo '<ul><b>Suma de los valores del array</b>';
for ($i = 0; $i < $array_num; $i++) {
    echo '<li>Valor: ' . $array[$i] . '</li>';
    $suma += $array[$i];
}
echo 'Suma:<b> ' .  $suma . '</b>';
echo '</ul>';
