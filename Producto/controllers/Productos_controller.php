<?php 

    require_once("Producto/models/Productos_model.php");


    $producto=new Productos_model();

    $matrizProductos = $producto->get_productos();

    require_once("Producto/views/Productos_view.php");    

?>