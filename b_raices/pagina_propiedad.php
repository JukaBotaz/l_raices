<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Propiedades</title>
  <style>
    .propiedad { margin-bottom: 40px; }
    .galeria img { width: 200px; margin-right: 10px; }
  </style>

</head>
<body>

  <h1>Lista de Propiedades</h1>
  <?php include('probar.php'); ?>
  <h2>Deja tu comentario</h2>
    <form action="formulario.php" method="POST">
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