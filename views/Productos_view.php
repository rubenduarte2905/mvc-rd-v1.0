<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px dotted #ff0000;
        }
    </style>
</head>
<body>
    <table>
        <tr><td>Articulos</td></tr>
    </table>

    <?php 
        foreach($matrizProductos as $registro){
            echo "<tr><td><p>Producto: ". $registro['nombre']. "</p></td></tr>";
            echo "<tr><td><p>Precio: ". $registro['precio']. "</td></tr>";
            echo "<tr><td><p>Stock: ". $registro['stock']. "</p></td></tr>";
            echo "<hr>";  // Espacio para separar los productos
        }
    
    
    
    ?>

</body>
</html>