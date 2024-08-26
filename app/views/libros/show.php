<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Detalles del Libro</h1>
    <p><strong>Título:</strong> <?php echo htmlspecialchars($libro->titulo); ?></p>
    <p><strong>Autor:</strong> <?php echo htmlspecialchars($libro->autor); ?></p>
    <p><strong>Año de Publicación:</strong> <?php echo htmlspecialchars($libro->anio_publicacion); ?></p>
    <p><strong>Género:</strong> <?php echo htmlspecialchars($libro->genero); ?></p>
    <a href="edit.php?id=<?php echo htmlspecialchars($libro->id); ?>">Editar</a>
    <a href="index.php">Volver al Inicio</a>
</body>
</html>
