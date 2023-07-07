<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control_vehicular";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el ID del registro específico que deseas eliminar
$idToDelete = $_GET['id']; // Suponiendo que el ID se pasa como un parámetro en la URL

// Consulta SQL para eliminar el registro
$sql = "DELETE FROM form WHERE id = $idToDelete";

if ($conn->query($sql) === TRUE) {
    header("Location: Eliminar_Exitoso.html");
    exit; // Asegurarse de detener la ejecución del código después de la redirección
} else {
    header("Location: Error.html");
    exit; // Asegurarse de detener la ejecución del código después de la redirección
}

$conn->close();
?>
