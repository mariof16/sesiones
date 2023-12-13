<?php
class Iniciosesion {

    private $conexion;
    public $mensajes;
    public function __construct($host, $user, $password, $database , $charset)
    {
        $dsn = "mysql:host=$host;dbname=$database;charset=$charset";
        try {
            $this->conexion = new PDO($dsn, $user, $password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->mensajes = 'Error de conexión: ' . $e->getMessage();
        }
    }
    public function iniciarSesion($correo, $password) {
        $query = "SELECT perfil FROM Admin WHERE correo = '$correo' AND pasw = '$password'";
        $resultado = $this->conexion->query($query);
    
        if ($resultado->rowCount() > 0) {
            $fila = $resultado->fetch(PDO::FETCH_ASSOC);
            $perfil = $fila['perfil'];
    
            return $perfil;
        }
    
        return null;
    }
} 
