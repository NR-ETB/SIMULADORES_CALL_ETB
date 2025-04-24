<!DOCTYPE html>
<html lang="en" id="fond" style="overflow-y: auto;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/pqr.css">
    <link rel="stylesheet" href="../../css/portal.css">
    <link rel="stylesheet" href="../../../css/mainSuma.css">
    <link rel="stylesheet" href="../../css/reportarfalla.css">
    <link href="../../../fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/soporte.css">
    <link rel="shortcut icon" href="../../../images/ETB.svg">
    <title>ETB - Portal</title>

</head>
<body>

    <div class="container-genre">

        <?php 
            include('../../../components/infoAudios.php');
            include('../../../components/sidebar.php');
            include('../../../components/navbar.php');
        ?>

        <!-- Modales Registro PQR -->
    <div class="container-genre">

        <!-- Solucionado, primer paso -->
        <div class="modal fade" id="modal-soluic0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <script>

                        document.addEventListener("DOMContentLoaded", function() {
                            // Arreglo con la información del formulario
                            let datosFormulario = [{
                                numeroDocumento: "1000652458",
                                nombres: "ARMANDO",
                                apellidos: "PAREDES"
                            }];

                            // Función para actualizar los elementos <p> con los datos del formulario
                            function actualizarDatosEnDiv() {
                                // Seleccionar los párrafos donde se mostrarán los datos del formulario
                                const nomCliP = document.getElementById("nomCli");
                                const docCliP = document.getElementById("docCli");

                                // Asignar valores a los párrafos
                                nomCliP.textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos;
                                docCliP.textContent = datosFormulario[0].numeroDocumento;

                            }

                            // Función para manejar el evento de cambio en los campos del formulario
                            function manejarCambio(event) {
                                const campo = event.target; // Campo que ha cambiado
                                const valor = campo.value; // Nuevo valor del campo

                                // Actualizar los datos del formulario según el campo que ha cambiado
                                switch (campo.id) {
                                    case "nombres":
                                        datosFormulario[0].nombres = valor;
                                        break;
                                    case "apellidos":
                                        datosFormulario[0].apellidos = valor;
                                        break;
                                    case "numeroDocumento":
                                        datosFormulario[0].numeroDocumento = valor;
                                        break;
                                }

                                // Actualizar los elementos <p> con los nuevos datos del formulario
                                actualizarDatosEnDiv();
                            }

                            // Obtener los campos del formulario
                            const nombresInput = document.getElementById("nombres");
                            const apellidosInput = document.getElementById("apellidos");
                            const numeroDocumentoInput = document.getElementById("numeroDocumento");

                            // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                            nombresInput.addEventListener("input", manejarCambio);
                            apellidosInput.addEventListener("input", manejarCambio);
                            numeroDocumentoInput.addEventListener("input", manejarCambio);

                            // Actualizar los elementos <p> con los datos iniciales del formulario
                            actualizarDatosEnDiv();
                        });

                    </script>

                  <div class="info-u">
                    <label for="">Cliente</label>
                    <label for="">Número de Documento</label>
                    <p id="nomCli"></p>
                    <p id="docCli"></p> 
                  </div>

                  <form>
                    <div class="info-u info-repor">
                      <label for="">Solución</label>
                      <textarea name="text-solu" id="" cols="30" rows="10" style="grid-column: 1/4;"> </textarea>
                      <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                        <label for="btn-adj">Adjunto Solucion</label>
                        <input type="file" name="btn-adj" id="" style="display: none;">
                      </div>
                      <label for="" style="grid-column: 1/3;">Medio de notificación</label>
                      <select name="optagenda" id="age" style="grid-row: 4/5; grid-column: 1/3;">
                        <option value="0">SELECCIONE UNA OPCION...</option>
                        <option value="1">CORREO ELECTRONICO</option>
                        <option value="2">CORREO ORDINARIO</option>
                        <option value="3">PRESENCIAL</option>
                        <option value="4">TELEFONICO</option>
                        <option value="5">VERBAL / CALL CENTER</option>
                        <option value="6">VIRTUAL</option>
                        <option value="7">WHATSAPP</option>
                      </select>
                      <label for="" style="grid-column: 3/5;">Email / Dirección/ Teléfono</label>
                      <textarea name="val_agenda" id="val_agenda" style="grid-column: 3/5;"></textarea>
                    </div>
                  </form>
                  <div class="table-solui">
                    <table class="table-general table-sopor" style="width: 400px;">
                      <tr>
                        <th>Semaforo</th>
                        <th>PLATINO <br> Recurrente: Si</th>
                        <th>Cantidad</th>
                      </tr>
                      <tr class="row-bl">
                        <td><div class="semaforo semaforo-error"></div></td>
                        <td>PQR NIVEL 1</td>
                        <td>2</td>
                      </tr>
                      <tr class="row-bl">
                        <td><div class="semaforo semaforo-error"></div></td>
                        <td>PQR NIVEL 2</td>
                        <td>3</td>
                      </tr>
                      <tr class="row-bl">
                        <td><div class="semaforo semaforo-error"></div></td>
                        <td>PQR NIVEL 3</td>
                        <td>0</td>
                      </tr>
                    </table>
                    <button type="button" class="btn_clasic btn_orage_bg" id="btn-solucion" onclick="btn_solucion();">Aceptar</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div>

        <!-- Solucionado, modal general e inmersivo -->
        <div class="modal fade" id="modal-soluic2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-header" id="header-cons">
                    <h5>CREANDO PQR: MDM-PQR-3939230</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="fondview()"></button>
                </div>
                <div class="modal-body">

                    <script>

                        document.addEventListener("DOMContentLoaded", function() {
                            // Arreglo con la información del formulario
                            let datosFormulario = [{
                                numeroDocumento: "1000842659",
                                nombres: "CLAID",
                                apellidos: "MUSS"
                            }];

                            // Función para actualizar los elementos <p> con los datos del formulario
                            function actualizarDatosEnDiv() {
                                // Seleccionar los párrafos donde se mostrarán los datos del formulario
                                const nomCliP = document.getElementById("nomCli2");
                                const docCliP = document.getElementById("docCli2");

                                // Asignar valores a los párrafos
                                nomCliP.textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos;
                                docCliP.textContent = datosFormulario[0].numeroDocumento;

                            }

                            // Función para manejar el evento de cambio en los campos del formulario
                            function manejarCambio(event) {
                                const campo = event.target; // Campo que ha cambiado
                                const valor = campo.value; // Nuevo valor del campo

                                // Actualizar los datos del formulario según el campo que ha cambiado
                                switch (campo.id) {
                                    case "nombres":
                                        datosFormulario[0].nombres = valor;
                                        break;
                                    case "apellidos":
                                        datosFormulario[0].apellidos = valor;
                                        break;
                                    case "numeroDocumento":
                                        datosFormulario[0].numeroDocumento = valor;
                                        break;
                                }

                                // Actualizar los elementos <p> con los nuevos datos del formulario
                                actualizarDatosEnDiv();
                            }

                            // Obtener los campos del formulario
                            const nombresInput = document.getElementById("nombres");
                            const apellidosInput = document.getElementById("apellidos");
                            const numeroDocumentoInput = document.getElementById("numeroDocumento");

                            // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                            nombresInput.addEventListener("input", manejarCambio);
                            apellidosInput.addEventListener("input", manejarCambio);
                            numeroDocumentoInput.addEventListener("input", manejarCambio);

                            // Actualizar los elementos <p> con los datos iniciales del formulario
                            actualizarDatosEnDiv();
                        });

                    </script>

                        <div class="info-u">
                                <label for="">Cliente</label>
                                <label for="">Número de Documento</label>  
                                <p id="nomCli2"></p>
                                <p id="docCli2"></p>  
                        </div>
            
                        <form>
                            <input type="number" value="" style="display: none;" name="clientdocu">
                
                            <div class="info-u info-repor" style="display: none;">
                                <label for="">Solución</label>
                            <textarea name="text-solu" id="" cols="30" rows="10" style="grid-column: 1/4;"></textarea>
                            
                            <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                                <label for="btn-adj">Adjunto Solucion</label>
                                <input type="file" name="btn-adj" id="" style="display: none;">
                            </div>
                            
                            <label for="" style="grid-column: 1/3;">Medio de notificación</label>
                            <select name="optagenda" id="age" style="grid-row: 4/5; grid-column: 1/3;">
                                <option value="0">SELECCIONE UNA OPCION...</option>
                                <option value="1">CORREO ELECTRONICO</option>
                                <option value="2">CORREO ORDINARIO</option>
                                <option value="3">PRESENCIAL</option>
                                <option value="4">TELEFONICO</option>
                                <option value="5">VERBAL / CALL CENTER</option>
                                <option value="6">VIRTUAL</option>
                                <option value="7">WHATSAPP</option>
                            </select>
                
                            <label for="" style="grid-column: 3/5;">Email / Dirección/ Teléfono</label>
                            <textarea name="val_agenda" id="val_agenda" style="grid-column: 3/5;"></textarea>
                        </div>
                        </form>
            
                        <div class="table-solui">
                            <table class="table-general table-sopor" style="width: 400px;">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Codigo producto-servicio</th>
                                        <th>ID Servicio</th>
                                        <th>Servicio</th>
                                        <th>Numero Conexion</th>
                                        <th>Estado</th>
                                        <th>Tecnologia</th>
                                        <th>Dir. Instalacion</th>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>3D PLAY 3M SILVER1/PAQUETE</td>
                                        <td></td>
                                        <td>1-KBZWKLD</td>
                                        <td>3D PLAY 3M SILVER1</td>
                                        <td>20354851</td>
                                        <td>ACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>EQUIPO MOVIL(LTE)/</td>
                                        <td>634</td>           
                                        <td>1-19OUABN</td>
                                        <td></td> 
                                        <td>3145216985</td>
                                        <td>ACTIVO</td>
                                        <td>LTE</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>EQUIPO MOVIL(LTE)/</td>
                                        <td>757</td>
                                        <td>1-JCXQODR</td>
                                        <td></td>
                                        <td>3145216985</td>
                                        <td>SUSPENDIDO</td>
                                        <td>LTE</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>INTERNET/INTERNET</td>
                                        <td>6DQS-BCW6Q</td>
                                        <td>1-EJ4JGP1</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>INTERNET/INTERNET</td>
                                        <td></td>
                                        <td>1-KC031GK</td>
                                        <td>3D PLAY 3M SILVER1</td>
                                        <td>20354851</td>
                                        <td>ACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>IPTV/TELEVISION</td>
                                        <td>1-65R4R</td>
                                        <td>1-EJ4JGK0</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>LINEA TELEFONICA/LINEA BASICA</td>
                                        <td></td>
                                        <td>1-KC031GP</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>PRODUCTO Y PAQUETE FIBRA ETB/PAQUETE</td>
                                        <td>1-1WOWW</td>
                                        <td>1-EJ4JGJE</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>TELEFONIA MOVIL(LTE)/DATOS MOVILES</td>
                                        <td>1807</td>
                                        <td>MDM-MOV-2078022</td>
                                        <td></td>
                                        <td>3145216985</td>
                                        <td>ACTIVO</td>
                                        <td>LTE</td>
                                        <td></td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>TELEFONIA MOVIL(LTE)/DATOS MOVILES</td>
                                        <td>15</td>
                                        <td>1-BSB02QM</td>
                                        <td></td>
                                        <td>3145216985</td>
                                        <td>SUSPENDIDO</td>
                                        <td>LTE</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                            </table>
                        </div>
            
                    <div class="info-u info-repor">
                            
                        <ul>
                            
                        <label for="" class="label" style="right: 73%;">Clase</label>
                        <select name="optagenda" id="ages">                                 
                            <option value="0">Selecione...</option>
                            <option value="1">ASEGURAMIENTO CANALES</option>
                            <option value="2" style="background-color: rgb(192, 192, 192);">PETICION</option>
                            <option value="3">QUEJAS</option>
                            <option value="4">RECURSOS</option>
                            <option value="5">RESOLUCION</option>
                            <option value="6">SOLICITUDES IAS</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">Motivo</label>
                        <select name="optagenda" id="ages2">
                            <option value="0">Selecione...</option>
                            <option value="1">FACTURA</option>
                            <option value="2" style="background-color: rgb(192, 192, 192);">FALLA TECNICA</option>
                            <option value="3">INFORMACION Y/O DOCUMENTACION</option>
                            <option value="4">PREVENTIVO BACK</option>
                            <option value="5">RECLAMO INTERNO</option>
                            <option value="6">TRAMITES CON AGENDAMIENTO</option>
                            <option value="7">TRAMITES SIN AGENDAMIENTO</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">Producto</label>
                        <select name="optagenda" id="ages3">
                            <option value="0">Selecione...</option>
                            <option value="1">TELEFONIA MOVIL (LTE)</option>
                            <option value="2">DATOS MOVILES</option>
                            <option value="3" style="background-color: rgb(192, 192, 192);">INTERNET</option>
                            <option value="4">TELEVISION</option>
                            <option value="5">PAQUETE</option>
                            <option value="6">LINEA BASICA</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">Causal</label>
                        <select name="optagenda" id="ages4">
                            <option value="0">Selecione...</option>
                            <option value="1">BAJA CALIDAD DEL SERVICIO</option>
                            <option value="2">FALLA EN CPE</option>
                            <option value="3">FALLA INTERNET</option>
                            <option value="4" style="background-color: rgb(192, 192, 192);">FALLA WIFI</option>
                            <option value="5">GESTION PROACTIVA</option>
                            <option value="6">SIN DATOS</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">Sintoma</label>
                        <select name="optagenda" id="ages5">
                            <option value="0">Selecione...</option>
                            <option value="1">PROBLEMA EQUIPO DEL CLIENTE</option>
                            <option value="2">NINGUN DISPOSITIVO WIFI -F</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">CUN</label>
                        <select name="optagenda" class="label2" id="label2">
                            <option id="cun-no-rel" value="0"></option>
                            <option id="cun-rel" value="1" style="display: none; background-color: #c0c0c0;">4347240001063770</option>
                        </select>
                        <button id="btn-datos2" onclick="btn_datos2();" style="background: #FF5E00; border: 2px solid #FF5E00; border-radius: 10px; position: relative; left: 270px; bottom: 40px;"><img style="height: 16px; width: 16px;" src="../../../images/enlace.png" alt=""></button>
                        <span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label" id="des">Descripcion</label>
                        <textarea name="" id="des2" cols="30" rows="10"></textarea>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 250px;">*</span>
            
                        <label for="" class="label">Solicitante</label>
                        <select name="optagenda" class="label2" id="label3">
                            <option id="sol-no-rel" value="0"></option>
                            <option id="sol-rel" value="1" style="display: none;"></option>
                            <option id="sol-rel2" value="2" style="display: none;"></option>
                        </select>
                        <button onclick="btn_datos();" style="background: #00A7CC; border: 2px solid #00A7CC; border-radius: 10px; position: relative; left: 270px; bottom: 40px;"><img style="height: 20px; width: 18px;" src="../../../images/lupa.png" alt=""></button>
                        <span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
                        </ul>

                        <script>

                            document.addEventListener("DOMContentLoaded", function() {
                                // Arreglo con la información del formulario
                                let datosFormulario = [{
                                    tipoDocumento: "CC",
                                    numeroDocumento: "1000842659",
                                    nombres: "CLAID",
                                    apellidos: "MUSS",
                                    telefonoFijo: "2014935",
                                    celular: "3215796485",
                                    email: "clad@email.com",
                                    direccion: "Calle 54 #31 d 29",
                                    autorizacionDatos: "No"
                                }];

                                // Función para actualizar la tabla con los datos del formulario
                                function actualizarTabla() {
                                    // Seleccionar la fila donde se mostrarán los datos del formulario
                                    const fila = document.querySelector("#table-datos #fila-datos");

                                    // Seleccionar solo las celdas de datos (td) en la fila
                                    const celdas = fila.querySelectorAll("td");

                                    // Asignar valores a las celdas de la fila
                                    celdas[0].textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos; // Solicitante
                                    celdas[1].textContent = datosFormulario[0].numeroDocumento; // Numero Documento
                                    celdas[2].textContent = datosFormulario[0].tipoDocumento; // Tipo Documento
                                    celdas[3].textContent = datosFormulario[0].telefonoFijo; // Telefono Solicitante
                                    celdas[4].textContent = datosFormulario[0].celular; // Celular
                                    celdas[5].textContent = datosFormulario[0].email; // Email
                                    celdas[6].textContent = datosFormulario[0].direccion; // Direccion
                                }

                                // Función para manejar el evento de cambio en los campos del formulario
                                function manejarCambio(event) {
                                    const campo = event.target; // Campo que ha cambiado
                                    const valor = campo.value; // Nuevo valor del campo

                                    // Actualizar los datos del formulario según el campo que ha cambiado
                                    switch (campo.id) {
                                        case "nombres":
                                            datosFormulario[0].nombres = valor;
                                            break;
                                        case "apellidos":
                                            datosFormulario[0].apellidos = valor;
                                            break;
                                        case "telefonoFijo":
                                            datosFormulario[0].telefonoFijo = valor;
                                            break;
                                        case "celular":
                                            datosFormulario[0].celular = valor;
                                            break;
                                        case "email":
                                            datosFormulario[0].email = valor;
                                            break;
                                    }

                                    // Actualizar la tabla con los nuevos datos del formulario
                                    actualizarTabla();
                                }

                                // Obtener los campos del formulario
                                const nombresInput = document.getElementById("nombres");
                                const apellidosInput = document.getElementById("apellidos");
                                const telefonoFijoInput = document.getElementById("telefonoFijo");
                                const celularInput = document.getElementById("celular");
                                const emailInput = document.getElementById("email");

                                // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                                nombresInput.addEventListener("change", manejarCambio);
                                apellidosInput.addEventListener("change", manejarCambio);
                                telefonoFijoInput.addEventListener("change", manejarCambio);
                                celularInput.addEventListener("change", manejarCambio);
                                emailInput.addEventListener("change", manejarCambio);

                                // Actualizar la tabla con los datos iniciales del formulario
                                actualizarTabla();
                            });


                        </script>
            
                        <div class="table-solui2" id="table-datos" style="display: none;">
                            <table class="table-general table-sopor" id="loop2" style="width: 400px;">
                                <tr>
                                    <th>Solicitante</th>
                                    <th>Numero Documento</th>
                                    <th>Tipo Documento</th>
                                    <th>Telefono Solicitante</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Direccion</th>
                                    <th>Acción</th>
                                </tr>
                                <tr class="row-bl" id="fila-datos">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td onclick="datos();" id="datos" style="color: #FF5E00; cursor: pointer;">Editar</td>
                                </tr>
                                <tr class="row-bl" id="fila-datos2" style="display: none;">
                                    <td id="nombresCell"></td>
                                    <td id="numeroDocumentoCell"></td>
                                    <td id="tipoDocumentoCell"></td>
                                    <td id="telefonoFijoCell"></td>
                                    <td id="celularCell"></td>
                                    <td id="emailCell"></td>
                                    <td id="direccionCell"></td>
                                    <td onclick="datos2();" id="datos" style="color: #FF5E00; cursor: pointer;">Editar</td>
                                </tr>
                            </table>
                            <button class="btn_clasic" id="btn-solucion3" onclick="datos2();">Crear Contacto</button>
                            <button class="btn_clasic" id="btn-solucion33" style="display: none;">Crear Contacto</button>
                        </div>            
            
                    </div>
                        <button class="btn_clasic" id="btn-solucion2" onclick="btn_solucion22();">Guardar</button>
                </div>
              </div>
            </div>
        </div>

        <!-- Solucionado, formulario del solicitante -->
        <div class="modal fade" id="modal-soluic3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-body">

                    <script>

                        document.addEventListener("DOMContentLoaded", function() {

                            // Arreglo con la información del formulario
                            let datosFormulario = [{
                                tipoDocumento: "CC",
                                numeroDocumento: "1000842659",
                                nombres: "CLAID",
                                apellidos: "MUSS",
                                telefonoFijo: "2014935",
                                celular: "3215796485",
                                email: "clad@email.com",
                                direccion: "Calle 54 #31 d 29",
                                autorizacionDatos: "No"
                            }];

                            const tipoDocumentoInput = document.getElementById("tipoDocumento");
                            const numeroDocumentoInput = document.getElementById("numeroDocumento");
                            const nombresInput = document.getElementById("nombres");
                            const apellidosInput = document.getElementById("apellidos");
                            const telefonoFijoInput = document.getElementById("telefonoFijo");
                            const celularInput = document.getElementById("celular");
                            const emailInput = document.getElementById("email");
                            const direccionInput = document.getElementById("direccion");

                            // Imprimir datos para verificar
                            console.log("Tipo de Documento:", datosFormulario[0].tipoDocumento);
                            console.log("Número de Documento:", datosFormulario[0].numeroDocumento);
                            console.log("Nombres:", datosFormulario[0].nombres);
                            console.log("Apellidos:", datosFormulario[0].apellidos);
                            console.log("Teléfono Fijo:", datosFormulario[0].telefonoFijo);
                            console.log("Celular:", datosFormulario[0].celular);
                            console.log("Email:", datosFormulario[0].email);
                            console.log("Dirección:", datosFormulario[0].direccion);
                            console.log("Autorización de Datos:", datosFormulario[0].autorizacionDatos);

                            // Asignar valores a los campos del formulario
                            tipoDocumentoInput.value = datosFormulario[0].tipoDocumento;
                            numeroDocumentoInput.value = datosFormulario[0].numeroDocumento;
                            nombresInput.value = datosFormulario[0].nombres;
                            apellidosInput.value = datosFormulario[0].apellidos;
                            telefonoFijoInput.value = datosFormulario[0].telefonoFijo;
                            celularInput.value = datosFormulario[0].celular;
                            emailInput.value = datosFormulario[0].email;
                            direccionInput.value = datosFormulario[0].direccion;
                            autorizacionDatosSelect.value = datosFormulario[0].autorizacionDatos;

                            });
     

                        document.addEventListener("DOMContentLoaded", function() {
                            // Arreglo con la información del formulario
                            let datosFormulario = [{
                                numeroDocumento: "1000842659",
                                nombres: "CLAID",
                                apellidos: "MUSS"
                            }];

                            // Función para actualizar los elementos <p> con los datos del formulario
                            function actualizarDatosEnDiv() {
                                // Seleccionar los párrafos donde se mostrarán los datos del formulario
                                const nomCliP = document.getElementById("nomCli3");
                                const docCliP = document.getElementById("docCli3");
                                const n1 = document.getElementById("sol-rel");

                                // Asignar valores a los párrafos
                                nomCliP.textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos;
                                docCliP.textContent = datosFormulario[0].numeroDocumento;
                                n1.textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos;
                            }

                            // Función para manejar el evento de cambio en los campos del formulario
                            function manejarCambio(event) {
                                const campo = event.target; // Campo que ha cambiado
                                const valor = campo.value; // Nuevo valor del campo

                                // Actualizar los datos del formulario según el campo que ha cambiado
                                switch (campo.id) {
                                    case "nombres":
                                        datosFormulario[0].nombres = valor;
                                        break;
                                    case "apellidos":
                                        datosFormulario[0].apellidos = valor;
                                        break;
                                    case "numeroDocumento":
                                        datosFormulario[0].numeroDocumento = valor;
                                        break;
                                }

                                // Actualizar los elementos <p> con los nuevos datos del formulario
                                actualizarDatosEnDiv();
                            }

                            // Obtener los campos del formulario
                            const nombresInput = document.getElementById("nombres");
                            const apellidosInput = document.getElementById("apellidos");
                            const numeroDocumentoInput = document.getElementById("numeroDocumento");

                            // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                            nombresInput.addEventListener("input", manejarCambio);
                            apellidosInput.addEventListener("input", manejarCambio);
                            numeroDocumentoInput.addEventListener("input", manejarCambio);

                            // Actualizar los elementos <p> con los datos iniciales del formulario
                            actualizarDatosEnDiv();
                        });

                    </script>

                    <div class="info-u">
                            <label for="">Cliente</label>
                            <label for="">Número de Documento</label>   
                            <p id="nomCli3"></p>
                            <p id="docCli3"></p>
                    </div>
        
                    <form>
                        <input type="number" value="" style="display: none;" name="clientdocu">
            
                        <div class="info-u info-repor" style="display: none;">
                            <label for="">Solución</label>
                        <textarea name="text-solu" id="" cols="30" rows="10" style="grid-column: 1/4;"></textarea>
                        
                        <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                            <label for="btn-adj">Adjunto Solucion</label>
                            <input type="file" name="btn-adj" id="" style="display: none;">
                        </div>
                        
                        <label for="" style="grid-column: 1/3;">Medio de notificación</label>
                        <select name="optagenda" id="age" style="grid-row: 4/5; grid-column: 1/3;">
                            <option value="0">SELECCIONE UNA OPCION...</option>
                            <option value="1">CORREO ELECTRONICO</option>
                            <option value="2">CORREO ORDINARIO</option>
                            <option value="3">PRESENCIAL</option>
                            <option value="4">TELEFONICO</option>
                            <option value="5">VERBAL / CALL CENTER</option>
                            <option value="6">VIRTUAL</option>
                            <option value="7">WHATSAPP</option>
                        </select>
            
                        <label for="" style="grid-column: 3/5;">Email / Dirección/ Teléfono</label>
                        <textarea name="val_agenda" id="val_agenda" style="grid-column: 3/5;"></textarea>
                    </div>
                    </form>
        
                    <div class="info-u info-repor">
                        
                    <ul>

                        <form action="">

                            <label for="tipoDocumento" class="label-2">Tipo de Documento</label>
                            <textarea id="tipoDocumento" cols="30" rows="1" style="background-color: #c0c0c0" disabled></textarea>
                        
                            <label for="numeroDocumento" class="label-2">Numero de Documento</label>
                            <textarea id="numeroDocumento" cols="30" rows="1" style="background-color: #c0c0c0" disabled></textarea>
                        
                            <label for="nombres" class="label-2">Nombres</label>
                            <textarea id="nombres" cols="30" rows="1"></textarea>
                        
                            <label for="apellidos" class="label-2">Apellidos</label>
                            <textarea id="apellidos" cols="30" rows="1"></textarea>
                        
                            <label for="telefonoFijo" class="label-2">Telefono Fijo</label>
                            <textarea id="telefonoFijo" cols="30" rows="1"></textarea>
                        
                            <label for="celular" class="label-2">Celular</label>
                            <textarea id="celular" cols="30" rows="1"></textarea>
                        
                            <label for="email" class="label-2">Email</label>
                            <textarea id="email" cols="30" rows="1"></textarea>
                        
                            <label for="direccion" class="label-2">Direccion</label>
                            <textarea id="direccion" cols="30" rows="1" style="background-color: #c0c0c0" disabled></textarea>
                        
                            <label for="autorizacionDatos" class="label-2">Autorizar el manejo 
                            <br> de datos personales</label> 
                            <select id="autorizacionDatos" style="background-color: #c0c0c0" disabled>
                                <option value="0">No</option>
                            </select>

                        </form>
        
                    <div class="table-solui2" id="table-datos" style="display: none;">
                        <table class="table-general table-sopor" id="loop2" style="width: 400px;">
                                <tr>
                                    <th>Solicitante</th>
                                    <th>Numero Documento</th>
                                    <th>Tipo Documento</th>
                                    <th>Telefono Solicitante</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Direccion</th>
                                    <th>Acción</th>
                                </tr>
                                <tr class="row-bl">
                                    <td>ARMANDO PAREDES</td>
                                    <td>1000652458</td>
                                    <td>CC</td>
                                    <td>20354851</td>
                                    <td>3145216985</td>
                                    <td>arpa@email.com</td>
                                    <td>Calle 3A #41 c 36</td>
                                    <td id="datos" style="color: #FF5E00; cursor: pointer;">Editar</td>
                                </tr>
                        </table>
                        <button class="btn_clasic" id="btn-solucion3">Crear Contacto</button>
                    </div>
        
                </div>
                    <button style="background-color: #FF5E00;" class="btn_clasic" id="btn-solucion4" onclick="verificarDT();">Guardar</button>
                    <button class="btn_clasic" id="btn-solucion5" onclick="btn_solucion5()">Cancelar</button>
                </div>
              </div>
        </div>
        </div>
        </div>   
      
        <!-- Solucionado, paso calendar final -->
        <div class="modal fade" id="modal-soluic4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="fondview()"></button>
                </div>
                <div class="modal-body">

                    <script>

                        document.addEventListener("DOMContentLoaded", function() {
                            // Arreglo con la información del formulario
                            let datosFormulario = [{
                                numeroDocumento: "1000652458",
                                nombres: "ARMANDO",
                                apellidos: "PAREDES"
                            }];

                            // Función para actualizar los elementos <p> con los datos del formulario
                            function actualizarDatosEnDiv() {
                                // Seleccionar los párrafos donde se mostrarán los datos del formulario
                                const nomCliP = document.getElementById("nomCli4");
                                const docCliP = document.getElementById("docCli4");

                                // Asignar valores a los párrafos
                                nomCliP.textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos;
                                docCliP.textContent = datosFormulario[0].numeroDocumento;
                            }

                            // Función para manejar el evento de cambio en los campos del formulario
                            function manejarCambio(event) {
                                const campo = event.target; // Campo que ha cambiado
                                const valor = campo.value; // Nuevo valor del campo

                                // Actualizar los datos del formulario según el campo que ha cambiado
                                switch (campo.id) {
                                    case "nombres":
                                        datosFormulario[0].nombres = valor;
                                        break;
                                    case "apellidos":
                                        datosFormulario[0].apellidos = valor;
                                        break;
                                    case "numeroDocumento":
                                        datosFormulario[0].numeroDocumento = valor;
                                        break;
                                }

                                // Actualizar los elementos <p> con los nuevos datos del formulario
                                actualizarDatosEnDiv();
                            }

                            // Obtener los campos del formulario
                            const nombresInput = document.getElementById("nombres");
                            const apellidosInput = document.getElementById("apellidos");
                            const numeroDocumentoInput = document.getElementById("numeroDocumento");

                            // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                            nombresInput.addEventListener("input", manejarCambio);
                            apellidosInput.addEventListener("input", manejarCambio);
                            numeroDocumentoInput.addEventListener("input", manejarCambio);

                            // Actualizar los elementos <p> con los datos iniciales del formulario
                            actualizarDatosEnDiv();
                        });

                    </script>

                    <div class="info-u" style="display: none;">
                            <label for="">Cliente</label>
                            <label for="">Número de Documento</label>
                            <p id="nomCli4"></p>
                            <p id="docCli4"></p>
                    </div>
        
                    <form>
                        <input type="number" value="" style="display: none;" name="clientdocu">
            
                        <div class="info-u info-repor" style="display: none;">
                            <label for="">Solución</label>
                        <textarea name="text-solu" id="" cols="30" rows="10" style="grid-column: 1/4;"></textarea>
                        
                        <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                            <label for="btn-adj">Adjunto Solucion</label>
                            <input type="file" name="btn-adj" id="" style="display: none;">
                        </div>
                        
                        <label for="" style="grid-column: 1/3;">Medio de notificación</label>
                        <select name="optagenda" id="age" style="grid-row: 4/5; grid-column: 1/3;">
                            <option value="0">SELECCIONE UNA OPCION...</option>
                            <option value="1">CORREO ELECTRONICO</option>
                            <option value="2">CORREO ORDINARIO</option>
                            <option value="3">PRESENCIAL</option>
                            <option value="4">TELEFONICO</option>
                            <option value="5">VERBAL / CALL CENTER</option>
                            <option value="6">VIRTUAL</option>
                            <option value="7">WHATSAPP</option>
                        </select>
            
                        <label for="" style="grid-column: 3/5;">Email / Dirección/ Teléfono</label>
                        <textarea name="val_agenda" id="val_agenda" style="grid-column: 3/5;"></textarea>
                    </div>
                    </form>
        
                <div class="table-solui" style="display: none;">
                        <table class="table-general table-sopor" style="width: 400px;">
                                <tr>
                                    <th>Producto</th>
                                    <th>Codigo producto-servicio</th>
                                    <th>ID Servicio</th>
                                    <th>Servicio</th>
                                    <th>Numero Conexion</th>
                                    <th>Estado</th>
                                    <th>Tecnologia</th>
                                    <th>Dir. Instalacion</th>
                                </tr>
                                <tr class="row-bl">
                                    <td>3D PLAY 3M SILVER1/PAQUETE</td>
                                    <td></td>
                                    <td>1-KBZWKLD</td>
                                    <td>3D PLAY 3M SILVER1</td>
                                    <td>20354851</td>
                                    <td>ACTIVO</td>
                                    <td>FO</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>EQUIPO MOVIL(LTE)/</td>
                                    <td>634</td>           
                                    <td>1-19OUABN</td>
                                    <td></td> 
                                    <td>3145216985</td>
                                    <td>ACTIVO</td>
                                    <td>LTE</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>EQUIPO MOVIL(LTE)/</td>
                                    <td>757</td>
                                    <td>1-JCXQODR</td>
                                    <td></td>
                                    <td>3145216985</td>
                                    <td>SUSPENDIDO</td>
                                    <td>LTE</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>INTERNET/INTERNET</td>
                                    <td>6DQS-BCW6Q</td>
                                    <td>1-EJ4JGP1</td>
                                    <td></td>
                                    <td>20354851</td>
                                    <td>INACTIVO</td>
                                    <td>FO</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>INTERNET/INTERNET</td>
                                    <td></td>
                                    <td>1-KC031GK</td>
                                    <td>3D PLAY 3M SILVER1</td>
                                    <td>20354851</td>
                                    <td>ACTIVO</td>
                                    <td>FO</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>IPTV/TELEVISION</td>
                                    <td>1-65R4R</td>
                                    <td>1-EJ4JGK0</td>
                                    <td></td>
                                    <td>20354851</td>
                                    <td>INACTIVO</td>
                                    <td>FO</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>LINEA TELEFONICA/LINEA BASICA</td>
                                    <td></td>
                                    <td>1-KC031GP</td>
                                    <td></td>
                                    <td>20354851</td>
                                    <td>INACTIVO</td>
                                    <td>FO</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>PRODUCTO Y PAQUETE FIBRA ETB/PAQUETE</td>
                                    <td>1-1WOWW</td>
                                    <td>1-EJ4JGJE</td>
                                    <td></td>
                                    <td>20354851</td>
                                    <td>INACTIVO</td>
                                    <td>FO</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                                <tr class="row-bl">
                                    <td>TELEFONIA MOVIL(LTE)/DATOS MOVILES</td>
                                    <td>1807</td>
                                    <td>MDM-MOV-2078022</td>
                                    <td></td>
                                    <td>3145216985</td>
                                    <td>ACTIVO</td>
                                    <td>LTE</td>
                                    <td></td>
                                </tr>
                                <tr class="row-bl">
                                    <td>TELEFONIA MOVIL(LTE)/DATOS MOVILES</td>
                                    <td>15</td>
                                    <td>1-BSB02QM</td>
                                    <td></td>
                                    <td>3145216985</td>
                                    <td>SUSPENDIDO</td>
                                    <td>LTE</td>
                                    <td>Calle 3A #41 c 36</td>
                                </tr>
                        </table>
                </div>
        
                <div class="info-u info-repor" style="display: none;">
                        
                    <ul>
                        
                    <label for="" class="label">Clases</label>
                    <select name="optagenda" id="ages">                                 
                        <option value="1">PETICION</option>
                    </select>
        
                    <label for="" class="label">Motivos</label>
                    <select name="optagenda" id="ages">
                        <option value="1">FALLA TECNICA</option>
                    </select>
        
                    <label for="" class="label">Producto</label>
                    <select name="optagenda" id="ages">
                        <option value="1">INTERNET</option>
                    </select>
        
                    <label for="" class="label">Causal</label>
                    <select name="optagenda" id="ages">
                        <option value="1">FALLA INTERNET</option>
                    </select>
        
                    <label for="" class="label">Sintomas</label>
                    <select name="optagenda" id="ages">
                        <option value="1">SIN SERVICIO -F</option>
                    </select>
        
                    <label for="" class="label">CUN</label>
                    <select name="optagenda" class="label2" style="background-color: #c0c0c0">
                        <option value="1">6250124658754201</option>
                    </select>
                    <button style="background: #FF5E00; border: 2px solid #FF5E00; border-radius: 10px; position: relative; right: 155px; bottom: 1px;"><img style="height: 20px; width: 18px;" src="../../../images/enlace.png" alt=""></button>
        
                    <label for="" class="label" id="des">Descripcion</label>
                    <textarea name="" id="des2" cols="30" rows="10"></textarea>
                    </select>
        
                    <label for="" class="label">Solicitante</label>
                    <select name="optagenda" class="label2" style="background-color: #c0c0c0">
                        <option value="1">ARMANDO PAREDES</option>
                    </select>
                    <button style="background: #00A7CC; border: 2px solid #00A7CC; border-radius: 10px; position: relative; right: 155px; bottom: 1px;"><img style="height: 20px; width: 18px;" src="../../../images/lupa.png" alt=""></button>
                    </ul>
                </div>

            <div class="items-info" id="aten-4">

                <div style="display: grid; justify-content: center;">    

                    <script>
                        var today = new Date();
                        var day = today.getDate();
                        var month = today.getMonth() + 1;
                        var year = today.getFullYear();
                        var hours = today.getHours();
                        var minutes = today.getMinutes();
                    </script>

                    <div id="no-ven" style="display: -webkit-inline-box; margin-top: 50px; position: relative; left: 350px;">
                        <p style="color: #FF5E00; margin-right: 35px; position: relative;">Fecha Agendada</p>
                        <select name="" id="no-day">
                            <option value="0" id="ven">...</option>
                            <option value="1" id="ven1" style="display: none;">
                                <span><script>document.write(`${day}/${month}/${year}`)</script></span>
                            </option>
                            <option value="2" id="ven2" style="display: none;"> 
                                <span><script>document.write(`${day + 1}/${month}/${year}`)</script></span>
                            </option>
                            <option value="3" id="ven3" style="display: none;">
                                <span><script>document.write(`${day + 2}/${month}/${year}`)</script></span>
                            </option>
                        </select>
                        
                    </div>

                <div id="calendar"></div>

                <div style="position: relative; top: 5px;">

                    <div id="no-ven" style="display: -webkit-inline-box; margin-top: 50px; position: relative; left: 350px;">
                    <p style="color: #FF5E00; margin-right: 35px; position: relative;">Franja Agendada</p>
                    <select>
                        <option value="0" id="ven">Seleccione...</option>
                        <option value="1" id="ven1">
                            <span><script>document.write(`${hours}:${minutes}`)</script></span>
                        </option>
                        <option value="2" id="ven2"> 
                            <span><script>document.write(`${hours + 2}:${minutes}`)</script></span>
                        </option>
                        <option value="3" id="ven3">
                            <span><script>document.write(`${hours + 4}:${minutes}`)</script></span>
                        </option>
                    </select>
                    </div>

                    <p style="color: #FF5E00; margin-left: 50px; position: relative; left: 350px; top: 40px;">Agendas Programadas</p>

                    <div style="position: relative; left: 465px; bottom: 10px;">
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; right: 385px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 2px 0 0 2px;">Copy</button>
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; right: 390px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 0 2px 2px 0;;">Excel</button>
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; right: 396px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 2px 0 0 2px;">CSV</button>
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; right: 401px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 0 2px 2px 0;;">Print</button>
                        <p style="position: relative; left: 167px; top: 45px; border: #00A7CC;">Filtrar:</p>
                        <textarea name="" id="des3" cols="30" rows="10" style="width: 200px; height: 30px; position: relative; left: 232px;"></textarea>  
                    </div>
                    <div class="table-solui" style="bottom: 20px; position: relative;">
                        <table class="table-general table-sopor" style="width: 200px;">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Franja</th>
                                    <th>Estado</th>
                                    <th>Usuario</th>
                                    <th>Creador</th>
                                    <th>Usuario</th>
                                    <th>Modificador</th>
                                    <th>Motivo</th>
                                    <th>Cancelar</th>
                                    <th>Fecha</th>
                                    <th>Actualizacion</th>
                                </tr>
                                <tr class="row-bl">
                                    <td colspan="11" style="text-align: center;">Ningún dato disponible en esta tabla</td>
                                </tr>
                        </table>
                    </div>

                    <p style="position: relative; left: 82px; bottom: 25px;">Registros 0-0 de 0  No hay filas seleccionadas</p>
                    <div>
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 696px; bottom: 70px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px;">Anterior</button>
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 692px; bottom: 70px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0;;">Siguiente</button>
                    </div>

                    <p style="color: #FF5E00; position: relative; left: 82px; bottom: 5px;">Solicitud cliente:</p><input type="checkbox" style="position: relative; left: 250px; bottom: 45px;">

                </div>

                </div>

                <div style="position: relative; bottom: 160px; right: 50px;">
                    <button class="btn_clasic" id="btn-solucion2222">Salir</button>
                    <button class="btn_clasic" id="btn-solucion2222" style="background-color: #FF5E00;" onclick="agen()">Agendar</button>     
                </div>
            </div>

            </div>
            </div>
        </div>
        </div>
        </div>

        <!-- Solucionado, formulario del solicitante -->
        <div class="modal fade" id="modal-soluic33" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-body">

                <script>

                    document.addEventListener("DOMContentLoaded", function() {

                        // Arreglo con la información del formulario
                        let datosFormulario2 = {
                            tipoDocumento: "",
                            numeroDocumento: "",
                            nombres: "",
                            apellidos: "",
                            telefonoFijo: "",
                            celular: "",
                            email: "",
                            direccion: "",
                            autorizacionDatos: "No"
                        };

                        // Función para actualizar los elementos <td> con los datos del formulario
                        function actualizarDatosEnTabla() {
                            // Seleccionar las celdas donde se mostrarán los datos del formulario
                            const tipoDocumentoCell = document.getElementById("tipoDocumentoCell");
                            const numeroDocumentoCell = document.getElementById("numeroDocumentoCell");
                            const nombresCell = document.getElementById("nombresCell");
                            const apellidosCell = document.getElementById("apellidosCell");
                            const telefonoFijoCell = document.getElementById("telefonoFijoCell");
                            const celularCell = document.getElementById("celularCell");
                            const emailCell = document.getElementById("emailCell");
                            const direccionCell = document.getElementById("direccionCell");

                            // Asignar valores a las celdas
                            tipoDocumentoCell.textContent = datosFormulario2.tipoDocumento;
                            numeroDocumentoCell.textContent = datosFormulario2.numeroDocumento;
                            nombresCell.textContent = datosFormulario2.nombres + ' ' + datosFormulario2.apellidos;
                            telefonoFijoCell.textContent = datosFormulario2.telefonoFijo;
                            celularCell.textContent = datosFormulario2.celular;
                            emailCell.textContent = datosFormulario2.email;
                            direccionCell.textContent = datosFormulario2.direccion;
                        }

                        // Función para manejar el evento de cambio en los campos del formulario
                        function manejarCambio(event) {
                            const campo = event.target; // Campo que ha cambiado
                            const valor = campo.value; // Nuevo valor del campo

                            // Actualizar los datos del formulario según el campo que ha cambiado
                            switch (campo.id) {
                                case "tipoDocumentoCell":
                                    datosFormulario2.tipoDocumento = valor;
                                    break;
                                case "numeroDocumentoCell":
                                    datosFormulario2.numeroDocumento = valor;
                                    break;
                                case "nombresCell":
                                    datosFormulario2.nombres = valor;
                                    break;
                                case "apellidosCell":
                                    datosFormulario2.apellidos = valor;
                                    break;
                                case "telefonoFijoCell":
                                    datosFormulario2.telefonoFijo = valor;
                                    break;
                                case "celularCell":
                                    datosFormulario2.celular = valor;
                                    break;
                                case "emailCell":
                                    datosFormulario2.email = valor;
                                    break;
                                case "direccionCell":
                                    datosFormulario2.direccion = valor;
                                    break;
                            }

                            // Actualizar los elementos <td> con los nuevos datos del formulario
                            actualizarDatosEnTabla();
                        }

                        // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                        document.querySelectorAll('textarea').forEach(element => {
                            element.addEventListener('input', manejarCambio);
                        });

                        // Mostrar los datos iniciales en el formulario al cargar la página
                        actualizarDatosEnTabla();

                        // Objeto con la información del formulario
                        let datosFormulario3 = {
                            nombres: "",
                            apellidos: "",
                            numeroDocumento: ""
                        };

                        // Función para actualizar los elementos <p> con los datos del formulario
                        function actualizarDatosEnDiv() {
                            // Seleccionar los párrafos donde se mostrarán los datos del formulario
                            const nomCliP = document.getElementById("nomCli33");
                            const docCliP = document.getElementById("docCli33");
                            const n2 = document.getElementById("sol-rel2");

                            // Asignar valores a los párrafos
                            nomCliP.textContent = datosFormulario3.nombres + " " + datosFormulario3.apellidos;
                            docCliP.textContent = datosFormulario3.numeroDocumento;
                            n2.textContent = datosFormulario3.nombres + " " + datosFormulario3.apellidos;
                        }

                        // Función para manejar el evento de cambio en los campos del formulario
                        function manejarCambio2(event) {
                            const campo = event.target; // Campo que ha cambiado
                            const valor = campo.value; // Nuevo valor del campo

                            // Actualizar los datos del formulario según el campo que ha cambiado
                            switch (campo.id) {
                                case "nombresCell":
                                    datosFormulario3.nombres = valor;
                                    break;
                                case "apellidosCell":
                                    datosFormulario3.apellidos = valor;
                                    break;
                                case "numeroDocumentoCell":
                                    datosFormulario3.numeroDocumento = valor;
                                    break;
                            }

                            // Actualizar los elementos <p> con los nuevos datos del formulario
                            actualizarDatosEnDiv();
                        }

                        // Obtener los campos del formulario
                        const nombresInput = document.getElementById("nombresCell");
                        const apellidosInput = document.getElementById("apellidosCell");
                        const numeroDocumentoInput = document.getElementById("numeroDocumentoCell");

                        // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                        document.querySelectorAll('textarea').forEach(element => {
                            element.addEventListener('input', manejarCambio2);
                        });

                        // Actualizar los elementos <p> con los datos iniciales del formulario
                        actualizarDatosEnDiv();
                        
                    });


                </script>

                    <div class="info-u">
                            <label for="">Cliente</label>
                            <label for="">Número de Documento</label>   
                            <p id="nomCli33"></p>
                            <p id="docCli33"></p>
                    </div>
        
                    <form>
                        <input type="number" value="" style="display: none;" name="clientdocu">
            
                        <div class="info-u info-repor" style="display: none;">
                            <label for="">Solución</label>
                        <textarea name="text-solu" id="" cols="30" rows="10" style="grid-column: 1/4;"></textarea>
                        
                        <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                            <label for="btn-adj">Adjunto Solucion</label>
                            <input type="file" name="btn-adj" id="" style="display: none;">
                        </div>
                        
                        <label for="" style="grid-column: 1/3;">Medio de notificación</label>
                        <select name="optagenda" id="age" style="grid-row: 4/5; grid-column: 1/3;">
                            <option value="0">SELECCIONE UNA OPCION...</option>
                            <option value="1">CORREO ELECTRONICO</option>
                            <option value="2">CORREO ORDINARIO</option>
                            <option value="3">PRESENCIAL</option>
                            <option value="4">TELEFONICO</option>
                            <option value="5">VERBAL / CALL CENTER</option>
                            <option value="6">VIRTUAL</option>
                            <option value="7">WHATSAPP</option>
                        </select>
            
                        <label for="" style="grid-column: 3/5;">Email / Dirección/ Teléfono</label>
                        <textarea name="val_agenda" id="val_agenda" style="grid-column: 3/5;"></textarea>
                    </div>
                    </form>
        
                    <div class="info-u info-repor">
                        
                    <ul>

                        <form action="">

                            <label for="tipoDocumentoCell" class="label-2">Tipo de Documento</label>
                            <textarea class="tipoDocumentoCell" id="tipoDocumentoCell" cols="30" rows="1"></textarea>
                        
                            <label for="numeroDocumentoCell" class="label-2">Numero de Documento</label>
                            <textarea class="numeroDocumentoCell" id="numeroDocumentoCell" cols="30" rows="1"></textarea>
                        
                            <label for="nombresCell" class="label-2">Nombres</label>
                            <textarea class="nombresCell" id="nombresCell" cols="30" rows="1"></textarea>
                        
                            <label for="apellidosCell" class="label-2">Apellidos</label>
                            <textarea class="apellidosCell" id="apellidosCell" cols="30" rows="1"></textarea>
                        
                            <label for="telefonoFijoCell" class="label-2">Telefono Fijo</label>
                            <textarea class="telefonoFijoCell" id="telefonoFijoCell" cols="30" rows="1"></textarea>
                        
                            <label for="celularCell" class="label-2">Celular</label>
                            <textarea class="celularCell" id="celularCell" cols="30" rows="1"></textarea>
                        
                            <label for="emailCell" class="label-2">Email</label>
                            <textarea class="emailCell" id="emailCell" cols="30" rows="1"></textarea>
                        
                            <label for="direccionCell" class="label-2">Direccion</label>
                            <textarea class="direccionCell" id="direccionCell" cols="30" rows="1"></textarea>
                        
                            <label for="autorizacionDatos" class="label-2">Autorizar el manejo 
                            <br> de datos personales</label> 
                            <select class="autorizacionDatos" id="autorizacionDatos">
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>

                        </form>
        
                    <div class="table-solui2" id="table-datos" style="display: none;">
                        <table class="table-general table-sopor" id="loop2" style="width: 400px;">
                                <tr>
                                    <th>Solicitante</th>
                                    <th>Numero Documento</th>
                                    <th>Tipo Documento</th>
                                    <th>Telefono Solicitante</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Direccion</th>
                                    <th>Acción</th>
                                </tr>
                                <tr class="row-bl">
                                    <td>ARMANDO PAREDES</td>
                                    <td>1000652458</td>
                                    <td>CC</td>
                                    <td>20354851</td>
                                    <td>3145216985</td>
                                    <td>arpa@email.com</td>
                                    <td>Calle 3A #41 c 36</td>
                                    <td id="datos" style="color: #FF5E00; cursor: pointer;">Editar</td>
                                </tr>
                        </table>
                        <button class="btn_clasic" id="btn-solucion3">Crear Contacto</button>
                    </div>
        
                </div>
                    <button style="background-color: #FF5E00;" class="btn_clasic" id="btn-solucion4" onclick="verificarDT2()">Guardar</button>
                    <button class="btn_clasic" id="btn-solucion5" onclick="btn_solucion5()">Cancelar</button>
                </div>
              </div>
            </div>
        </div>

        <!-- Solucionado, modal general y final -->
        <div class="modal fade" id="modal-soluic5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="fondview()"></button>
                </div>
                <div class="modal-body">

                    <script>

                        document.addEventListener("DOMContentLoaded", function() {
                            // Arreglo con la información del formulario
                            let datosFormulario = [{
                                numeroDocumento: "1000842659",
                                nombres: "CLAID",
                                apellidos: "MUSS"
                            }];

                            // Función para actualizar los elementos <p> con los datos del formulario
                            function actualizarDatosEnDiv() {
                                // Seleccionar los párrafos donde se mostrarán los datos del formulario
                                const nomCliP = document.getElementById("nomCli5");
                                const docCliP = document.getElementById("docCli5");

                                // Asignar valores a los párrafos
                                nomCliP.textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos;
                                docCliP.textContent = datosFormulario[0].numeroDocumento;

                            }

                            // Función para manejar el evento de cambio en los campos del formulario
                            function manejarCambio(event) {
                                const campo = event.target; // Campo que ha cambiado
                                const valor = campo.value; // Nuevo valor del campo

                                // Actualizar los datos del formulario según el campo que ha cambiado
                                switch (campo.id) {
                                    case "nombres":
                                        datosFormulario[0].nombres = valor;
                                        break;
                                    case "apellidos":
                                        datosFormulario[0].apellidos = valor;
                                        break;
                                    case "numeroDocumento":
                                        datosFormulario[0].numeroDocumento = valor;
                                        break;
                                }

                                // Actualizar los elementos <p> con los nuevos datos del formulario
                                actualizarDatosEnDiv();
                            }

                            // Obtener los campos del formulario
                            const nombresInput = document.getElementById("nombres");
                            const apellidosInput = document.getElementById("apellidos");
                            const numeroDocumentoInput = document.getElementById("numeroDocumento");

                            // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                            nombresInput.addEventListener("input", manejarCambio);
                            apellidosInput.addEventListener("input", manejarCambio);
                            numeroDocumentoInput.addEventListener("input", manejarCambio);

                            // Actualizar los elementos <p> con los datos iniciales del formulario
                            actualizarDatosEnDiv();
                        });

                    </script>

                        <div class="info-u">
                                <label for="">Cliente</label>
                                <label for="">Número de Documento</label>  
                                <p id="nomCli5"></p>
                                <p id="docCli5"></p>  
                        </div>
            
                        <form>
                            <input type="number" value="" style="display: none;" name="clientdocu">
                
                            <div class="info-u info-repor" style="display: none;">
                                <label for="">Solución</label>
                            <textarea name="text-solu" id="" cols="30" rows="10" style="grid-column: 1/4;"></textarea>
                            
                            <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                                <label for="btn-adj">Adjunto Solucion</label>
                                <input type="file" name="btn-adj" id="" style="display: none;">
                            </div>
                            
                            <label for="" style="grid-column: 1/3;">Medio de notificación</label>
                            <select name="optagenda" id="age" style="grid-row: 4/5; grid-column: 1/3;">
                                <option value="0">SELECCIONE UNA OPCION...</option>
                                <option value="1">CORREO ELECTRONICO</option>
                                <option value="2">CORREO ORDINARIO</option>
                                <option value="3">PRESENCIAL</option>
                                <option value="4">TELEFONICO</option>
                                <option value="5">VERBAL / CALL CENTER</option>
                                <option value="6">VIRTUAL</option>
                                <option value="7">WHATSAPP</option>
                            </select>
                
                            <label for="" style="grid-column: 3/5;">Email / Dirección/ Teléfono</label>
                            <textarea name="val_agenda" id="val_agenda" style="grid-column: 3/5;"></textarea>
                        </div>
                        </form>
            
                        <div class="table-solui">
                            <table class="table-general table-sopor" style="width: 400px;">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Codigo producto-servicio</th>
                                        <th>ID Servicio</th>
                                        <th>Servicio</th>
                                        <th>Numero Conexion</th>
                                        <th>Estado</th>
                                        <th>Tecnologia</th>
                                        <th>Dir. Instalacion</th>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>3D PLAY 3M SILVER1/PAQUETE</td>
                                        <td></td>
                                        <td>1-KBZWKLD</td>
                                        <td>3D PLAY 3M SILVER1</td>
                                        <td>20354851</td>
                                        <td>ACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>EQUIPO MOVIL(LTE)/</td>
                                        <td>634</td>           
                                        <td>1-19OUABN</td>
                                        <td></td> 
                                        <td>3145216985</td>
                                        <td>ACTIVO</td>
                                        <td>LTE</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>EQUIPO MOVIL(LTE)/</td>
                                        <td>757</td>
                                        <td>1-JCXQODR</td>
                                        <td></td>
                                        <td>3145216985</td>
                                        <td>SUSPENDIDO</td>
                                        <td>LTE</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>INTERNET/INTERNET</td>
                                        <td>6DQS-BCW6Q</td>
                                        <td>1-EJ4JGP1</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>INTERNET/INTERNET</td>
                                        <td></td>
                                        <td>1-KC031GK</td>
                                        <td>3D PLAY 3M SILVER1</td>
                                        <td>20354851</td>
                                        <td>ACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>IPTV/TELEVISION</td>
                                        <td>1-65R4R</td>
                                        <td>1-EJ4JGK0</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>LINEA TELEFONICA/LINEA BASICA</td>
                                        <td></td>
                                        <td>1-KC031GP</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>PRODUCTO Y PAQUETE FIBRA ETB/PAQUETE</td>
                                        <td>1-1WOWW</td>
                                        <td>1-EJ4JGJE</td>
                                        <td></td>
                                        <td>20354851</td>
                                        <td>INACTIVO</td>
                                        <td>FO</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>TELEFONIA MOVIL(LTE)/DATOS MOVILES</td>
                                        <td>1807</td>
                                        <td>MDM-MOV-2078022</td>
                                        <td></td>
                                        <td>3145216985</td>
                                        <td>ACTIVO</td>
                                        <td>LTE</td>
                                        <td></td>
                                    </tr>
                                    <tr class="row-bl">
                                        <td>TELEFONIA MOVIL(LTE)/DATOS MOVILES</td>
                                        <td>15</td>
                                        <td>1-BSB02QM</td>
                                        <td></td>
                                        <td>3145216985</td>
                                        <td>SUSPENDIDO</td>
                                        <td>LTE</td>
                                        <td>Calle 3A #41 c 36</td>
                                    </tr>
                            </table>
                        </div>
            
                    <div class="info-u info-repor">
                            
                        <ul>
                            
                        <label for="" class="label">Clases</label>
                        <select name="optagenda" id="ages" style="background-color: #c0c0c0; border-color: #FF5E00;">                                 
                            <option value="0">Selecione...</option>
                            <option value="1">ASEGURAMIENTO CANALES</option>
                            <option value="2">PETICION</option>
                            <option value="3">QUEJAS</option>
                            <option value="4">RECURSOS</option>
                            <option value="5">RESOLUCION</option>
                            <option value="6">SOLICITUDES IAS</option>
                        </select>
            
                        <label for="" class="label">Motivos</label>
                        <select name="optagenda" id="ages2">
                            <option value="0">Selecione...</option>
                            <option value="1">FACTURA</option>
                            <option value="2">FALLA TECNICA</option>
                            <option value="3">INFORMACION Y/O DOCUMENTACION</option>
                            <option value="4">PREVENTIVO BACK</option>
                            <option value="5">RECLAMO INTERNO</option>
                            <option value="6">TRAMITES CON AGENDAMIENTO</option>
                            <option value="7">TRAMITES SIN AGENDAMIENTO</option>
                        </select>
            
                        <label for="" class="label">Causal</label>
                        <select name="optagenda" id="ages4">
                            <option value="0">Selecione...</option>
                            <option value="1">BAJA CALIDAD DEL SERVICIO</option>
                            <option value="2">FALLA EN CPE</option>
                            <option value="3">FALLA INTERNET</option>
                            <option value="4">FALLA WIFI</option>
                            <option value="5">GESTION PROACTIVA</option>
                            <option value="6">SIN DATOS</option>
                        </select>
            
                        <label for="" class="label">Sintomas</label>
                        <select name="optagenda" id="ages5">
                            <option value="0">Selecione...</option>
                            <option value="1">PROBLEMA EQUIPO DEL CLIENTE</option>
                            <option value="2">SIN SERVICIO -F</option>
                        </select>          
                    </div>
                        <button class="btn_clasic" id="btn-solucion22222" onclick="btn_solucion3();">Guardar</button>
                </div>
              </div>
            </div>
        </div>
        
        <div class="main-principal-portal" id="main-co">

            <div class="content-p" id="content-s-main"> 

                <h1>Consulta Soporte Eficiente (SPN)</h1>

                <div style="margin-top: 30px; margin-left: 30px; border: 2px solid #F36F31; border-radius: 15px; width: 70%; padding-bottom: 35px;">

                    <div class="usuario" style="margin-left: 35px;">
                                    <div>
                                        <label for="">Número de PQR</label>
                                        <input type="text" id="buss" style="width: 500px; height: 40px;">
                                    </div>
                                    <div>
                                        <label for="">Número de Télefono</label>
                                        <input type="text" style="width: 500px; height: 40px;">
                                    </div>
                                </div>
                    
                    
                                <div class="usuario" style="margin-left: 35px;">
                                    <div>
                                        <label for="">Tipo de Documento</label>
                                        <select name="" id="" style="border: 1px solid #0077C6; width: 500px; height: 40px;">
                                            <option value="">CC</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="">Cuenta de Servicio</label>
                                        <input type="text" style="width: 500px; height: 40px;">
                                    </div>
                                </div>

                                <div class="usuario" style="margin-left: 35px;">
                                    <div>
                                        <label for="">Número de Documento</label>
                                        <input type="number" id="don" style="width: 500px; height: 40px;" placeholder="Ingresa el numero de Documento 1000842659">
                                    </div>
                                </div>

                                <div class="usuario" style="margin-left: 35px;">
                                    <div style="margin-left: 460px;">
                                        <button style="background: #00C2DF; font-size: 15px; color: #fff; border: none; border-radius: 5px; height: 40px;" onclick="consult();">Consultar</button>
                                    </div>
                                </div>
                    
                    </div>  
                    
                </div>

                <div id="con2" style="display: none; margin-top: 30px; margin-left: 90px; border: 2px solid #F36F31; border-radius: 15px; width: 65.2%; height: 63.8%; padding-bottom: 35px; margin-bottom: 50px;">

                    <table class="table-general table-sopor" id="tab-inic" style="width: 100%;">
                        <tr>
                            <th>Producto</th>
                            <th>Cuenta Servicio</th>
                            <th>Número de Telefono</th>
                            <th>Tecnología</th>
                            <th>Soporte</th>
                        </tr>
                        <tr class="row-bl">
                            <td>3PLAY 30M SILVER 1</td>
                            <td>1-S44P-136</td>
                            <td>60120354851</td>
                            <td>FTTH</td>
                            <td>Dar Soporte</td>
                        </tr>
                        <tr>
                            <td>LINEA TELEFONICA</td>
                            <td>1-S44P-136</td>
                            <td>60120354851</td>
                            <td>FTTH</td>
                            <td>Dar Soporte</td>
                        </tr>
                        <tr class="row-bl">
                            <td>INTERNET</td>
                            <td>1-S44P-136</td>
                            <td>60120354851</td>
                            <td>FTTH</td>
                            <td>Dar Soporte</td>
                        </tr>
                        <tr>
                            <td>TELEVISION</td>
                            <td>1-S44P-136</td>
                            <td>60120354851</td>
                            <td>FTTH</td>
                            <td>Dar Soporte</td>
                        </tr>
                        <tr class="row-bl">
                            <td>LINEA ARRANQUE</td>
                            <td>CS-242459786</td>
                            <td>SR-54862351</td>
                            <td>FTTH</td>
                            <td><a href="./reportarFallaFTTH.php" style="color: #F36F31; text-decoration: underline;">Dar Soporte</a></td>
                        </tr>
                    </table>

                </div>

            </div>
        
        </div>

    </div>

    

        <div class="alert-flotante" id="alert-flotante">
            <div class="etb-flotant etb-flotant-login" id="etb-flotant">
                <img src="../../../images/ETB.svg" alt="">
            </div>
            <div class="mensaje-parlante msg-parl-log" id="mensaje-parlante">
                <p id="text-msg-hab">
                    <div class="lds-ellipsis" id="wait-text"><div></div><div></div><div></div><div></div></div>
                </p>
            </div>
            <div class="con-close-alert" onclick="ocultarHablador()">
                <img src="../../../images/cross_small.svg" alt="">
            </div>
        </div>

        <div class="alert-flotante" id="alert-flotante2">
            <div class="etb-flotant etb-flotant-login" id="etb-flotant2" style="position: relative; left: 600px; bottom: 1080px;">
                <img src="../../../images/ETB.svg" alt="">
            </div>
            <div class="mensaje-parlante msg-parl-log" id="mensaje-parlante2" style="position: relative; left: 600px; bottom: 730px; height: 800px; width: 500px;">
                <p id="text-msg-hab2">
                    <div class="lds-ellipsis" id="wait-text2"><div></div><div></div><div></div><div></div></div>
                </p>
            </div>
                <img src="../../../images/cross_small.svg" alt="">
            </div>
        </div>

        <div class="modal fade modales-soporte" tabindex="-1" id="modal-reapro-serv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><span id="tittle-main-exit">ACC_BTN_</span><span id="titulo-alerta-corr"></span></h5>
                            </div>
                            <div class="modal-body">
                                <h3>Operación realizada exitosamente</h3>
                                <br>
                                <p id="contenido-alerta-cor"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal">Aceptar</button>
                            </div>
                        </div>
                    </div>
        </div>

        <div class="modal fade modales-soporte" tabindex="-1" id="modal-reapro-serv2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #0077C6;">
                                <h5 class="modal-title"> <span style="font-weight: 500;">Campos de entrada para Consulta</span> <br> <span id="tittle-main-exit">PING LAN CLIENTEPING LAN CLIENTE</span><span id="titulo-alerta-corr"></span></h5>
                            </div>
                            <div class="modal-body">
                                <div>
                                <span style="color: #FF5C39; margin-right: 15px;">Url o IP:</span>
                                <input type="text" style="color: #00A7CC; border-color: #00A7CC;">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal" style="background: #00A7CC; color: white; border: none; border-radius: 10px; height: 35px;">Aceptar</button>
                            </div>
                        </div>
                    </div>
        </div>

        <div class="modal fade modales-soporte" tabindex="-1" id="modal-exito-solucionado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
                <div class="modal-dialog modal-dialog-centered modal-dialog-exito-s">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><span id="tittle-main-exit-s">ACTUALIZACIÓN DE LA VISITA</span><span id="titulo-alerta-corr-s"></span></h5>
                        </div>
                        <div class="modal-body">
                            <h3>Operación realizada exitosamente</h3>
                            <br>
                            <p id="contenido-alerta-cor-s">Se actualizará la información de la visita</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn_exito">Aceptar</button>
                        </div>
                    </div>
                </div>
        </div>

        <div class="modal fade modales-soporte2" tabindex="-1" id="modal-exito-solucionado2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-exito-s2">
                <div class="modal-content2">
                    <div class="modal-header">
                        <h5 class="modal-title"><span id="tittle-main-exit-s">Reaprovionamiento</span><span id="titulo-alerta-corr-s"></span></h5>
                    </div>
                    <div class="modal-body">
                        <div class="items-info items-sopor" id="ite2">
                            <div class="cabecera">
                                <h5>
                                    <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                    Reaprovisionar</h5>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_info_sf" onclick="alertAudio('au_info_sf', 'img_info_sf', 1, 1)">
                                <audio id="au_info_sf" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_info_sf.mp3">
                                </audio>
                            </div>
                            <div class="body-items-inf2">
                                <div class="contet" id="con-sopo-info">  
                                    <ul>       
                                    <li>NET<input type="radio"></li>
                                    <li>VOZ<input type="radio"></p></li>
                                    <li>IPTV<input type="radio"></p></li>
                                    <li>PDS<input type="radio"></p></li>
                                    </ul>
                                </div>
                                <br>
                                <button onclick="res();" type="button" class="res">Reaprovisionar Servicio</button>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="btn_exito3();" class="res2">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modales-soporte2" tabindex="-1" id="modal-exito-solucionado22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-exito-s2">
                <div class="modal-content2">
                    <div class="modal-header">
                        <h5 class="modal-title"><span id="tittle-main-exit-s">Reaprovionamiento</span><span id="titulo-alerta-corr-s"></span></h5>
                    </div>
                    <div class="modal-body">
                        <div class="items-info items-sopor" id="ite2">
                            <div class="cabecera">
                                <h5>
                                    <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                    Reaprovisionar</h5>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_info_sf" onclick="alertAudio('au_info_sf', 'img_info_sf', 1, 1)">
                                <audio id="au_info_sf" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_info_sf.mp3">
                                </audio>
                            </div>
                            <div class="body-items-inf2">
                                <div class="contet" id="con-sopo-info">  
                                    <ul>       
                                    <li>NET<input type="radio"></li>
                                    <li>VOZ<input type="radio"></p></li>
                                    <li>IPTV<input type="radio"></p></li>
                                    <li>PDS<input type="radio"></p></li>
                                    </ul>
                                </div>
                                <br>
                                <button type="button" class="res" onclick="modalExitoSoporteSolucionado2();habladorText();">Reaprovisionar Servicio</button>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="btn_exito3();" class="res2">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-success-sim" tabindex="-1" id="modal-info-soluci">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">INFORMACIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <p>Debe diligenciar los campos de medio de notificación</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" onclick="btn_solucionPartII();">ACEPTAR</button>
                        </div>
                    </div>
                </div>
        </div>

        <div class="modal modal-success-sim" tabindex="-1" id="modal-info-soluci2" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INFORMACIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p>Operación realizada con exito</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-fa" onclick="btn_fa();">ACEPTAR</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-success-sim" tabindex="-1" id="modal-reapro" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INFORMACIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p>Se ha reaprovicionado el servicio del Usuario</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="btn_exito4();">ACEPTAR</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-success-sim" tabindex="-1" id="modal-pre" style="z-index: 893748;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">PRECAUCIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p>Existen campos de informacion vacios, porfavor verifique los datos del solicitante</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" onclick="btn_solucion2PartII();">ACEPTAR</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-success-sim" tabindex="-1" id="modal-ace" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INFORMACIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p>Contacto guardado con exito</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="btn_sig2()">ACEPTAR</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modales-soporte" tabindex="-1" id="modal-exito-solucionado3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-exito-s">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><span id="tittle-main-exit-s">ACTUALIZACIÓN DE LA VISITA</span><span id="titulo-alerta-corr-s"></span></h5>
                    </div>
                    <div class="modal-body">
                        <h3>Operación realizada exitosamente</h3>
                        <br>
                        <p id="contenido-alerta-cor-s">Se actualizará la información de la visita</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="modalExitoSoporteSolucionado3();">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modales-soporte" tabindex="-1" id="modal-exito-solucionado44" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false" style="left: -230px; top: -100px;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-exito-s">
                <div class="modal-content" style="position: relative; bottom: 50px; right: 50px; height: 650px;">
                    <div class="modal-header" style="background-color: #00A7CC;">
                        <h5 class="modal-title"><span id="tittle-main-exit-s">Historial CUN</span><span id="titulo-alerta-corr-s"></span></h5>
                    </div>
                    <div class="modal-body" style=" height: 400px;">
                        <div style="position: relative; right: 200px; bottom: 45px;">
                        <textarea name="" id="des3" cols="30" rows="10" style="width: 200px; height: 30px;  position: relative; top: 10px;"></textarea>  
                        <button type="button" style="width: 75px; background-color: #00C2DF; border-radius: 5px; border: 2px solid #00C2DF; color: #fff;">Buscar</button>
                        <button type="button" style="background: #FF5E00; border: 2px solid #FF5E00; border-radius: 10px; color: #fff; left: 362px; position: relative;" onclick="btn_sig();">Nuevo</button>
                        </div>
                        <p style="top: 0px; position: relative;color: #FF5E00; right: 275px;">Heredar CUN</p>
                        <div>
                        <p style="position: relative; left: 97px; top: 45px;">Buscar:</p>
                        <textarea name="" id="des3" cols="30" rows="10" style="width: 200px; height: 30px; position: relative; left: 232px;"></textarea>  
                        </div>
                        <div class="table-solui" style="bottom: 20px; position: relative;">
                            <table class="table-general table-sopor" style="width: 200px;">
                                    <tr>
                                        <th>Sistema</th>
                                        <th>Número Orden</th>
                                        <th>CUN</th>
                                        <th>Fecha CUN</th>
                                        <th>Número de Conexion</th>
                                        <th>Producto</th>
                                        <th>Causal</th>
                                        <th>Sintomas</th>
                                        <th>Seleccionar</th>
                                    </tr>
                                    <tr class="row-bl">
                                        <td colspan="9">Ningún dato disponible en esta tabla</td>
                                    </tr>
                            </table>
                        </div>
                        <p style="position: relative; right: 110px; bottom: 25px;">Mostrando registros del 0 al 0 de un total de 0 registros</p>
                        <div>
                        <button type="button" onclick="" style="width: 100px; background-color: transparent; position: relative; left: 232px; bottom: 70px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px;">Anterior</button>
                        <button type="button" onclick="" style="width: 100px; background-color: transparent; position: relative; left: 228px; bottom: 70px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0;;">Siguiente</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modales-soporte" tabindex="-1" id="modal-serv-ont-act" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Campos de entrada para <b id="tittle-ont-sop"></b></h5>
                        </div>
                        <div class="modal-body" id="con-modal-ont-sopo">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-ont-sopo btn btn-primary">Aceptar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Modal flujo -->
            <div class="modal fade" id="modal-flujo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="top: 100px;">
                <div class="modal-dialog" id="modal-dialog-flujo">
                <div class="modal-content">
                    <div class="modal-header" id="btn-close-flujo" onclick="btn_flujoheader(),ocultarHablador();">
                    <h1 class="modal-title fs-5 header-modal-flujo" id="staticBackdropLabel" style="color: while;">Flujo<div><i class="fa-regular fa-hand-pointer" style="color: #ffffff;"></i> Click para cerrar</div></h1>
                    </div>
                    <div class="modal-body">
                    <iframe src="https://etb.my.salesforce-sites.com/FTTH3/FG_FTTH3" frameborder="0" class="recomendador"></iframe>
                    </div>
                </div>
                </div>
            </div>
            <!-- Modal flujo -->

            <div class="modal fade modal-loading" tabindex="-1" id="modal-loading" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">PROCESANDO TU PETICIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <div class="con-spiner">
                                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                            </div>
                            <div class="text-spiner"><p>Por favor no cierres la ventana</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-loading" tabindex="-1" id="modal-info" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">INFORMACIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <div class="con-spiner" style="position: relative; top: 5px; left: 85px;">
                                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-loading" tabindex="-1" id="modal-info2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">INFORMACIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <div class="con-spiner" style="position: relative; top: 5px; left: 85px;">
                                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                                <p style="color: #00A7CC;">Agendando</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal modal-success-sim" tabindex="-1" id="modal-info3" data-bs-backdrop="static" data-bs-keyboard="false" style="z-index: 893748;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">INFORMACIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <p style="color: #00A7CC;">Cliente tiene beneficio de AP sin costo, favor gestionar</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="agen2()">ACEPTAR</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal modal-success-sim" tabindex="-1" id="modal-info4" data-bs-backdrop="static" data-bs-keyboard="false" style="z-index: 893748;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">INFORMACIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <p style="color: #00A7CC;">Mensaje: Agenda Creada con Exito. Remedy: Respuesta REMEDY Codigo respuesta: 1 Descripción: INC000012311 
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="agen3()">ACEPTAR</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-loading" tabindex="-1" id="modal-info5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">INFORMACIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <div class="con-spiner" style="position: relative; top: 5px; left: 85px;">
                                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                                <p style="color: #00A7CC;">Cargando pagina principal</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="modal modal-success-sim" tabindex="-1" id="modal-fase1">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">ESCUELA ETB</h5>
                    </div>
                    <div class="modal-body">
                    <p>Has resolvido con exito la FALLA FTTH del simulador SUMA, recuerda que siempre esta a tu disposicion y cuentas con intentos ilimitados :)</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.href ='../../menu/menuSUMA.html'">ACEPTAR</button>
                    </div>
                </div>
                </div>
        </div>

        <div class="modal modal-success-sim" tabindex="-1" id="modal-ad" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">INFORMACIÓN</h5>
                        </div>
                        <div class="modal-body">
                            <p>Debe diligenciar los campos de medio de notificación</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="modalExitoSoporteSolucionado2()">ACEPTAR</button>
                        </div>
                    </div>
                </div>
        </div>

                                            <!-- Modal Password incorrecta -->
                    <div class="modal modal-susc" tabindex="-1" id="ups" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ADVERTENCIA</h5>
                                </div>
                                <div class="confirmacion">
                                    <br>
                                    <p style="margin: 5px 5px 20px 5px;">Parece que estas realizando el simulador por fuera de la ESCULA ETB, te recomendamos hacerlo por medio de la plataforma, 
                                    para evitar incidentes innesesarios.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Password incorrecta -->

    <script src="../../../bootstrap/jquery.js"></script>
    <script src="../../../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../../bootstrap/typed.js"></script>
    <script src="../../../../Controller/suma/main.js"></script>
    <script src="../../../../Controller/suma/FTTH/soporteFTTH.js"></script>
    <script src="../../../../Controller/security/FTTH5/anti-cheat-ftth2.js"></script>

    <script>
        habladorText('Ingresa el numero de documento en su correspondiente casilla. <br> Numero de Documento: 1000842659')
    </script>

</body>
</html>