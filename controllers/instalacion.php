<?php
require_once 'models/instalacion.php';
class ControladorInstalacion {
    public function __construct() {
        $this->pagina = '';
        $this->objInstalacion = new Instalacion(HOST,USER,PASSWORD,DATABASE, CHARSET);
    }
    public function mostrarInstalacion(){
        if(!$this->objInstalacion->comprobarInstalacion()){
            $this->view='instalacion';
        }else
        $this->view='iniciosesion';
    }
    public function crearAdministrador(){
        $this->objInstalacion->crearAdmin();
        $this->view='iniciosesion';
    }
}
