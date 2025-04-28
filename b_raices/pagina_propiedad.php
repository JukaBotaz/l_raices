<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Propiedades</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    .propiedad { margin-bottom: 40px; }
    .galeria img { width: 200px; margin-right: 10px; }
  </style>

</head>
<body>
        <h1>Contacto Whatsapp</h1>
        <a href="https://wa.me/526444573361" class="boton_whatsapp">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>

  <h1>Lista de Propiedades</h1>
  <?php include('probar.php'); ?>
  
  <h1>Ubicación en Mapa</h1>
  <hr>
  <p>Caffenio de la Nainari y Sinaloa</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4208.611476650537!2d-109.93486433790298!3d27.500179405813704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c815eca0795b71%3A0xca26f8154fda8b46!2sCaffenio!5e0!3m2!1sen!2smx!4v1745809948072!5m2!1sen!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



    <form action="formulario.php" method="POST">
    <h1>Contactar un Asesor</h1>
    <hr class="formulario__linea">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <label>Celular:</label><br>
        <input type="text" name="celular" required><br><br>

        <label>Comentario:</label><br>
        <textarea name="comentario" rows="5" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
    <?php include('formulario.php'); ?>
</body>
</html>