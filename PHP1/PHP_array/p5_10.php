<?php
include './data.php';
$persona = [$nombre1, $apellidos1, $edad1, $movil1, $nombre2, $apellidos2, $edad2, $movil2];
$persona_count = count($persona);
?>
<table class="tftable" border="1">
    <thead>
        <th colspan="2">Datos persona 1</th>
    </thead>
    </tr>
    <?php

    for ($i = 0; $i < $persona_count; $i++) {
        echo '<tr><td>' . $persona[$i] . '</td></tr>';
    }

    ?>
</table>