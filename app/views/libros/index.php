<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Lista de Libros</h1>
    <a href="create.php">Crear Libro</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año de Publicación</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?php echo htmlspecialchars($libro->id); ?></td>
                    <td><?php echo htmlspecialchars($libro->titulo); ?></td>
                    <td><?php echo htmlspecialchars($libro->autor); ?></td>
                    <td><?php echo htmlspecialchars($libro->anio_publicacion); ?></td>
                    <td><?php echo htmlspecialchars($libro->genero); ?></td>
                    <td>
                        <a href="show.php?id=<?php echo htmlspecialchars($libro->id); ?>">Ver</a>
                        <a href="edit.php?id=<?php echo htmlspecialchars($libro->id); ?>">Editar</a>
                        <a href="#" class="delete" data-id="<?php echo htmlspecialchars($libro->id); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
