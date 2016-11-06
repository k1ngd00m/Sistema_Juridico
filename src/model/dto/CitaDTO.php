<?php
  /**
   *
   */
  class Cita{
    private $fecha;
    private $observacion;

    function Cita($fecha, $observacion){
      $this->fecha = $fecha;
      $this->observacion = $observacion;
    }

    public function get_fecha(){
      return $this->fecha;
    }
    public function set_fecha($fecha){
      $this->fecha = $fecha;
    }

    public function get_observacion(){
      return $this->observacion;
    }
    public function set_observacion($observacion){
      $this->observacion = $observacion;
    }
  }

 ?>
