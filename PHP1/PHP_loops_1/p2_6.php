<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>

  <?php
  $x = -10;
  ?>
  <table style="border-style: dashed groove none dotted;" width="250">
    <thead>
      <th>Décadas</th>
    </thead>
    <tbody>
      <?php
      do {
        echo '
         <tr> 
         <td>'
          . $x += 10;
        '</td>
         </tr>
         ';
      } while ($x < 200);
      ?>
    </tbody>
  </table>
</body>

</html>