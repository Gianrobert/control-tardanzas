<?php
// Definimos el nombre del archivo JSON donde se almacenan los datos
$dataFile = 'data.json';

// Verificamos si el archivo existe antes de intentar leerlo
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([])); // Si no existe, creamos un archivo vacío
}

// Cargamos los datos existentes en un array
$data = json_decode(file_get_contents($dataFile), true);

// Creamos un nuevo registro con la información recibida del formulario
$nuevoRegistro = [
    "matricula" => $_POST['matricula'],
    "nombre" => $_POST['nombre'],
    "apellido" => $_POST['apellido'],
    "curso" => $_POST['curso'],
    "motivo" => $_POST['motivo'],
    "fecha" => date('Y-m-d H:i:s'), // Se genera la fecha y hora actual
    date_default_timezone_set('America/Santo_Domingo')

];

// Agregamos el nuevo registro al array de datos
$data[] = $nuevoRegistro;

// Guardamos el array actualizado nuevamente en el archivo JSON
file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

// Redirigimos al usuario a la página principal después de guardar los datos
header("Location: index.php");
exit();
?>
