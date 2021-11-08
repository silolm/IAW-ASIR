<?php
function productoValores()
{
    $nArgs = func_num_args();
    $lArgs = func_get_args();

    $producto = 1;
    echo "(";
    for ($i = 0; $i < $nArgs; $i++) {
        $producto *= $lArgs[$i];
        if ($i == ($nArgs - 1)) echo $lArgs[$i];
        else echo "$lArgs[$i] * ";
    }
    echo ") = ";
    echo number_format($producto);
}
productoValores(6, 5, 4, 3, 2, 1);
