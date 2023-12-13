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
    public function iniciarSesion() {
        $this->view='iniciosesion';
        if (isset($_POST['correo']) && isset($_POST['password'])) {
            $perfil = $this->objIniciosesion->iniciarSesion($_POST['correo'], $_POST['password']);  
            if ($perfil !== null) {
                session_start();

                $_SESSION['correo'] = $_POST['correo'];
                $_SESSION['perfil'] = $perfil;

                header("Location: index.php?action=mostrargestion&controller=gestion");

                exit();
            } else {
                echo "Credenciales incorrectas";
            }
        }
    }
}
