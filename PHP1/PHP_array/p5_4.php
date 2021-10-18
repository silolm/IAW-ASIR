<?php
$nombres = ["Ramiro", "Ramón", "Manolo", "Paco", "Antonio"];
$lista = end($nombres);

echo '<ul><b>Nombres</b>';
while ($lista) {
    echo '<li>' . $lista;
    $lista = prev($nombres);
}
echo '</ul>';
