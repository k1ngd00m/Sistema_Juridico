<?php
  /**
   *
   */
  class Persona{
    private $dni;
    private $nombre;
    private $apellido;
    private $correo;
    private $fecha_nac;
    private $telefono;

    function Persona($dni,$nombre, $apellido, $correo, $fecha_nac, $telefono){
      $this->dni = $dni;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->correo = $correo;
      $this->fecha_nac = $fecha_nac;
      $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function get_dni()
    {
      return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function set_dni($dni)
    {
      $this->dni = $dni;
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
