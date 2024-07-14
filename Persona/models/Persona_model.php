<?php 

    class Persona_model{

        private $db;
        private $persona;

    public function __construct(){
        require_once ("db/Conectar.php");
        $this->db = Conectar::conexion();
        $this->persona = array();
    }

    public function get_personas(){

        $consulta = $this->db->query("SELECT * FROM persona;");
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC) ){
            $this->persona[] = $fila;
        }
        return $this->persona;
    }
}
?>