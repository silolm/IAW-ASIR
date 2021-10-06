<?php
$horaInicio = strtotime("00:00");
$horaFin = strtotime("07:59");

for ($i = $horaInicio; $i <= $horaFin; $i += 300) {
    if (date("H:i", $i) == "00:00"){
        ?>
        <h4>Fracción de las 00:00</h4>
        <?php
    }
    if(date("H:i", $i) == "01:00"){
        ?>
        <h4>Fracción de la 01:00</h4>
        <?php
    }
    if(date("H:i", $i) == "02:00"){
        ?>
        <h4>Fracción de las 02:00</h4>
        <?php
    }
    if(date("H:i", $i) == "03:00"){
        ?>
        <h4>Fracción de las 03:00</h4>
        <?php
    }
    if (date("H:i", $i) == "04:00"){
        ?>
        <h4>Fracción de las 04:00</h4>
        <?php
    }
    if(date("H:i", $i) == "05:00"){
        ?>
        <h4>Fracción de las 05:00</h4>
        <?php
    }
    if(date("H:i", $i) == "06:00"){
        ?>
        <h4>Fracción de las 06:00</h4>
        <?php
    }
    if(date("H:i", $i) == "07:00"){
        ?>
        <h4>Fracción de las 07:00</h4>
        <?php
    }
    echo date("H:i", $i) . "<br>";
}

    echo "<br><br> <b> ETC. ... ETC. ... </b>";