<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<h4>En el rango de 0 a 100:</h4>

<body>
    <?php
    $sumaI = 0;
    $contI = 0;
    $suma = 0;

    while ($contI < 100) {
        if (($contI % 2) != 0 && $contI < 99) echo $contI . " - ";
        elseif (($contI % 2) != 0 && $contI = 99) echo $contI;

        $sumaI = ($contI * ($contI + 1)) / 2;

        $contI++;
    }
    echo '<br><b>' . $sumaI / 2 . '</b>';
    ?>
    <br><br>
    <?php
    for ($n = 2; $n <= 100; $n += 2) {
        if ($n <= 98) echo $n . " - ";
        elseif ($n = 100) echo $n;

        $suma = ($n * ($n + 1)) / 2;
    }
    echo '<br><b>' . $suma / 2 . '</b>';
    ?>
</body>

</html>