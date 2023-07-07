<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda de registros por FechaSalida</title>
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.ico">
    <style>
        /* Estilos generales */
        body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        }
        
        /* Estilos del contenedor principal */
        #container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
        }
        
        /* Estilos del formulario */
        form {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        padding: 10px;
        }

        h1 {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        padding: 10px;
        }

        div {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        padding: 10px;
        }
        
        
        /* Estilos de los campos de entrada */
        input[type="date"] {
        padding: 10px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        
        /* Estilos del botón */
        input[type="submit"] {
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
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

    <h1>Buscar registros</h1>
    
    <form method="POST" action="Registros_fecha.php">
        <label>Fecha de Salida: </label>
        <input type="date" name="FechaSalida" required>
        <input type="submit" value="Buscar">
        <br><br>
    </form>
    
    <!-- Aquí se mostrará la tabla con los registros -->
    <div id="registros">
        <?php
            // Conexión a la base de datos (modifica los valores según tu configuración)
            $servidor = "";
            $usuario = "";
            $contrasena = "";
            $basedatos = "";
            
            $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
            
            if (!$conexion) {
                die("Error al conectar con la base de datos: " . mysqli_connect_error());
            }
            
            // Obtener la fecha de salida enviada por el formulario
            if (isset($_POST['FechaSalida'])) {
                $fechaSalida = $_POST['FechaSalida'];
            
                // Consulta SQL para buscar los registros con la misma FechaSalida
                $consulta = "SELECT * FROM form WHERE FechaSalida = '$fechaSalida'";
            
                // Ejecutar la consulta
                $resultado = mysqli_query($conexion, $consulta);
            
                // Verificar si se encontraron registros
                if ($resultado && mysqli_num_rows($resultado) > 0) {
                    // Mostrar la tabla con los registros
                    echo "<table >";
                    echo "<tr><th>Folio</th><th>Fecha Salida</th><th>Fecha Regreso</th><th>Nombre</th><th>Codigo</th><th>Opciones</th></tr>";
            
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $fila['id'] . "</td>";
                        echo "<td>" . $fila['FechaSalida'] . "</td>";
                        echo "<td>" . $fila['FechaRegreso'] . "</td>";
                        echo "<td>" . $fila['Nombre'] . "</td>";
                        echo "<td>" . $fila['Codigo'] . "</td>";
                        echo "<td><a href='Vista_Registro.php?id=" . $fila['id'] . "'>Ver detalles</a></td>";
                        echo "</tr>";
                    }
            
                    echo "</table>";
                } else {
                    echo "No se encontraron registros para la fecha de salida seleccionada.";
                }
            } else {
                echo "No se proporcionó la fecha de salida.";
            }
            
            // Cerrar la conexión a la base de datos
            mysqli_close($conexion);
        ?>
    </div>
</body>
</html>
