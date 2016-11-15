<?php
include_once __DIR__."../dto/AbogadoDTO.php";

/**
 * Created by PhpStorm.
 * User: McBro
 * Date: 05/11/2016
 * Time: 7:50 PM
 */
class Negocio implements INegocio
{
    /**
     * @param $abogadoDTO AbogadoDTO
     */
    public function registrar_cuenta_abogado($abogadoDTO){
        try{
            $transaccion = new TransactionManager();
            $transaccion->beginTransaction();

            $abogadoDAO = $transaccion->getDAO("AbogadoDAO");
            $abogadoDAO->registrar_cuenta_abogado($abogadoDTO);
            $abogadoDAO->flush();
        } catch (Exception $e){
            $transaccion->rollback();
        }

    }

    /**
     * @param $abogadoDTO AbogadoDTO
     * @param $especializacionDTO EspecializacionDTO
     */
    public function registrar_espec_abogado($abogadoDTO, $especializacionDTO){

    }

    /**
     *
     */
    public  function consultar_espec_abogado(){

    }

    /**
     *
     */
    public function consultar_abogados(){

    }

    /**
     * @param $abogadoDTOV AbogadoDTO
     * @param $abogadoDTON AbogadoDTO
     */
    public function actualizar_abogado($abogadoDTOV,$abogadoDTON){

    }

    /**
     * @param $abogadoDTO AbogadoDTO
     * @param $especializacionDTO EspecializacionDTO
     */
    public function eliminar_especializacion($abogadoDTO,$especializacionDTO){

    }

    /**
     * @param $abogadoDTO AbogadoDTO
     */
    public function inhabilitar_abogado($abogadoDTO){

    }

    /**
     * @param $clienteDTO ClienteDTO
     */
    public function registrar_cliente($clienteDTO){

    }

    /**
     * @param $clienteDTO ClienteDTO
     * @param $abogadoDTO AbogadoDTO
     */
    public function registrar_cliente_admin($clienteDTO,$abogadoDTO){

    }

    /**
     *
     */
    public function consultar_clientes_admin(){

    }

    /**
     * @param $abogadoDTO AbogadoDTO
     */
    public function consultar_clientes($abogadoDTO){

    }

    /**
     * @param $nick String
     */
    public function consultar_perfil_cliente($nick){

    }

    /**
     * @param $clienteDTOV ClienteDTO
     * @param $clienteDTON ClienteDTO
     */
    public function actualizar_datos_cliente($clienteDTOV,$clienteDTON){

    }

    /**
     *
     */
    public function crear_proceso(){

    }

    /**
     * @param $rad String
     */
    public function consultar_proceso($rad){

    }

    /**
     *
     */
    public function consultar_procesos(){

    }

    /**
     * @param $casoDTOV CasoDTO
     * @param $casoDTON CasoDTO
     */
    public function modificar_infor_caso($casoDTOV,$casoDTON){

    }


    /**
     * @param $expedienteDTO ExpedienteDTO
     * @param $CasoDTO CasoDTO
     */
    public function registrar_expediente_caso($expedienteDTO,$CasoDTO){

    }

    /**
     * @param $casoDTO CasoDTO
     */
    public function mostrar_expediente_caso($casoDTO){

    }

    /**
     * @param $casoDTO CasoDTO
     */
    public function eliminar_expediente($casoDTO){

    }

    /**
     * @param $casoDTO CasoDTO
     */
    public function registrar_observacion($casoDTO){

    }

    /**
     * @param $casoDTO CasoDTO
     */
    public function eliminar_observacion($casoDTO){

    }

    /**
     * @param $clienteDTO clienteDTO
     * @param $abogadoDTO AbogadoDTO
     */
    public function registrar_cita($clienteDTO,$abogadoDTO){

    }

    /**
     * @param $clienteDTO ClienteDTO
     * @param $abogadoDTO AbogadoDTO
     */
    public function cancelar_cita($clienteDTO,$abogadoDTO){

    }
}