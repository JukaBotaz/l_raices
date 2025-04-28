<?php
// Datos de conexión a tu base local en XAMPP
$host = "localhost";
$usuario = "root";
$clave = ""; // En XAMPP, root no tiene contraseña por defecto
$bd = "bienes_raices"; // Asegúrate que se llama igual tu base de datos

// Conectar a la base de datos
$conexion = new mysqli($host, $usuario, $clave, $bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
