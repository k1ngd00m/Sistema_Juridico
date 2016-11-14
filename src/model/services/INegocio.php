<?php
/**
 * Created by PhpStorm.
 * User: McBro
 * Date: 06/11/2016
 * Time: 11:23 AM
 */

interface INegocio{

    public function registrar_cuenta_abogado($abogadoDTO);

    public function registrar_espec_abogado($abogadoDTO, $especializacionDTO);

    public  function consultar_espec_abogado();

    public function consultar_abogados();

    public function actualizar_abogado($abogadoDTOV,$abogadoDTON);

    public function eliminar_especializacion($abogadoDTO,$especializacionDTO);

    public function inhabilitar_abogado($abogadoDTO);

    public function registrar_cliente($clienteDTO);

    public function registrar_cliente_admin($clienteDTO,$abogadoDTO);

    public function consultar_clientes_admin();

    public function consultar_clientes($abogadoDTO);

    public function consultar_perfil_cliente($nick);

    public function actualizar_datos_cliente($clienteDTOV,$clienteDTON);

    public function crear_proceso();

    public function consultar_proceso($rad);

    public function consultar_procesos();

    public function modificar_infor_caso($casoDTOV,$casoDTON);

    public function registrar_expediente_caso($expedienteDTO,$CasoDTO);

    public function mostrar_expediente_caso($casoDTO);

    public function eliminar_expediente($casoDTO);

    public function registrar_observacion($casoDTO);

    public function eliminar_observacion($casoDTO);

    public function registrar_cita($clienteDTO,$abogadoDTO);

    public function cancelar_cita($clienteDTO,$abogadoDTO);
}