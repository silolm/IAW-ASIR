<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hola Mundo</title>
  <style type="text/css">
    .table {
      border: none;
      border-collapse: collapse;
      border-color: #93a1a1;
      border-spacing: 0;
      width: 50%;
    }

    .table td {
      background-color: #fdf6e3;
      border-color: #93a1a1;
      border-style: solid;
      border-width: 0px;
      color: #002b36;
      font-family: Arial, sans-serif;
      font-size: 14px;
      overflow: hidden;
      padding: 10px 5px;
      word-break: normal;
      width: 25%
    }

    .table th {
      background-color: #657b83;
      border-color: #93a1a1;
      border-style: solid;
      border-width: 0px;
      color: #fdf6e3;
      font-family: Arial, sans-serif;
      font-size: 14px;
      font-weight: normal;
      overflow: hidden;
      padding: 10px 5px;
      word-break: normal;
    }

    .table .fecha {
      font-family: "Courier New", Courier, monospace !important;
      ;
      font-size: 100%;
      text-align: right;
      vertical-align: middle
    }

    .table .titulo {
      font-family: "Courier New", Courier, monospace !important;
      ;
      font-size: 100%;
      font-style: italic;
      text-align: center;
      vertical-align: middle
    }

    .table .hora {
      font-family: "Courier New", Courier, monospace !important;
      ;
      font-size: 100%;
      text-align: left;
      vertical-align: middle
    }

    .table .darkRow {
      background-color: #eee8d5;
      font-family: "Courier New", Courier, monospace !important;
      ;
      font-size: 100%;
      text-align: center;
      vertical-align: middle
    }

    .table .lightRow {
      font-family: "Courier New", Courier, monospace !important;
      ;
      font-size: 100%;
      text-align: center;
      vertical-align: middle
    }
  </style>
</head>

<body>

  <?php

  define('FRUTERIA', array(
    'judia',
    'patata',
    'tomate',
    'manzana',
    'uva'
  ));

  $precios = [
    "judia" => 2.50,
    "patata" => 1.40,
    "tomate" => 1.05,
    "manzana" => 0.98,
    "uva" => 1.20
  ];

  $pesos = [
    "judia" => 0.350,
    "patata" => 5,
    "tomate" => 1.5,
    "manzana" => 2,
    "uva" => 2
  ];

  $total = 0;

  function sumaTotal($precio, $peso)
  {
    global $precios, $pesos, $total;

    echo number_format($precios[$precio] * $pesos[$peso], 2);

    $total += number_format($precios[$precio] * $pesos[$peso], 2);
  }

  ?>


  <table class="table">
    <thead>
      <tr>
        <th class="titulo" colspan="4">Ticket</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="fecha" colspan="2"><?php echo "Fecha:" . date('Y/m/d') ?></td>
        <td class="hora" colspan="2"><?php echo "Hora:" . date('H:i') ?></td>
      </tr>
      <tr>
        <td class="darkRow">Concepto</td>
        <td class="darkRow">P.V.P. (€/Kg)</td>
        <td class="darkRow">Cantidad (Kg)</td>
        <td class="darkRow">Total</td>
      </tr>
      <tr>
        <td class="lightRow"><?php echo FRUTERIA[0] ?></td>
        <td class="lightRow"><?php echo $precios["judia"] ?></td>
        <td class="lightRow"><?php echo $pesos["judia"] ?></td>
        <td class="lightRow"><?php sumaTotal("judia", "judia"); ?></td>
      </tr>
      <tr>
        <td class="darkRow"><?php echo FRUTERIA[1] ?></td>
        <td class="darkRow"><?php echo $precios["patata"] ?></td>
        <td class="darkRow"><?php echo $pesos["patata"] ?></td>
        <td class="darkRow"><?php sumaTotal("patata", "patata"); ?></td>
      </tr>
      <tr>
        <td class="lightRow"><?php echo FRUTERIA[2] ?></td>
        <td class="lightRow"><?php echo $precios["tomate"] ?></td>
        <td class="lightRow"><?php echo $pesos["tomate"] ?></td>
        <td class="lightRow"><?php sumaTotal("tomate", "tomate"); ?></td>
      </tr>
      <tr>
        <td class="darkRow"><?php echo FRUTERIA[3] ?></td>
        <td class="darkRow"><?php echo $precios["manzana"] ?></td>
        <td class="darkRow"><?php echo $pesos["manzana"] ?></td>
        <td class="darkRow"><?php sumaTotal("manzana", "manzana"); ?></td>
      </tr>
      <tr>
        <td class="lightRow"><?php echo FRUTERIA[4] ?></td>
        <td class="lightRow"><?php echo $precios["uva"] ?></td>
        <td class="lightRow"><?php echo $pesos["uva"] ?></td>
        <td class="lightRow"><?php sumaTotal("uva", "uva"); ?></td>
      </tr>
      <tr>
        <td class="darkRow" colspan="3"><b>Total:</b></td>
        <td class="darkRow"><b><?php echo $total; ?></b></td>
      </tr>
    </tbody>
  </table>

</body>

</html>