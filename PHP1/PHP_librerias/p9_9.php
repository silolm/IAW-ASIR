<?php

function producto($multiplicando, $multiplicador)
{
    echo "<b>Producto</b><br/>";
    return $multiplicando * $multiplicador;
}

function productoValores()
{
    $nArgs = func_num_args();
    $lArgs = func_get_args();

    $producto = 1;
    echo "<b>Función Producto Varios</b><br>";
    echo "(";
    for ($i = 0; $i < $nArgs; $i++) {
        $producto *= $lArgs[$i];
        if ($i == ($nArgs - 1)) echo $lArgs[$i];
        else echo "$lArgs[$i] * ";
    }
    echo ") = ";
    echo number_format($producto);
}