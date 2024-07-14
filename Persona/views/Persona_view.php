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
            <td>Personas</td>
        </tr>

        <?php
        foreach ($matrizPersona as $registro) {
            echo "<tr><td><p>Nombre: " . $registro['nombre'] . "</p></td>";
            echo "<td><p>Edad: " . $registro['edad'] . "</td>";
            echo "<td><p>Sexo: " . $registro['sexo'] . "</p></td>";
            echo "<td><a href='borrar.php'><input type= 'button' name='borrar' id='borrar' value='Borrar'> </a></td>";
            echo "<td><a href='editar.php'><input type= 'button' name='editar' id='editar' value='Editar'> </a></td>";
            echo "<td><a href='actualizar.php'><input type= 'button' name='actualizar' id='actualizar' value='Actualizar'></a></td></tr>";
              // Espacio para separar los productos
        }
        echo "<hr>";
       
        ?>
         <td><input type='text' name='nombre' size='10' class='centrado'></td> 
         <td><input type='text' name='edad' size='10' class='centrado'></td> 
         <td><input type='text' name='sexo' size='10' class='centrado'></td>
         <td><input type='submit' name='ins' id='ins' value='Insertar'></td> 
    </table>

</body>

</html>