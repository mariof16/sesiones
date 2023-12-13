<?php
require_once 'models/informacion.php';
class ControladorInformacion {
    public function __construct() {
        $this->pagina = '';
        $this->objInformacion = new Informacion(HOST,USER,PASSWORD,DATABASE, CHARSET);
    }
    public function mostrarInformacion(){
         $this->view='informacion';
    }
}
