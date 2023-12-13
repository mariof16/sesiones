<?php
require_once 'models/iniciosesion.php';
class ControladorIniciosesion {
    public function __construct() {
        $this->pagina = '';
        $this->objIniciosesion = new Iniciosesion(HOST,USER,PASSWORD,DATABASE, CHARSET);
    }
    public function mostrarInicio(){
         $this->view='iniciosesion';
    }
}
