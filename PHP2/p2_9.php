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
      while ($aux < 200) {
        $y += ($x - 190);

        echo '
         <tr> 
         <td>'
          . $y;
        '</td>
         </tr>
         ';
        $aux += 10;
      }
      ?>
    </tbody>
  </table>
</body>

</html>