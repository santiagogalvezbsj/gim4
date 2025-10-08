<?php
include 'conexion.php'; // Asegúrate de que la ruta sea correcta

// Recogemos los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$plan = $_POST['plan'];

// Consulta SQL para insertar el cliente
$sql = "INSERT INTO clientes (nombre, apellido, telefono, edad, plan) 
        VALUES ('$nombre', '$apellido', '$telefono', '$edad', '$plan')";

// Ejecutamos la consulta y verificamos si se guardó correctamente
if ($conn->query($sql) === TRUE) {
    // Redirigimos al formulario con mensaje de éxito
    header("Location: ../vistas/agregar_cliente.php?status=ok");
    exit(); // Siempre poner exit después de header
} else {
    echo "Error al guardar el cliente: " . $conn->error;
}

// Cerramos la conexión
$conn->close();
?>
