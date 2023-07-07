<?php
// Conexión a la base de datos
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el ID del registro específico que deseas actualizar
$idToUpdate = $_GET['id']; // Suponiendo que el ID se pasa como un parámetro en la URL

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores actualizados de los campos del formulario
    $HoraRegreso = $_POST['HoraRegreso'];
    $KmRegreso = $_POST['KmRegreso'];
    $KmRecorridos = $_POST['KmRecorridos'];
    $Observaciones = $_POST['Observaciones'];

    // Consulta SQL para actualizar el registro específico
    $sql = "UPDATE form SET HoraRegreso = '$HoraRegreso', KmRegreso = '$KmRegreso', KmRecorridos = '$KmRecorridos', Observaciones = '$Observaciones' WHERE id = $idToUpdate";

    if ($conn->query($sql) === TRUE) {
        header("Location: Registro_Exito.html");
        exit; // Asegurarse de detener la ejecución del código después de la redirección
    } else {
        header("Location: Error.html");
        exit; // Asegurarse de detener la ejecución del código después de la redirección
    }
}

$conn->close();
?>
