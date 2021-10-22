<?php

$jugadores = array(
    array("Messi", "Ronaldo", "CR7"),
    array("Ronaldinho", "Etoo", "Villa"),
    array("Raúl", "Puyol", "Iniesta")
);

for ($x = 0; $x < count($jugadores); $x++) {
    for ($y = 0; $y < count($jugadores); $y++) {
        echo 'Fila '.$x .' - Columna '. $y . '<br>';
        echo '<li>' . $jugadores[$x][$y] .'</li><br>';
    }
}
