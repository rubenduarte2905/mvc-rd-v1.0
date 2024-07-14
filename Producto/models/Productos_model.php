<?php 

    class Productos_model{

        private $db;
        private $productos;

    public function __construct(){
        require_once ("db/Conectar.php");
        $this->db = Conectar::conexion();
        $this->productos = array();
    }

    public function get_productos(){

        $consulta = $this->db->query("SELECT * FROM Productos");
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC) ){
            $this->productos[] = $fila;
        }
        return $this->productos;
    }
}
?>