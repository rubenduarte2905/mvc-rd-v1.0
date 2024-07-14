<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px dotted #ff0000;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Articulos</td>
        </tr>

        <?php
        foreach ($matrizProductos as $registro) {
            echo "<tr><td><p>Producto: " . $registro['nombre'] . "</p></td>";
            echo "<td><p>Precio: " . $registro['precio'] . "</td>";
            echo "<td><p>Stock: " . $registro['stock'] . "</p></td></tr>";
              // Espacio para separar los productos
        }
        echo "<hr>";
        ?>

    </table>

</body>

</html>