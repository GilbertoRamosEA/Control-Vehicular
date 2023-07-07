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

// Obtener los valores del formulario
$fechaSalida = $_POST['FechaSalida'];
$fechaRegreso = $_POST['FechaRegreso'];
$horaSalida = $_POST['HoraSalida'];
$horaRegreso = $_POST['HoraRegreso'];
$numCons = $_POST['NumCons'];
$nombre = $_POST['Nombre'];
$codigo = $_POST['Codigo'];
$licencia = $_POST['Licencia'];
$vencimiento = $_POST['Vencimiento'];
$numEcon = $_POST['NumEcon'];
$marca = $_POST['Marca'];
$tipo = $_POST['Tipo'];
$placas = $_POST['Placas'];
$modelo = $_POST['Modelo'];
$comisionA = $_POST['ComisionA'];
$asunto = $_POST['Asunto'];
$monto = $_POST['Monto'];
$magna = isset($_POST['magna']) ? $_POST['magna'] : "";
$premiun = isset($_POST['premiun']) ? $_POST['premiun'] : "";
$gauge_value = $_POST['gauge_value'];
$gato = isset($_POST['gato']) ? $_POST['gato'] : "";
$llanta = isset($_POST['llanta']) ? $_POST['llanta'] : "";
$cruceta = isset($_POST['cruceta']) ? $_POST['cruceta'] : "";
$pinzas = isset($_POST['pinzas']) ? $_POST['pinzas'] : "";
$desarmador = isset($_POST['desarmador']) ? $_POST['desarmador'] : "";
$llaves = isset($_POST['llaves']) ? $_POST['llaves'] : "";
$otro = isset($_POST['otro']) ? $_POST['otro'] : "";
$otroTexto = isset($_POST['other']) ? $_POST['other'] : "";
$kmSalida = $_POST['KmSalida'];
$kmRegreso = $_POST['KmRegreso'];
$kmRecorridos = $_POST['KmRecorridos'];
$observaciones = $_POST['Observaciones'];
$firma1_data = $_POST['signatureData1'];
$firma2_data = $_POST['signatureData2'];
$firma3_data = $_POST['signatureData3'];

// Consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO form (FechaSalida, FechaRegreso, HoraSalida, HoraRegreso, NumCons, Nombre, Codigo, Licencia, Vencimiento, NumEcon, Marca, Tipo, Placas, Modelo, ComisionA, Asunto, Monto, Magna, Premiun, Gauge_value, Gato, Llanta, Cruceta, Pinzas, Desarmador, Llaves, Otro, OtroTexto, KmSalida, KmRegreso, KmRecorridos, Observaciones, firma1_data, firma2_data, firma3_data)
VALUES ('$fechaSalida', '$fechaRegreso', '$horaSalida', '$horaRegreso', '$numCons', '$nombre', '$codigo', '$licencia', '$vencimiento', '$numEcon', '$marca', '$tipo', '$placas', '$modelo', '$comisionA', '$asunto', '$monto', '$magna', '$premiun', '$gauge_value', '$gato', '$llanta', '$cruceta', '$pinzas', '$desarmador', '$llaves', '$otro', '$otroTexto', '$kmSalida', '$kmSalida', '$kmRegreso', '$observaciones', '$firma1_data', '$firma2_data', '$firma3_data')";

if ($conn->query($sql) === TRUE) {
    header("Location: Registro_Exito.html");
    exit; // Asegurarse de detener la ejecución del código después de la redirección
} else {
    header("Location: Error.html");
    exit; // Asegurarse de detener la ejecución del código después de la redirección
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
