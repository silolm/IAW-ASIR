<?php
include './data.php';
$persona1 = [$nombre1, $apellidos1, $edad1, $movil1];
$persona2 = [$nombre2, $apellidos2, $edad2, $movil2];

?>
<table class="tftable" border="1">
    <tr>
        <th>Datos persona 1</th>
        <th>Datos persona 2</th>
    </tr>

    <?php
    foreach (array_combine($persona1, $persona2) as $key => $value) {
        echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
    }

    ?>
</table>