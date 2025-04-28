<?php
// map.php

// 1) Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "bienes_raices");
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// 2) Consulta la propiedad que quieras mostrar (aquí id = 1 como ejemplo)
$idProp = 1;
$sql = "SELECT latitud, longitud FROM propiedades WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $idProp);
$stmt->execute();
$stmt->bind_result($latitud, $longitud);
if (!$stmt->fetch()) {
    die("No se encontró la propiedad con id = $idProp");
}
$stmt->close();
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Mapa de Propiedad</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map { height: 400px; width: 100%; }
  </style>
</head>
<body>

<h2>Ubicación de la propiedad</h2>
<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
// 3) Aquí inyectamos los valores desde PHP
var latitud  = <?php echo json_encode((float)$latitud); ?>;
var longitud = <?php echo json_encode((float)$longitud); ?>;

// 4) Inicializar el mapa
var map = L.map('map').setView([latitud, longitud], 16);

// 5) Carga de mosaicos (tiles) de OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// 6) Marcador en la posición
L.marker([latitud, longitud]).addTo(map)
    .bindPopup('Aquí está tu propiedad')
    .openPopup();
</script>

</body>
</html>
