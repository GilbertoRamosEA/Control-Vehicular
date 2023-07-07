<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
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

        /* Separación entre secciones */
        h3 {
            margin-top: 30px;
            margin-bottom: 10px;
        }
        
        .section-divider {
            border-top: 1px solid #ccc;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        
        .button {
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 5px;
            background-color: #4caf50;
            cursor: pointer;
            color: #fff;
            width: 49%; /* Toma el 45% del espacio disponible */
        }
        
        .button.eliminar {
            background-color: #ff0000;
            color: #fff;
        }

        input[type="date"],
        input[type="time"],
        input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
            font-size: 16px;
        }

        #image-button-container {
            position: absolute;
            top: 0;
            right: 0;
            padding: 50px;
            
        }

        #image-button {
            width: 50px; /* Ajusta el tamaño según tus necesidades */
            height: 50px;
            cursor: pointer;
            border-radius: 5px;
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
    <div class="document">
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

        // Obtener el ID del registro específico que deseas mostrar
        $idToShow = $_GET['id']; // Suponiendo que el ID se pasa como un parámetro en la URL

        // Consulta SQL para obtener el registro específico
        $sql = "SELECT * FROM form WHERE id = $idToShow";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc(); // Obtener el primer (y único) resultado

            // Definir las secciones y los campos correspondientes
            $sections = array(
                'ORDEN DE SALIDA DE VEHÍCULO' => array(
                    'id' => 'Folio',
                    'FechaSalida' => 'Fecha de Salida',
                    'FechaRegreso' => 'Fecha de Regreso',
                    'HoraSalida' => 'Hora de Salida',
                    'HoraRegreso' => 'Hora de Regreso',
                    'NumCons' => '# CONS'
                ),
                'DATOS DEL CONDUCTOR' => array(
                    'Nombre' => 'Nombre',
                    'Codigo' => 'Código',
                    'Licencia' => 'Licencia',
                    'Vencimiento' => 'Vencimiento'
                ),
                'DATOS DEL VEHÍCULO' => array(
                    'NumEcon' => '# ECON',
                    'Marca' => 'Marca',
                    'Tipo' => 'Tipo',
                    'Placas' => 'Placas',
                    'Modelo' => 'Modelo'
                ),
                'ITINERARIO' => array(
                    'ComisionA' => 'Comisión A',
                    'Asunto' => 'Asunto'
                ),
                'DATOS DEL COMBUSTIBLE' => array(
                    'Gauge_value' => 'Porcentaje del medidor',
                    'Monto' => 'Monto',
                    'Magna' => 'Magna',
                    'Premiun' => 'Premiun'
                ),
                'HERRAMIENTAS Y EQUIPO DEL VEHÍCULO' => array(
                    'Gato' => 'Gato',
                    'Llanta' => 'Llanta',
                    'Cruceta' => 'Cruceta',
                    'Pinzas' => 'Pinzas',
                    'Desarmador' => 'Desarmador',
                    'Llaves' => 'Llaves',
                    'Otro' => 'Otro',
                    'OtroTexto' => 'Otro texto'
                ),
                'DATOS DEL KILOMETRAJE' => array(
                    'KmSalida' => 'Km Salida',
                    'KmRegreso' => 'Km Regreso',
                    'KmRecorridos' => 'Km Recorridos',
                    'Observaciones' => 'Observaciones'
                ),
                'Firmas' => array(
                    'firma1_data' => 'Solicita el servicio',
                    'firma2_data' => 'Autoriza',
                    'firma3_data' => 'Firma del conductor'
                )
            );

            // Mostrar los datos del registro específico
            echo "<h2>Datos del Registro</h2>";
            echo "<form method='post' action='actualizar_registro.php?id=$idToShow'>";
            foreach ($sections as $sectionName => $fields) {
                echo "<h3>$sectionName</h3>";
                foreach ($fields as $field => $label) {
                    $value = $row[$field];
                    if ($field == 'HoraRegreso') {
                        echo "<div class='section'>";
                        echo "<label class='label'>" . ucwords($label) . ":</label>";
                        echo "<input type='time' name='HoraRegreso' value='$value' required>";
                        echo "</div>";
                    }elseif ($field == 'KmRegreso' || $field == 'KmRecorridos' || $field == 'Observaciones') {
                        echo "<div class='section'>";
                        echo "<span class='label'>" . ucwords($label) . ":</span>";
                        echo "<input type='text' name='$field' value='$value' />";
                        echo "</div>";
                    } elseif ($field == 'firma1_data' || $field == 'firma2_data' || $field == 'firma3_data') {
                        echo "<div class='section'>";
                        echo "<span class='label'>" . ucwords($label) . ":</span>";
                        echo "<div class='value signature'>";
                        echo "<img src='" . $value . "' height='152' width='302'>";
                        echo "</div>";
                        echo "</div>";
                    } else {
                        echo "<div class='section'>";
                        echo "<label class='label'>" . ucwords($label) . ":</label>";
                        echo "<span class='value'>$value</span>";
                        echo "</div>";
                    }
                }
                echo "<div class='section-divider'></div>";
            }
            echo "<div class='button-container'>";
            echo "<input type='submit' class='button' value='Actualizar'>";
            echo "<input type='button' class='button eliminar' value='Eliminar' onclick='eliminarRegistro($idToShow)'>";
            echo "</div>";
            echo "</form>";
        } else {
            echo "No se encontraron registros";
        }
        $conn->close();
        ?>


        <script>
            function eliminarRegistro(id) {
                if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
                    window.location.href = "eliminar_registro.php?id=" + id;
                }
            }

            function regresarMenu() {
                // Aquí debes especificar la URL del menú principal
                window.location.href = "Pagina_principal.html";
            }
        </script>

        <div id="image-button-container">
            <a href="Pagina_principal.html">
                <img src="imagenes/Menu.png" alt="Botón" id="image-button">
            </a>
        </div>

    </div>
</body>
</html>
