<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  $x = -2;
  ?>
  <table style="border-style: dashed groove none dotted;" width="250">
    <thead>
      <th>Numeros Pares</th>
    </thead>
    <tbody>
      <?php
      while ($x < 100) {
        echo '
         <tr> 
         <td>'
          . $x += 2;
        '</td>
         </tr>
         ';
      }
      ?>
    </tbody>
  </table>

</body>

</html>