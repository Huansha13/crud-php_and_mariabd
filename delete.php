<?php 

require_once('conexion.php');

// ID del registro a eliminar
$id = 7;

// Consulta SQL para eliminar el registro
$sql = "DELETE FROM cursos WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();

?>