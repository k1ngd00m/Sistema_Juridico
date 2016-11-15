<?php
include_once __DIR__."/config/Connection.php";
include_once __DIR__."/../dto/AbogadoDTO.php";
/**
 * Created by PhpStorm.
 * User: McBro
 * Date: 15/11/2016
 * Time: 11:23 AM
 */
class AbogadoDAO implements Ilink
{

    public function registrar_cuenta_abogado($abogadoDTO){

        $con = new Connection();
        $date = new DateTime();
        /**
         * @var AbogadoDTO $abogadoDTO
         */
        $res = $con->query("insert into _persona(_dni,_nombre,_apellido,_correo,_fecha_nac,_telefono) values($abogadoDTO->dni,$abogadoDTO->nombre,$abogadoDTO->apellido,$abogadoDTO->fecha_nac,$abogadoDTO->telefono);");
        $con->__destruct();
    }

    public function saved($dto){



    }

    public function update($dto){

    }

    public function  findBy($id){

    }
}