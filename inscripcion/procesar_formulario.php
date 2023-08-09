<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL está en un host diferente
$username = "tu_usuario"; // Reemplaza con tu nombre de usuario de MySQL
$password = "tu_contraseña"; // Reemplaza con tu contraseña de MySQL
$dbname = "nombre_de_tu_base_de_datos"; // Reemplaza con el nombre de tu base de datos

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$carrera = $_POST['carrera'];

// Puedes agregar más campos del formulario y obtenerlos de manera similar

// Insertar los datos en la base de datos (tabla alumnos, por ejemplo)
$sql = "INSERT INTO alumnos (nombre, apellido, carrera) VALUES ('$nombre', '$apellido', '$carrera')";

if ($conn->query($sql) === TRUE) {
    // Los datos se insertaron correctamente en la base de datos
    echo "Constancia generada exitosamente.";
} else {
    echo "Error al generar la constancia: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
