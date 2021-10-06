<?php
$horaInicio = strtotime("00:00");
$horaFin = strtotime("24:00");

for ($i = $horaInicio; $i <= $horaFin; $i += 900) {
    echo date("H:i", $i) . "<br>";
}