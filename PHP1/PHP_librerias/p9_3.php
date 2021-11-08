<?php
function avgRefer($a, &$b)
{
    $numArgs = func_num_args();

    $suma = $a + $b;
    $b = $suma / 2;
    echo "El resultado está en b y es: <b>$b</b><br><br>";
}

function media($sumando1, $sumando2)
{
    return ($sumando1 + $sumando2) / 2;
}

function avgArray($array)
{
    echo '<br><br>';
    var_dump($array);

    $sum = 0;

    for ($i = 0; $i < count($array); $i++)
        $sum += $array[$i];

    $media = $sum / count($array);
    echo '<br><b> La media es: ' . number_format($media, 2) . '</b>';
}
