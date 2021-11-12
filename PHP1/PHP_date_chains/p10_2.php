<?php

$hora = getdate();

echo "<b>---------------------------------------";
echo "<br>Ahora son las: $hora[hours] horas y $hora[minutes] minutos<br>";
echo "---------------------------------------</b>";

if ($hora['hours'] >= 0 && $hora['hours'] < 12)
    echo "Buenos días, Sr-Sra";
elseif ($hora['hours'] > 11 && $hora['hours'] < 21)
    echo "Buenas tardes, Sr-Sra";
else
    echo "Buenas noches, Sr-Sra";
