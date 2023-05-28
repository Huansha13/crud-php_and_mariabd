<?php 
require_once('conexion.php');

// Consulta SQL
$sql = "SELECT nombre, duracion FROM cursos";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar los datos
    while($row = $result->fetch_assoc()) {
        echo "Curso: " . $row["nombre"]. " - Duracion: " . $row["duracion"]. "h <br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión
$conn->close();
?>