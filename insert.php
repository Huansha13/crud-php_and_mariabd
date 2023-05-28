<?php
require_once('conexion.php');

// Datos a insertar
$nombre = "Programación";
$duracion = "2";
$temas = "CSS, JavaScript";
$modalidad = "online";
$certificado = 0;

// Consulta SQL para inserción
$sql = "INSERT 
        INTO cursos (nombre, duracion, temas, modalidad, certificado) 
        VALUES ('$nombre', '$duracion', '$temas', '$modalidad', '$certificado')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();

?>