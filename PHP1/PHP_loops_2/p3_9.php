<?php
$ini = 0;
$suma = 0;
$cont = 0;
?>
<table style="border-style: dashed groove none dotted;" width="250">
    <thead>
        <th>Listado de Números</th>
    </thead>
    <tbody>
        <?php
        while ($cont < 500) {
            if ($cont < 500) echo
            '<tr><td>'
                . ($ini += 1);
            '</td>';
            echo
            '<td>'
                . $suma;
            '</td></tr>';
            $cont++;
        }
        ?>
    </tbody>
</table>