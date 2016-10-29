<?php
require_once __DIR__.'/../../library/core/BaseController.php';
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 07/07/2016
 * Time: 10:11 AM
 */
class ProcesoController extends BaseController
{
    public  function __construct()
    {
        parent::__construct();
    }

    public function getFormularioRegistro(){
        $this->setView('pages/proceso/viewFormularioRegistro');
    }


    public function getListar(){
        $this->setView('pages/proceso/viewListar');
    }

}