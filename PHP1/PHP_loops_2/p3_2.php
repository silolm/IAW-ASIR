<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $ini = 0;
    $suma = 0;
    $cont = 0;

    while ($cont < 100) {
        if ($cont <= 98) echo ($ini += 1) . " - ";
        elseif ($cont = 99) echo $ini += 1;

        $suma = ($ini * ($ini + 1)) / 2;

        $cont++;
    }
    echo '<br><b>' . $suma;

    ?>
</body>

</html>