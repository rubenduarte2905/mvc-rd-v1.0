<?php 

    require_once("Persona/models/Persona_model.php");


    $persona=new Persona_model();

    $matrizPersona = $persona->get_personas();

    require_once("Persona/views/Persona_view.php");    

?>