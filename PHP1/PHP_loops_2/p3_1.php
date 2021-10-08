<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

    <?php
    $notas = 0;
    $cont = 0;
    $aprobado = 0;

    while ($cont < 5) {
        echo $notas = rand(1, 10) . "<br>";
        if ($notas >= 5) $aprobado++;

        $cont++;
    }

    echo "<b>El número de alumnos aprobados es: " . $aprobado . "</b>";
    ?>
</body>

</html>