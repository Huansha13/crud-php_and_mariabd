<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "test_php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

echo "Conexión exitosa <br>";
?>
