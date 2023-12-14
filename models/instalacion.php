<?php

/**
 * Clase para la validación de tablas en la web.
 */
class Instalacion {

    private $conexion;
    public $mensajes;
    public function __construct($host, $user, $password, $database , $charset)
    {
        // Normalmente a esta variable se le llama $dsn (Data Source Name / Nombre de origen de datos)
        // acceder sin seleccionar bd
        $dsn = "mysql:host=$host;dbname=$database;charset=$charset";
        try {
            // Establecemos la conexión mediante PDO
            $this->conexion = new PDO($dsn, $user, $password);
            // Configuración para que PDO lance excepciones en errores
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->mensajes = 'Error de conexión: ' . $e->getMessage();
        }
    }
    public function comprobarInstalacion(){
        $query = "SELECT id FROM AdminV2 WHERE perfil = '0'";
        $resultado = $this->conexion->query($query);
        if ($resultado->rowCount() < 1) {
            $fila = $resultado->fetch(PDO::FETCH_ASSOC);
            return false;
        }
        return true;
    }
    public function crearAdmin() {
        $contra = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $query = "INSERT INTO AdminV2 (correo,pasw,nombre,perfil) VALUES ('".$correo."','".$contra."','".$nombre."',0)";
        $resultado = $this->conexion->query($query);
        $this->conexion = null;
    }
} 
