<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Editar Libro</h1>
    <form id="edit-form">
        <input type="hidden" id="id" name="id" value="<?php echo htmlspecialchars($libro->id); ?>">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($libro->titulo); ?>" required><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="<?php echo htmlspecialchars($libro->autor); ?>" required><br>
        <label for="anio_publicacion">Año de Publicación:</label>
        <input type="number" id="anio_publicacion" name="anio_publicacion" value="<?php echo htmlspecialchars($libro->anio_publicacion); ?>" required><br>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" value="<?php echo htmlspecialchars($libro->genero); ?>" required><br>
        <button type="submit">Guardar Cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/edit.js"></script>
</body>
</html>
