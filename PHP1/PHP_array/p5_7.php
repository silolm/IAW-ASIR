<?php
$array = [100, 200, 300, 400, 500];
$array_num = count($array);
$suma = 0;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <style type="text/css">
        .tftable {
            font-size: 12px;
            color: #333333;
            width: 300px;
            border-width: 1px;
            border-color: #9dcc7a;
            border-collapse: collapse;
        }

        .tftable th {
            font-size: 12px;
            background-color: #abd28e;
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #9dcc7a;
            text-align: left;
        }

        .tftable tr {
            background-color: #ffffff;
        }

        .tftable td {
            font-size: 12px;
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #9dcc7a;
        }

        .tftable tr:hover {
            background-color: #ffff99;
        }
    </style>
</head>

<body>

    <table class="tftable" border="1">
        <tr>
            <th>Posición</th>
            <th>Valor</th>
        </tr>

        <?php
        for ($i = 0; $i < $array_num; $i++) {
            if ($i < $array_num) {
                echo '<tr><td>' . $i . '</td><td>' . $array[$i] . '</td></tr>';
                $suma += $array[$i];
            }
            if (($i + 1) == $array_num) {
                echo '<tr><td><b>SUMA</b></td><td>' . $suma . '</td></tr>';
                echo '<tr><td><b>MEDIA</b></td><td>' . $suma / $array_num . '</td></tr>';
            }
        }
        ?>
    </table>