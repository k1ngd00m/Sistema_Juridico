<?php
  /**
   *
   */
  class Cliente extends Persona
  {

    function Cliente($nombre, $apellido, $correo, $fecha_nac, $telefono){
      $this->Persona($nombre, $apellido, $correo, $fecha_nac, $telefono);
    }
    
  }

?>
