<?php
include './data.php';
$persona = array(
    "Nombre" => $nombre1,
    "Apellidos" => $apellidos1,
    "Edad" => $edad1,
    "Móvil" => $movil1,
    "_Nombre" => $nombre2,
    "_Apellidos" => $apellidos2,
    "_Edad" => $edad2,
    "_Móvil" => $movil2
);
?>
<table class="tftable" border="1">
    <thead>
        <th colspan="2">Datos personales</th>
    </thead>
    </tr>
    <?php

    foreach ($persona as $key => $value) {
        echo '<tr><td><b>' . $key . '</b></td><td>' . $value . '</td></tr>';
    }

    ?>
</table>