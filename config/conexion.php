<?php
    $servidor = 'localhost';
    $basedatos = 'movisoft';
    $usuario = 'root';
    $contrasena = '';

    try {
        $conexion = new PDO("mysql:
                                    host=$servidor;
                                    dbname=$basedatos", 
                                    $usuario, 
                                    $contrasena);
                                    
        // Establecer el modo de error de PDO a excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";
    } catch(PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
?>