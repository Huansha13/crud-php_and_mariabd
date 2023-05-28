<?php 

require_once('conexion.php');

// Datos actualizados
$id = 1;
$nuevoNombre = "Se actualizo";

// Consulta SQL para actualizar los datos
$sql = "UPDATE cursos SET nombre = '$nuevoNombre' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();

?>