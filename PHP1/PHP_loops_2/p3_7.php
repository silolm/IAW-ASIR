<?php
$ini = 99;
$suma = 0;
$cont = 0;

while ($cont <= 100) {
    if ($cont <= 99) echo ($ini += 1) . " - ";
    elseif ($cont = 100) echo $ini += 1;

    $suma = ($ini * ($ini + 1)) / 2;

    $cont++;
}
echo '<br><b>' . $suma;
?>