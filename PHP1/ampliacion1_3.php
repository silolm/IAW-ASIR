<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hola Mundo</title>
</head>

<body>

  <h3>Orden ascendente</h3>

  <p>
    Vamos a ordenar ascendentemente los siguientes dos números: <br>
    n1 = 1<br>
    n2 = 2<br>
    n3 = 5<br>
  </p>

  <?php
  $n = [1, 2, 5];
  sort($n, SORT_NUMERIC);
  ?>
  <p>orden:
    <?php
    foreach ($n as $key => $value) {
      if ($key < 2) echo $value . "<";
      else echo $value;
    }
    ?>
  </p>

</body>

</html>