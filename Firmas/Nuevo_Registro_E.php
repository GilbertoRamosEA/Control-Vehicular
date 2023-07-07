<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nuevo registro</title>
    <link rel="icon" type="image/x-icon" href="imagenes/favicon.ico">
    <link rel="stylesheet" type="text/css" href="material-gauge.css">
    <script
      src="https://code.jquery.com/jquery-3.6.4.min.js"
      integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
      crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="rangeslider.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/signature_pad/dist/signature-pad.css">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad"></script>

    <style>

      body {
        color: rgba(0, 0, 0, 0.541176);
        font-family: Roboto, Helvetica, Arial, sans-serif;
        font-size: 24px;
        font-weight: normal;
        height: 32px;
        letter-spacing: normal;
            line-height: 32px;
      }

      #gauge {
        position: relative;
        top: -60px;
        left: 180px;
          
      }

      .limpiar-link {
        color: blue;
        cursor: pointer;
        text-decoration: underline;
        font-size: 20px;
      }
      
      .signature-pad canvas {
        border: 1px solid black; /* Ajusta el grosor y el color del borde aquí */
      }

      .disabled-input {
        background-color: #f1f1f1; /* Color gris para el fondo */
        color: #999; /* Color gris para el texto */
      }

		</style>

    <script>
      function toggleOtherField() {
        var otherField = document.getElementById("other_text");
        var otroRadio = document.getElementById("otro");

        if (otroRadio.checked) {
          otherField.disabled = false;
          otherField.classList.remove("disabled-input"); // Remover clase CSS
        } else {
          otherField.disabled = true;
          otherField.classList.add("disabled-input"); // Agregar clase CSS
        }
      }
    </script>

    <script>
      function handleRadioClick(radio, otherRadioId) {
        if (radio.checked) {
          var otherRadio = document.getElementById(otherRadioId);
          otherRadio.checked = false;
        }
      }
    </script>

  </head>

  <body>
    
    <div class="formbold-main-wrapper">
      <div class="formbold-form-wrapper">
        <img src="imagenes/logoUdg.png" width="600">

        <form action="guardar.php" method="POST">

          <div class="left right" name="ordenSalida">
            <label for="ordenSalida" class="formbold-form-label-title"> ORDEN DE SALIDA DEL VEHICULO </label>   

            <div class="left">

              <div class="formbold-input-group">
                <label for="dateSalida" class="formbold-form-label"> FECHA SALIDA </label>
                <input
                  type="date"
                  name="FechaSalida"
                  id="FechaSalida"
                  class="formbold-form-input"
                  required
                />
              </div>

              <div class="formbold-input-group">
                <label for="dateRegreso" class="formbold-form-label"> FECHA REGRESO </label>
                <input
                  type="date"
                  name="FechaRegreso"
                  id="FechaRegreso"
                  class="formbold-form-input"
                  required
                />
              </div>
              
            </div>
        
            <div class="left">

              <div class="formbold-input-group">
                <label for="timeSalida" class="formbold-form-label"> HORA SALIDA </label>
                <input
                  type="time"
                  name="HoraSalida"
                  id="HoraSalida"
                  class="formbold-form-input"
                  required
                />
              </div>

              <div class="formbold-input-group">
                <label for="timeRegreso" class="formbold-form-label"> HORA REGRESO </label>
                <input
                  type="time"
                  name="HoraRegreso"
                  id="HoraRegreso"
                  class="formbold-form-input"
                />
              </div>

            </div>

            <div class="left">
              <div class="formbold-input-group">
                <label for="numberCons" class="formbold-form-label"> # CONS. </label>
                <input
                  type="number"
                  name="NumCons"
                  id="NumCons"
                  class="formbold-form-input"
                  required
                />
              </div>
            </div>

          </div>
  
          <div class="left" name="datosConductor">

            <label for="datosConductor" class="formbold-form-label-title"> DATOS DEL CONDUCTOR </label>  

            <div class="left">

              <div class="formbold-input-group">
                <label for="nombreConductor" class="formbold-form-label"> NOMBRE </label>
                <input
                  type="text"
                  name="Nombre"
                  id="Nombre"
                  class="formbold-form-input"
                  required
                />
              </div>
      
              <div class="formbold-input-group">
                <label for="codigoConductor" class="formbold-form-label"> CODIGO </label>
                <input
                  type="number"
                  name="Codigo"
                  id="Codigo"
                  class="formbold-form-input"
                  required
                />
              </div>

            </div>
          
            <div class="left">

              <div class="formbold-input-group">
                <label for="licenciaConductor" class="formbold-form-label"> LICENCIA </label>
                <input
                  type="text"
                  name="Licencia"
                  id="Licencia"
                  class="formbold-form-input"
                  required
                />
              </div>
      
              <div class="formbold-input-group">
                <label for="vencimientoConductor" class="formbold-form-label"> VENCIMIENTO </label>
                <input
                  type="date"
                  name="Vencimiento"
                  id="Vencimiento"
                  class="formbold-form-input"
                  required
                />
              </div>

            </div>

          </div>
     
          <div class="left right2" name="datosVehiculo">

            <label for="datosVehiculo" class="formbold-form-label-title"> DATOS DEL VEHICULO </label>   
            <div class="left">

              <div class="formbold-input-group">
                <label for="numberEcon" class="formbold-form-label"> # ECON. </label>
                <input
                  type="number"
                  name="NumEcon"
                  id="NumEcon"
                  class="formbold-form-input"
                  required
                />
              </div>
      
              <div class="formbold-input-group">
                <label for="textMarca" class="formbold-form-label"> MARCA </label>
                <input
                  type="text"
                  name="Marca"
                  id="Marca"
                  class="formbold-form-input"
                  required
                />
              </div>
            </div>
          
            <div class="left">

              <div class="formbold-input-group">
                <label for="textTipo" class="formbold-form-label"> TIPO </label>
                <input
                  type="text"
                  name="Tipo"
                  id="Tipo"
                  class="formbold-form-input"
                  required
                />
              </div>
      
              <div class="formbold-input-group">
                <label for="textPlacas" class="formbold-form-label"> PLACAS </label>
                <input
                  type="text"
                  name="Placas"
                  id="Placas"
                  class="formbold-form-input"
                  required
                />
              </div>
            </div>
      
            <div class="left">
              <div class="formbold-input-group">
                <label for="textModelo" class="formbold-form-label"> MODELO </label>
                <input
                  type="text"
                  name="Modelo"
                  id="Modelo"
                  class="formbold-form-input"
                  required
                />
              </div>
            </div>

          </div>
  
          <div class="left" name="itinerario">
            <label for="itinerario" class="formbold-form-label-title"> ITINENARIO </label>   
            <div class="left">

              <div class="formbold-input-group">
                <label for="textComision" class="formbold-form-label"> COMISION A </label>
                <input
                  type="text"
                  name="ComisionA"
                  id="ComisionA"
                  class="formbold-form-input"
                  required
                />
              </div>
      
              <div class="formbold-input-group">
                <label for="textAsunto" class="formbold-form-label"> ASUNTO </label>
                <input
                  type="text"
                  name="Asunto"
                  id="Asunto"
                  class="formbold-form-input"
                  required
                />
              </div>

            </div>
          </div>
  
          <br>
          <div class="left " name="extra">
            <label for="itinerario" class="formbold-form-label-title"> EXTRA </label>   
            <div class="left">
              <div class="formbold-input-group left">
                <label for="Monto" class="formbold-form-label">MONTO $ </label>
                <input
                  type="number"
                  name="Monto"
                  id="Monto"
                  class="formbold-form-input"
                  required
                />
              </div>
      
              <div class="formbold-radio-flex left ">
                <div class="formbold-radio-group left">
                  <label class="formbold-radio-label" for="magna">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="magna"
                      id="magna"
                      onclick="handleRadioClick(this, 'premiun')"
                    />
                    Magna
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <div class="formbold-radio-group left">
                  <label class="formbold-radio-label" for="premiun">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="premiun"
                      id="premiun"
                      onclick="handleRadioClick(this, 'magna')"
                    />
                    Premiun
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <script>
                  function updateGauge(value) {
                    var gauge = new Gauge(document.getElementById("gauge"));
                    gauge.value(value);
                    document.querySelector("output").innerHTML = value;

                    // Actualizar el valor del medidor en el formulario
                    document.getElementById("gauge_value").value = value;
                  }
                </script>
      
                <input type="hidden" name="gauge_value" id="gauge_value">
      
                <div class="gauge gauge--liveupdate" id="gauge">
                  <div class="gauge__container">
                    <div class="gauge__marker"></div>
                    <div class="gauge__background"></div>
                    <div class="gauge__center"></div>
                    <div class="gauge__data"></div>
                    <div class="gauge__needle"></div>
                  </div>
                  <div class="gauge__labels mdl-typography__headline">
                    <span class="gauge__label--low">E</span>
                    <span class="gauge__label--spacer"></span>
                    <div>
                      <input type="range" value="0" step="0.1" min="0" max="1.0" onchange="updateGauge(this.value)">
                      <br>
                      <output>0.0</output>
                    </div>
                    <span class="gauge__label--high">F</span>  
                  </div>
                </div>
      
                <script src="material-gauge.js"></script>
      
              </div>

            </div>
          </div>
  
          <div class="left " name="herrmaientasEquipo">
            <label for="itinerario" class="formbold-form-label-title"> HERRAMIENTAS Y EQUIPOS DE VEHICULO </label>
      
              <div class="formbold-radio-flex left right">
                <div class="formbold-radio-group left">
                  <label class="formbold-radio-label" for="gato">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="gato"
                      id="gato"
                    />
                    Gato Hidráulico o mécanico
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <div class="formbold-radio-group left">
                  <label class="formbold-radio-label" for="llanta">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="llanta"
                      id="llanta"
                    />
                    Llanta de refacción
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <div class="formbold-radio-group left">
                  <label class="formbold-radio-label" for="cruceta">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="cruceta"
                      id="cruceta"
                    />
                    Cruceta
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <div class="formbold-radio-group left">
                  <label class="formbold-radio-label" for="pinzas">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="pinzas"
                      id="pinzas"
                    />
                    Pinzas
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <div class="formbold-radio-group left">
                  <label class="formbold-radio-label" for="desarmador">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="desarmador"
                      id="desarmador"
                    />
                    Desarmador
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <div class="formbold-radio-group left">   
                  <label class="formbold-radio-label" for="llaves">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="llaves"
                      id="llaves"
                    />
                    Llaves Españolas
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
      
                <div class="formbold-radio-group left">   
                  <label class="formbold-radio-label" for="otro">
                    <input
                      class="formbold-input-radio"
                      type="radio"
                      name="otro"
                      id="otro"
                      onclick="toggleOtherField()"
                    />
                    Otro:
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                  <input type ="text" name="other" id="other_text" class="formbold-form-input2" disabled/></label>
                </div>
              </div>
      
              <div class="left">

                <div class="left" name="equipoVehiculo">
                  <div class="formbold-input-group left">
                    <label for="kmSalida" class="formbold-form-label"> KM SALIDA </label>
                    <input
                      type="number"
                      name="KmSalida"
                      id="KmSalida"
                      class="formbold-form-input"
                      required
                    />
                  </div>
      
                  <div class="formbold-input-group left">
                    <label for="kmRegreso" class="formbold-form-label"> KM REGRESO </label>
                    <input
                      type="number"
                      name="KmRegreso"
                      id="KmRegreso"
                      class="formbold-form-input"
                    />
                  </div>
      
                  <div class="formbold-input-group left">
                    <label for="kmRecorridos" class="formbold-form-label"> KM RECORRIDOS </label>
                    <input
                      type="number"
                      name="KmRecorridos"
                      id="KmRecorridos"
                      class="formbold-form-input"
                    />
                  </div>
      
                  <div class="formbold-input-group left">
                    <label for="observaciones" class="formbold-form-label"> OBSERVACIONES </label>
                    <input
                      type="text"
                      name="Observaciones"
                      id="Observaciones"
                      class="formbold-form-input"
                    />
                  </div>
                </div>
              </div>
          </div>
          <br><br>
  
          <div class="left">
    
            <label class="formbold-form-label-title">
            FIRMAS
            </label>
            
            <div class="left">
              <label class="formbold-form-label">SOLICITA SERVICIO</label>
              <div id="signature-pad-1" class="signature-pad">
                <canvas></canvas>
                <p class="limpiar-link" onclick="limpiarFirma(1)">Limpiar</p>
              </div>
            </div>
            
            <div class="left">
              <label class="formbold-form-label">AUTORIZA</label>
              <div id="signature-pad-2" class="signature-pad">
                <canvas></canvas>
                <p class="limpiar-link" onclick="limpiarFirma(2)">Limpiar</p>
              </div>
            </div>
            
            <div class="left">
              <label class="formbold-form-label">FIRMA DEL CONDUCTOR</label>
              <div id="signature-pad-3" class="signature-pad">
                <canvas></canvas>
                <p class="limpiar-link" onclick="limpiarFirma(3)">Limpiar</p>
              </div>
            </div>
    
            <!-- Campos ocultos para enviar las imágenes de las firmas -->
            <input type="hidden" name="signatureData1">
            <input type="hidden" name="signatureData2">
            <input type="hidden" name="signatureData3">
          </div>
  
          <input class="formbold-btn submit-button" type="submit">

        </form>

      </div>
    </div>
  
    <script>
      // Inicializar Signature Pad para cada firma
      var signaturePad1 = new SignaturePad(document.getElementById('signature-pad-1').querySelector('canvas'));
      var signaturePad2 = new SignaturePad(document.getElementById('signature-pad-2').querySelector('canvas'));
      var signaturePad3 = new SignaturePad(document.getElementById('signature-pad-3').querySelector('canvas'));
    
      // Función para limpiar una firma
      function limpiarFirma(numeroFirma) {
        if (numeroFirma === 1) {
          signaturePad1.clear();
        } else if (numeroFirma === 2) {
          signaturePad2.clear();
        } else if (numeroFirma === 3) {
          signaturePad3.clear();
        }
      }
    
      // Obtener el formulario
      var form = document.querySelector('form');
    
      // Manejador de eventos para guardar las firmas
      form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe automáticamente
    
        // Obtener las imágenes en formato base64 de las firmas
        var signatureData1 = signaturePad1.toDataURL();
        var signatureData2 = signaturePad2.toDataURL();
        var signatureData3 = signaturePad3.toDataURL();
    
        // Establecer los valores de los campos ocultos del formulario con las imágenes
        form.querySelector('input[name="signatureData1"]').value = signatureData1;
        form.querySelector('input[name="signatureData2"]').value = signatureData2;
        form.querySelector('input[name="signatureData3"]').value = signatureData3;
    
        form.submit(); // Enviar el formulario
      });
    </script>
    
    <script>
      $('input[type=radio]').click(function(){
        if (this.previous) {
            this.checked = false;
        }
        this.previous = this.checked;
    });
    </script>
  
  </body>
</html>

  