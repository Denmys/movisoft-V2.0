<?php
    require_once "./config/conexion.php";
    require_once "./app/modelo/UsuarioModel.php";

    
    class AuthController {
        private $UsuarioModel;
    
        public function __construct($UsuarioModel) {
            $this->UsuarioModel = $UsuarioModel;
        }
    
        public function login($username, $password) {
            // Llamar al método verificarCredenciales del modelo
        }
    
        public function registrar($nombre, $username, $password) {
            // Llamar al método registrarUsuario del modelo
        }
    
        public function asignarRol($username, $rol) {
            // Llamar al método asignarRol del modelo
        }
    }
?>