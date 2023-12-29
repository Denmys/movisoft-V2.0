<?php
    require_once "./config/conexion.php";
    
    class UsuarioModel {
        private $conexion;
    
        public function __construct($conexion) {
            $this->conexion = $conexion;
        }
    
        public function verificarCredenciales($username, $password) {
            $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
            // Ejecutar la consulta y retornar el resultado
        }
    
        public function registrarUsuario($nombre, $username, $password) {
            $query = "INSERT INTO usuarios (nombre, username, password) VALUES (:nombre, :username, :password)";
            // Ejecutar la consulta para registrar el nuevo usuario
        }
    
        public function asignarRol($username, $rol) {
            $query = "UPDATE usuarios SET rol = :rol WHERE username = :username";
            // Ejecutar la consulta para asignar el rol al usuario
        }
    }
?>