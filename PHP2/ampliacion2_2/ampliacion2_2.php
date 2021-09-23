<?php
$a = $_POST['n1'];


if (!is_numeric($a)) {
  header("Location: pr.html");
  exit;
}
$contador = 8;
while ($a >= 0 || $contador < 10) {
  echo '<table align="center">

    <thead>
      <tr>
        <th align="center" colspan="2">Calcular Raíz Cuadrada</th>
      </tr>
    </thead>

    <tbody>

      <form action="ampliacion2_2.html" method="POST">
        <tr>
          <td>Raíz cuadrada de: </td>
          <td><input type="number" name="n1" value= ' . $a . '> = </td>
          <td><code>' . sqrt($a) . '</code></td>
        </tr>

        <tr>
          <td align="center" colspan="2"><input type="submit" name="submit" value="Calcular"></td>
        </tr>
      </form>

    </tbody>

  </table>';
  $contador += $contador;
  exit;
}
