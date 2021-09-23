<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

    <?php
    $y = 0;
    $x = 200;
    $aux = 0;
    ?>
    <table style="border-style: dashed groove none dotted;" width="250">
        <thead>
            <th>Numeros Pares</th>
        </thead>
        <tbody>
            <?php
            for ($aux = 0; $aux < $x; $aux += 10) {
                $y += ($x - 190);
                echo '
                tr><td>'
                    . $y;
                '</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>