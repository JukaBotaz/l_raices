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