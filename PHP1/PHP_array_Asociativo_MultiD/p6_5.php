<?php
$tresXtres[0][0] = 0;
$tresXtres[0][1] = 1;
$tresXtres[0][2] = 2;
$tresXtres[1][0] = 3;
$tresXtres[1][1] = 4;
$tresXtres[1][2] = 5;
$tresXtres[2][0] = 6;
$tresXtres[2][1] = 7;
$tresXtres[2][2] = 8;

for ($x = 0; $x < count($tresXtres); $x++) {
    for ($y = 0; $y < count($tresXtres); $y++) {
        echo $tresXtres[$x][$y] . '<br>';
    }
}
?>
<br>
<?php

$dosXtres = array(
    array("a", "b", "c"),
    array("d", "e", "f")
);

$x=0;
$y=0;

while ($x < count($dosXtres)) {
    while ($y < max(array_map('count', $dosXtres))) {
        echo $dosXtres[$x][$y] . '<br>';
        $y++;
    }
    $y=0;
    $x++;
}
