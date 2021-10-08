<?php
$ini = 199;
$suma = 0;
$cont = 0;
?>
<table style="border-style: dashed groove none dotted;" width="250">
    <thead>
        <th>Listado de Números</th>
    </thead>
    <tbody>
        <?php
        while ($cont <= 300) {
            if ($cont <= 300) echo
            '<tr><td>'
                . ($ini += 1);
            '</td></tr>';
            $suma = ($ini * ($ini + 1)) / 2;
            $cont++;
        }
        echo
        '<tr><td>'
            . "<b>Suma: " . number_format($suma) . "</b>";
        '<tr><td>';
        ?>
    </tbody>
</table>