<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hola Mundo</title>
</head>

<body>
  <?php
  $a = 4;
  $b = 5;
  $c = 90;
  ?>

  <h3>Orden ascendente</h3>

  <p>
    Vamos a ordenar ascendentemente los siguientes tres números: <br>
    n1 = <?php echo $a; ?> <br>
    n2 = <?php echo $b; ?> <br>
    n3 = <?php echo $c; ?> <br>
  </p>

  <?php
  if ($a > $b) {
    if ($a > $c) {
      if ($b < $c) echo $b . "<" . $c . "<" . $a;
      else echo $c . "<" . $b . "<" . $a;
    } else echo $b . "<" . $a . "<" . $c;
  } elseif ($b > $a) {
    if ($b > $c) {
      if ($a > $c) echo $c . "<" . $a . "<" . $b;
      else echo $a . "<" . $c . "<" . $b;
    } elseif ($c > $a) {
      if ($c > $b) {
        if ($a > $b) echo $b, $a, $c;
        else echo $a . "<" . $b . "<" . $c;
      }
    }
  }


  ?>

</body>

</html>