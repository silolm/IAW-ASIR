<?php
$parejas = array(
    "1" => "3",
    "2" => "4",
    "5" => "7",
    "6" => "8",
    "9" => "11"
);
?>

<table class="tftable" border="1" style="width: 200px; text-align: center;">
    <thead>
        <th colspan="2">Pareja de números</th>
    </thead>
    </tr>
    <?php

    foreach ($parejas as $key => $value) {
        echo '<tr><td style="width: 100px;">'
            . $key
            . '</td><td style="width: 100px;">'
            . $value . '</td></tr>';
    }

    ?>
</table>