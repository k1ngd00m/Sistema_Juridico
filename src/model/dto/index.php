<?php
  include "PersonaDTO.php";
  include "AbogadoDTO.php";
  $abogado = new Abogado("Marlon", "Coronel", "marlonotmail.com","321321","5762777","Informatica forence","UFPS");
  echo $abogado->get_especialidad();
?>
