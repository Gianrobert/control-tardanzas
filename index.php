<?php
// Definimos el nombre del archivo JSON donde se almacenan los datos
$dataFile = 'data.json';

// Verificamos si el archivo existe antes de intentar leerlo
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([])); // Si no existe, creamos un archivo vacío
}

// Cargamos los datos desde el archivo JSON y los convertimos en un array PHP
$data = json_decode(file_get_contents($dataFile), true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Tardanzas</title>
</head>
<body>
    <h2>Lista de los  Estudiantes que Llegaron Tarde</h2>

    <!-- Tabla para mostrar la lista de estudiantes que llegaron tarde -->
    <table border="1">
        <tr>
            <th>Matrícula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Curso</th>
            <th>Motivo</th>
            <th>Fecha</th>
        </tr>

        <!-- Se recorre el array de datos para mostrar cada registro en la tabla -->
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['matricula']) ?></td>
            <td><?= htmlspecialchars($row['nombre']) ?></td>
            <td><?= htmlspecialchars($row['apellido']) ?></td>
            <td><?= htmlspecialchars($row['curso']) ?></td>
            <td><?= htmlspecialchars($row['motivo']) ?></td>
            <td><?= htmlspecialchars($row['fecha']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <!-- Botón para ir al formulario de registro -->
    <a href="registrar.php"><button>Registrar Nueva Tardanza</button></a>
</body>
</html>
