<?php
function avg(){
    $numArgs = func_num_args();
    $arg_list = func_get_args();
    $sum = 0;

    for ($i=0; $i < $numArgs; $i++) { 
        echo "Parámetro $i ==> Valor: " . $arg_list[$i] . '<br>';
        $sum += $arg_list[$i];
    }

    $avg = $sum / $numArgs;
    echo '<b> La media es: ' . number_format($avg, 2) . '</b>';
}

avg(10, 265, 66, 6845);
