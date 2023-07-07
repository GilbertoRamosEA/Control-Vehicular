<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Registros</title>
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .document {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        
        .section {
            margin-bottom: 10px;
        }
        
        .label {
            font-weight: bold;
            width: 200px;
            display: inline-block;
        }
        
        .value {
            margin-left: 10px;
        }
        
        .signature {
            margin-top: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
    </style>
    <script>
        console.log(sessionStorage.getItem("Logeado"))
        if(sessionStorage.getItem("Logeado")== null){
        window.location.href = "Index.html";
        }
    </script>
</head>
<body>
    <h2>Registros</h2>
    <div id="registros">
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

        // Consulta SQL para obtener todos los registros ordenados por fecha descendente
        $sql = "SELECT * FROM form ORDER BY FechaSalida DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar la tabla con los registros
            echo "<table>";
            echo "<tr><th>ID</th><th>Fecha Salida</th><th>Fecha Regreso</th><th>Nombre</th><th>Codigo</th><th>Opciones</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['FechaSalida'] . "</td>";
                echo "<td>" . $row['FechaRegreso'] . "</td>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Codigo'] . "</td>";
                echo "<td><a href='Vista_Registro.php?id=" . $row['id'] . "'>Ver detalles</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No se encontraron registros.";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </div>

</body>
</html>
