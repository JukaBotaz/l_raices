<?php
include 'conexion.php';
// Obtener el id desde la URL (por ejemplo: ?id=1)
$id = isset($_GET['id']) ? $_GET['id'] : 1; // Si no se pasa id, por defecto es 1

// Mostrar todas las propiedades
$sql = "SELECT * FROM propiedades";
$resultado = $conexion->query($sql);

while ($propiedad = $resultado->fetch_assoc()) {
    echo "<div class='propiedad'>";
    echo "<h2>{$propiedad['titulo']}</h2>";
    echo "<p><strong>Ubicación:</strong> {$propiedad['ubicacion']}</p>";
    echo "<p><strong>Precio:</strong> {$propiedad['precio']}</p>";
    echo "<p><strong>Descripción:</strong> {$propiedad['descripcion']}</p>";
    echo "<p><strong>Baños:</strong> {$propiedad['banos_completos']} completos y {$propiedad['medios_banos']} medios</p>";
    echo "<p><strong>Recámaras:</strong> {$propiedad['recamaras']}</p>";

    // Mostrar imágenes relacionadas
    $id_propiedad = $propiedad['id'];
    $sql_imagenes = "SELECT url_imagen FROM imagenes_propiedad WHERE propiedad_id = $id_propiedad";
    $res_imagenes = $conexion->query($sql_imagenes);

    echo "<div class='galeria'>";
    while ($img = $res_imagenes->fetch_assoc()) {
        echo "<img src='{$img['url_imagen']}' alt='Imagen de la propiedad'>";
    }
    echo "</div>";

    echo "</div><hr>";
}

$conexion->close();
?>
