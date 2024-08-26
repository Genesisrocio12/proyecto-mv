<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Libro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Crear Libro</h1>
    <form id="create-form">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>
        <label for="anio_publicacion">Año de Publicación:</label>
        <input type="number" id="anio_publicacion" name="anio_publicacion" required><br>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required><br>
        <button type="submit">Crear</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/create.js"></script>
</body>
</html>
