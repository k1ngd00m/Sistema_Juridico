<?php
  /**
   *
   */
  class Expediente {

    private $tipo_doc;
    private $fecha;

    function Expediente($tipo_doc, $fecha){
        $this->tipo_doc = $tipo_doc;
        $this->fecha = $fecha;
    }

    public function get_tipo_doc(){
        return $this->tipo_doc;
    }
    public function set_tipo_doc($tipo_doc){
      $this->tipo_doc = $tipo_doc;
    }

    public function get_fecha(){
        return $this->fecha;
    }
    public function set_fecha($fecha){
      $this->fecha = $fecha;
    }
  }

 ?>
