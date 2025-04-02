<!DOCTYPE html>
<html>
<head>
    <title>Registrar Tardanza</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Registra Nueva Tardanza</h2>

        <form action="guardar.php" method="post">
            <input type="text" name="matricula" placeholder="Matrícula" required>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
            <input type="text" name="curso" placeholder="Curso" required>
            <textarea name="motivo" placeholder="Motivo de la tardanza" required></textarea>
            <input type="submit" value="Guardar">
        </form>

        <br>
        <a href="index.php"><button>Volver</button></a>
    </div>
</body>
</html>

