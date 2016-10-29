<?php
  /**
   *
   */
  class Caso {
    private $tipo;
    private $fecha_ini;
    private $fecha_fin;
    private $nombre_juez;
    private $cliente;
    private $expediente;
    private $abogado;

    function Caso($tipo, $fecha_ini, $fecha_fin, $nombre_juez, $cliente, $expediente, $abogado){
      $this->tipo = $tipo;
      $this->fecha_ini = $fecha_ini;
      $this->fecha_fin = $fecha_fin;
      $this->nombre_juez = $nombre_juez;
      $this->cliente = $cliente;
      $this->expediente = $expediente;
      $this->abogado = $abogado;
    }
    
  }

 ?>
