<?php
 /**
  *
  */
 class Abogado extends Persona
 {
   private $especialidad;
   private $alma_mater;

   function Abogado($nombre, $apellido, $correo, $fecha_nac, $telefono, $especialidad, $alma_mater){
     $this->Persona($nombre, $apellido, $correo, $fecha_nac, $telefono);
     $this->especialidad = $especialidad;
     $this->alma_mater = $alma_mater;
   }

   public function get_especialidad(){
     return $this->especialidad;
   }
   public function set_especialidad($especialidad){
     $this->especialidad = $especialidad;
   }

   public function get_alma_mater($alma_mater){
     return $this->alma_mater;
   }
   public function set_alma_mater($alma_mater){
     $this->alma_mater = $alma_mater;
   }
 }

 ?>
