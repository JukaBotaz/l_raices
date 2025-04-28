<?php
include 'conexion.php';
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener y sanitizar los datos
$nombre = $conexion->real_escape_string($_POST['nombre']);
$correo = $conexion->real_escape_string($_POST['correo']);
$celular = $conexion->real_escape_string($_POST['celular']);
$comentario = $conexion->real_escape_string($_POST['comentario']);

// Query de inserción
$sql = "INSERT INTO comentarios (nombre, correo, celular, comentario)
        VALUES ('$nombre', '$correo', '$celular', '$comentario')";

if ($conexion->query($sql) === TRUE) {
    echo "Comentario enviado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>