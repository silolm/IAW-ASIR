<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <style>
        table {
            border-collapse: collapse;
        }

        table thead tr {
            background-color: #C0C0C0;
        }

        table thead th {
            padding: 5px;
            border: 2px solid #fff;
        }

        table tbody tr {
            background-color: #f2f5f7;
        }

        table tbody tr:hover {
            background-color: #e3e9ec;
        }

        table tbody td {
            border: 2px solid #fff;
            padding: 5px;
            text-align: center;
        }

        table tbody td:last-child,
        table thead th:last-child {
            border-right: 0px;
        }
    </style>
</head>
<?php
$suma = 0;
$cont = 0;
?>

<body>
    <table>
        <thead>
            <tr>
                <th>Listado de números múltiplos de 5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<tr>";
                if ($i % 5 == 0) echo "<td>" . $i . "</td>";
                echo "</tr>";
                $suma = (($i * ($i + 1)) / 2) * 5;
            }
            echo '<tr><td><b>Suma: ' . $suma . '</b></td></tr>';
            ?>
        </tbody>
    </table>

</body>

</html>