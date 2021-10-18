<?php
$nombres = ["Ramiro", "Ramón", "Manolo", "Paco", "Antonio"];
$lista = reset($nombres);

echo '<ul><b>Nombres</b>';
while ($lista) {
    echo '<li>' . $lista;
    $lista = next($nombres);
}
echo '</ul>';
