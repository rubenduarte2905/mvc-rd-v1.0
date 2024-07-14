<?php 

    require_once("models/Productos_model.php");


    $producto=new Productos_model();

    $matrizProductos = $producto->get_productos();

    require_once("views/Productos_view.php");    

?>