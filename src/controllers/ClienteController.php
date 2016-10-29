<?php
require_once __DIR__.'/../../library/core/BaseController.php';
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 28/10/2016
 * Time: 7:17 PM
 */
class ClienteController extends BaseController
{
    public  function __construct()
    {
        parent::__construct();
    }

    public function getFormularioRegistro(){
        $this->setView('pages/cliente/viewFormularioRegistro');

    }
    public function getListar(){
        $this->setView('pages/cliente/viewListar');
    }

}