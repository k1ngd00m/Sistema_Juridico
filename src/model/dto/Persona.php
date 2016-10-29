<?php
  /**
   *
   */
  class Persona{

    private $nombre;
    private $apellido;
    private $correo;
    private $fecha_nac;
    private $telefono;

    function Persona($nombre, $apellido, $correo, $fecha_nac, $telefono){
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->correo = $correo;
      $this->fecha_nac = $fecha_nac;
      $this->telefono = $telefono;
    }

    public function get_nombre(){
      return $this->nombre;
    }
    public function set_nombre($nombre){
      $this->nombre = $nombre;
    }

    public function get_apellido(){
      return $this->apellido;
    }
    public function set_apellido($apellido){
      $this->apellido = $apellido;
    }

    public function get_correo(){
      return $this->correo;
    }
    public function set_correo($correo){
      $this->correo = $correo;
    }

    public function get_fecha_nac(){
      return $this->fecha_nac = $fecha_nac;
    }
    public function set_fecha_nac($fecha_nac){
      $this->correo = $correo;
    }

    public function get_telefono(){
      return $this->telefono;
    }
    public function set_telefono($telefono){
      $this->telefono = $telefono;
    }
  }

 ?>
