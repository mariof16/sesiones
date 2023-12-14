<?php
require_once 'models/gestion.php';
class ControladorGestion {
    public function __construct() {
        $this->pagina = '';
        $this->objGestion = new Gestion(HOST,USER,PASSWORD,DATABASE, CHARSET);
    }
    public function mostrarGestion(){
         $this->view='gestion';
    }
}
