<!DOCTYPE html>
<html lang="en" id="fond" style="overflow-y: hidden;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
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
                    <h5>CREANDO PQR: MDM-PQR-3939228</h5>
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
                            <option value="3">INTERNET</option>
                            <option value="4">TELEVISION</option>
                            <option value="5">PAQUETE</option>
                            <option value="6" style="background-color: rgb(192, 192, 192);">LINEA BASICA</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">Causal</label>
                        <select name="optagenda" id="ages4">
                            <option value="0">Selecione...</option>
                            <option value="1">BAJA CALIDAD DEL SERVICIO</option>
                            <option value="2" style="background-color: rgb(192, 192, 192);">FALLA DE VOZ</option>
                            <option value="3">SIN VOZ</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">Sintoma</label>
                        <select name="optagenda" id="ages5">
                            <option value="0">Selecione...</option>
                            <option value="1">PROBLEMA EQUIPO DEL CLIENTE</option>
                            <option value="2" style="background-color: rgb(192, 192, 192);">SIN TONO -F</option>
                        </select><span style="color: red; position: relative; left: 275px; bottom: 40px;">*</span>
            
                        <label for="" class="label">CUN</label>
                        <select name="optagenda" class="label2" id="label2">
                            <option id="cun-no-rel" value="0"></option>
                            <option id="cun-rel" value="1" style="display: none; background-color: #c0c0c0;">4347240001063768</option>
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
        
        <div class="main-principal-portal" id="main-co">
    
        <div class="content-p" id="content-s-main"> 
                            <table class="table-general table-sopor" id="tab-inic" style="width: 400px;">
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
                            </table>

                            <div class="modal-content" id="modal-soluic" style="width: 100%; position: relative; bottom: 20px; left: 0; display: none;">
                            <!-- Contenido del modal -->
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
                                        <p id="nomCli">CLAID MUSS</p>
                                        <p id="docCli">1000842659</p> 
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
                                        <button type="button" class="btn_clasic btn_orage_bg" id="btn-solucion" onclick="btn_solucion_2();">Aceptar</button>
                                    </div>
                                    </div>
                                </div>

                            <h4>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_general_sf" onclick="alertAudio('au_general_sf', 'img_general_sf', 1, 0)">

                                <audio id="au_general_sf" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_general_sf.mp3">
                                </audio> 
                                Soporte Primer Nivel</h4>

                            <!-- Items -->

                                    <div class="imgmenu">

                                    <img class="img1" src="../../../images/speaker.png" alt="">
                                    <img src="../../../images/menuss.png" alt="">
                                    <img src="../../../images/docs.png" alt="">
                                    <img src="../../../images/stadis.png" alt="">
                                    <img src="../../../images/db2.png" alt="">
                                    <img src="../../../images/stadis2.png" alt="">
                                    <img src="../../../images/bolsa-de-la-compra.png" alt="">
                                    <img src="../../../images/bolsa-de-la-compra2.png" alt="">

                                    </div>

                                    <div style="overflow-y: scroll; max-height: 50%; height: 1050px;">

                                        <div class="soportepn">

                                            <div class="items-info items-sopor" style="margin-top: 20px;">
                                                <div class="cabecera">
                                                    <h5>
                                                        <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                        INFORMACIÓN</h5>
                                                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_info_sf" onclick="alertAudio('au_info_sf', 'img_info_sf', 1, 1)">
                                                    <audio id="au_info_sf" controls class="audio" style="display: none;">
                                                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_info_sf.mp3">
                                                    </audio>
                                                </div>
                                                <div class="body-items-inf">
                                                    <div class="contet" id="con-sopo-info">
                                                        <label style="grid-column: 1/4;">Teléfono</label>
                                                        <p  style="grid-column: 1/4;"></p>

                                                        <label for=""  style="grid-column: 4/7; grid-row:1/2;">Nombre Suscriptor</label>
                                                        <p id="nombre-ti" style="grid-column: 4/7; grid-row:2/3;"></p>

                                                        <label for="" style="grid-column: 1/4;">Estado Cuenta facturación</label>
                                                        <p style="grid-column: 1/4;"></p>

                                                        <label for="" style="grid-column: 4/7; grid-row:3/4;">Estado Cuenta Servicio</label>
                                                        <p style="grid-column: 4/7; grid-row:4/5;"></p>

                                                        <label for="" class="sub-info-so" style="grid-column: 2/3;">INC Falla Masiva</label>
                                                        <p  class="sub-info-so"  style="grid-column: 3/7;">Dato no existente</p>

                                                        <label for="" class="sub-info-so" style="grid-column: 3/4;">Fecha Creacion FM</label>
                                                        <p  class="sub-info-so" style="grid-column: 4/7;">Dato no existente</p>

                                                        <label for="" class="sub-info-so" style="text-align: right;">TES</label>
                                                        <p  class="sub-info-so" style="padding-left: 50px;">Dato no existente</p>

                                                        <label for="" class="sub-info-so" style="grid-column: 4/7; padding-left: 20px;">Cantidad INC Relacionados</label>
                                                        <p  class="sub-info-so">Dato no existente</p>

                                                        <label for="" class="sub-info-so" style="grid-column: 5/7;">Grupo Asignado INC Falla Masiva</label>
                                                        <p  class="sub-info-so" style="grid-column: 1/3;">Dato no existente</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="items-info items-sopor">
                                                <div class="cabecera">
                                                    <h5>
                                                        <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                        INFRAESTRUCTURA ACCESO</h5>
                                                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_infra_sf" onclick="alertAudio('au_infra_sf', 'img_infra_sf', 1, 2)">
                                                    <audio id="au_infra_sf" controls class="audio" style="display: none;">
                                                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_infra_sf.mp3">
                                                    </audio>
                                                </div>
                                                <div class="body-items-inf item-larg">
                                                    <div class="contet hide-body con-tree-colms" id="con-sopo-infro">
                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>EQUIPOS DE ACCESO</th>
                                                                    <th>INVENTARIO</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Fabricante</td>
                                                                        <td>ZTE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Hostname</td>
                                                                        <td>BOSIZTC60104003</td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>Central</td>
                                                                        <td>SANTA INES</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Puerto OLT</td>
                                                                        <td>PON PORTIO</td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>NAP</td>
                                                                        <td>NICU31_G46:8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>VLAN ACCESO</td>
                                                                        <td>84</td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>VLAN INTERNET</td>
                                                                        <td>2838</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>UV INTERNET</td>
                                                                        <td>300</td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>VLAN VOZ</td>
                                                                        <td>60</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>VOIP IP</td>
                                                                        <td>IP 10.211.232.145</td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>VLAN TV</td>
                                                                        <td>531</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>MODEM</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Marca</td>
                                                                        <td>ZTE</td>
                                                                        <td>-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Modelo</td>
                                                                        <td>ZTE-F680-1FXS</td>
                                                                        <td>-</td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>Serial</td>
                                                                        <td>ZTEGD0348FB8</td>
                                                                        <td class="dell-sem">ZTEGD0348FBB <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Mac</td>
                                                                        <td>7426FFESE7EE</td>
                                                                        <td>-</td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>Versión Firmware</td>
                                                                        <td>V6.0.22</td>
                                                                        <td>1-1-2-1</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>SEÑAL</th>
                                                                    <th>PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                <tr class="row-bl">
                                                                    <td>Estado Modem</td>
                                                                    <td>UP</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Potencia</td>
                                                                    <td class="dell-sem">-22.220 <div class="semaforo semaforo-co"></div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="items-actions-soporte six__actions">

                                                            <button style="background: #00C2DF; font-size: 15px;" id="btn-consul-equipos" onclick="habladorText('Muestra algunas imágenes sobre la ONT instalada')">Imagen del Equipo</button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_img__ont_sf" onclick="alertAudio('au_img__ont_sf', 'img_img__ont_sf', 1, 4)">
                                                            <audio id="au_img__ont_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_img__ont_sf.mp3">
                                                            </audio>
                                                            <span></span>
                                                            <button style="background: #FF5E00;" onclick="action_fra();">Acciones <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_act_pruebaver_sf" onclick="alertAudio('au_act_pruebaver_sf', 'img_act_pruebaver_sf', 1, 5)">
                                                            <audio id="au_act_pruebaver_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_act_in_sf.mp3">
                                                            </audio>

                                                            <button style="background: #00A7CC;"><i class="fa-solid fa-rotate" style="color: #ffffff;"></i></button>

                                                            <div class="dropdrown-act" id="dropdrown-act-infr">
                                                                <label for="" onclick="habladorText('Esto ejecutará un proceso interno, el cual reiniciará el modem.')">Reset de Modem</label>
                                                                <label for="" onclick="modalExitoSoporte('REINICIO DE FABRICA', false, false), habladorText('Esto ejecutará un proceso interno, el cual reiniciará la configuración de fabrica.')">Reinicio de Fábrica</label>
                                                                <label for="" onclick="modalExitoSoporte('REAPROVISIONAR_SERVICIOS', false, false), habladorText('Esto ejecutará un proceso interno, Normalizará todos los servicios, por consiguiente todos los semaforos serán refrescados.')">Reaprovisionar Servicios</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="items-info items-sopor">
                                                <div class="cabecera">
                                                    <h5>
                                                        <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                        PRUEBA RÁPIDA DE VERIFICACIÓN</h5>
                                                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_pruebaver_sf" onclick="alertAudio('img_pruebaver_sf', 'img_pruebaver_sf', 5, 2)">
                                                    <audio id="au_pruebaver_sf" controls class="audio" style="display: none;">
                                                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/Paso 1/643358c519b8e527766907_JCRbpcWn.mp3">
                                                    </audio>
                                                </div>
                                                <div class="body-items-inf item-larg">
                                                    <div class="contet con-tree-colms" id="con-sopo-prueba-ra">
                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>MEDIO DE ACCESO</th>
                                                                    <th>ESTADO DE PLATAFORMAS</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Estado Modem</td>
                                                                        <td class="info__sem">UP <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Potencia</td>
                                                                        <td class="info__sem">-22.292 <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table" style="grid-column: 1/2;">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>MODEM</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Serial</td>
                                                                        <td>ZTE</td>
                                                                        <td class="info__sem">#NOTFOUND <div class="semaforo semaforo-error"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table" style="grid-column: 1/2;">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>ATRIBUTO</th>
                                                                    <th style="min-width: 400px;">PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>IP ACS</td>
                                                                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ESTADO ACS</td>
                                                                        <td>Inactivo</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table" style="grid-column: 2/3; grid-row:1/2">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>INTERNET</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMAS</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Velocidad Bajada</td>
                                                                        <td>300M</td>
                                                                        <td class="info__sem">300M <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Velocidad Subida</td>
                                                                        <td>300M</td>
                                                                        <td class="info__sem">300M <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table" style="grid-column: 2/3; grid-row:2/3">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>TELEVISIÓN</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Estado</td>
                                                                        <td>Activo</td>
                                                                        <td class="info__sem">Activo <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table" style="grid-column: 2/3; grid-row:3/4">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>SVA</th>
                                                                    <th>SERIAL INVENTARIO</th>
                                                                    <th>SERIAL PLATAFORMA</th>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                        <div class="con-table" style="grid-column: 3/4; grid-row:1/2">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>VOZ</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMAS</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Estado linea ACS</td>
                                                                        <td>-</td>
                                                                        <td class="info__sem">Up <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Estado Línea IMS</td>
                                                                        <td>Activo</td>
                                                                        <td class="info_sem">Activo</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table" style="grid-column: 3/4; grid-row:2/3">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>STB</th>
                                                                    <th>SERIAL INVENTARIO</th>
                                                                    <th>MAC INVENTARIO</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>1- <br>KC031WJ; <br>1- <br>КСОЗІНН</td>
                                                                        <td>(21500821467UD9260509) <br> 21500821467UF6238665</td>
                                                                        <td>OC565C03 <br> OC565C03</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="items-actions-soporte">
                                                            <button style="background: #FF5E00;" onclick="action_prueba_d();">Acciones <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_act_in_sf" onclick="alertAudio('au_act_in_sf', 'img_act_in_sf', 5, 5)">
                                                            <audio id="au_act_in_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte">
                                                            </audio>

                                                            <button style="background: #00A7CC;"><i class="fa-solid fa-rotate" style="color: #ffffff;"></i></button>
                                                            <div class="dropdrown-act" id="dropdrown-act-prueba">
                                                                <label for="" onclick="modalExitoSoporte('RESET_MODEM', false, false), habladorText('Esto ejecutará un proceso interno, el cual reiniciará el modem.')">Reset de Modem</label>
                                                                <label for="" onclick="modalExitoSoporte('REINICIO DE FABRICA', false, false), habladorText('Esto ejecutará un proceso interno, el cual reiniciará la configuración de fabrica. <br> Precuacion: Aunque esta opcion este disponible en la plataforma, se recomienda al Asesor, NO EJECUTAR ESTA OPCION, en escenarios de asistencia REAL.')">Reinicio de Fábrica</label>
                                                                <label for="" onclick="modalExitoSoporte('REAPROVISIONAR_SERVICIOS', false, false), habladorText('Esto ejecutará un proceso interno, Normalizará todos los servicios, por consiguiente todos los semaforos serán refrescados.')">Reaprovisionar Servicios</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Internet</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Estado Voz</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Estado Modem</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="items-info items-sopor">
                                                <div class="cabecera">
                                                    <h5 onclick="itemInfoSoporte('con-sopo-inter')">
                                                        <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                        INTERNET</h5>
                                                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_it_sf" onclick="alertAudio('au_it_sf', 'img_it_sf', 1, 11)">
                                                        <audio id="au_it_sf" controls class="audio" style="display: none;">
                                                            <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_it_sf.wav">
                                                        </audio>
                                                </div>
                                                <div class="body-items-inf">
                                                    <div class="contet hide-body con-tree-colms" id="con-sopo-inter">
                                                        <div class="con-cards-soporte" style="grid-column: 1/4;">

                                                            <div class="cards-soporte">
                                                                <h2>Fabricante ONT</h2>
                                                                <p>ALCATEL</p>
                                                            </div>
                        
                                                            <div class="cards-soporte">
                                                                <h2>Tipo Servicio</h2>
                                                                <p>Sin IP Fija</p>
                                                            </div>

                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>ESTADOS</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMAS</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Velocidad Bajada</td>
                                                                        <td>300M</td>
                                                                        <td class="dell-sem">300M<div class="semaforo semaforo-co"></div></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Velocidad Subida</td>
                                                                        <td>300M</td>
                                                                        <td class="dell-sem">300M<div class="semaforo semaforo-co"></div></td>
                                                                    </tr>

                                                                    <tr class="row-bl">
                                                                        <td>Sesión Activa ACS</td>
                                                                        <td>SR-21490464</td>
                                                                        <td class="dell-sem"><span id="sesionActiva">-</span><div class="semaforo semaforo-co" id="semafaro-sesion"></div></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Última conexión ACS</td>
                                                                        <td>-</td>
                                                                        <td class="dell-sem">2023-04-02T16:26:10<div class="semaforo semaforo-co"></div></td>
                                                                    </tr>

                                                                    <tr class="row-bl">
                                                                        <td>VLAN Internet</td>
                                                                        <td>-</td>
                                                                        <td class="dell-sem">Activo<div class="semaforo semaforo-co"></div></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Usuario PPPOE ACS</td>
                                                                        <td>SR-21490464</td>
                                                                        <td class="dell-sem">SR-21490464<div class="semaforo semaforo-co"></div></td>
                                                                    </tr>

                                                                    <tr class="row-bl">
                                                                        <td>DHCP Estado</td>
                                                                        <td>-</td>
                                                                        <td class="dell-sem">-<div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>  
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>SERVICIOS ADICIONALES</th>
                                                                <tbody>
                                                                    
                                                                </tbody>
                                                            </table>  
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>PAQUETES IP</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMAS</th>
                                                                <tbody>
                                                                    
                                                                </tbody>
                                                            </table>  
                                                        </div>

                                                        <div class="items-actions-soporte items__actions_four">
                                                            <button style="background: #FF5E00;" onclick="action_interne();">Acciones <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_act_it_sf" onclick="alertAudio('au_act_it_sf', 'img_act_it_sf', 1, 13)">
                                                            <audio id="au_act_it_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_act_it_sf.wav">
                                                            </audio>
                                                            
                                                            <div class="dropdrown-act drowndown__fon" id="dropdrown-act-internet">
                                                                <label for="" onclick="modalExitoSoporte('INT_NORMUSER', false, false), habladorText('Permite sincronizar el usuario de acuerdo a la información de inventario')" id="btn-session-actived">Normalizar Usuario Navegación</label>
                                                                <label for="" onclick="habladorText('Permite sincronizar las velocidades de acuerdo a la ordén')">Normalizar Velocidades</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar estado(Cliente)</label>
                                                                <label for="">CAMBIO SEGMENTO RED LAN DE ONT O MODEM</label>
                                                                <label for="" onclick="modalExitoSoporte('CAMBIO_ESTADO_REDWIFI', false, false), habladorText('Permite generar un cambio de estado de la red wifi en las plataformas')">CAMBIO ESTADO DE RED WIFI</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Apertura de puertos</label>
                                                                <label for="" onclick="habladorText('Sobrescribe los valores guardados en ACS en la ONT/CPE')">Reaprovisionar Servicio - ACS</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Reconfiguración Puerto 3</label>
                                                            </div>


                                                            <button style="background: #00A7CC;" onclick="btn_consul_internet();">Consultas  <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_consultas_it_sf" onclick="alertAudio('au_consultas_it_sf', 'img_consultas_it_sf', 1, 12)">
                                                            <audio id="au_consultas_it_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_consultas_it_sf.wav">
                                                            </audio>

                                                            <div class="dropdrown-act" id="dropdrown-act-consulta-interne">
                                                                <label for="" id="btn-consul-ping" onclick="habladorText('El sistema de manera interna, hace un ping a una página web y brinda las estadisticas del diagnostico generadas en busca de corroborar la estabilidad y velocidad de la conexión.')">PING</label>
                                                                <label for="" id="btn-consul-ping_lan" onclick="habladorText('Debe ingresar el URL de una página web, para que se generé un diagnostico ping con la red y así conocer las estadisticas generadas en busca de corroborar la estabilidad y velocidad de la conexión.')">PING LAN CLIENTE</label>
                                                                <label for="" id="btn-lan" onclick="habladorText('Proporciona información sobre la red LAN')">LAN</label>
                                                                <label for="" id="btn-wan" onclick="habladorText('Proporciona información sobre la red WAN')">WAN</label>
                                                                <label for="" id="btn-equipos-con" onclick="habladorText('Proporciona información sobre los dispositivos conectados a la red')">Equipos Conectados</label>
                                                                <label for="" id="change-name-wifi" onclick="habladorText('Permite cambiar el nombre de la red (SSID), debe tener un minimo de un caracter hasta 32 caracteres')">WIFI (Red)</label>
                                                                <label for="" id="change-pass-wifi" onclick="habladorText('Permite cambiar la clave de la red, debe tener un minimo de ocho caracter hasta 63 caracteres')">WIFI (clave)</label>
                                                                <label for="" id="change-all-wifi" onclick="habladorText('Permite cambiar el nombre de la red (SSID) y clave')">WIFI (Red y clave)</label>
                                                                <label for="" id="btn-alepo" onclick="habladorText('Permite conocer información sobre la sesión establecida por cada modem. Información como La IP asociada al cliente, fecha y hora de inicio y el equipo por el se conecta')">ALEPO</label>
                                                                <label for="" id="btn-consulta-name-wifi" onclick="habladorText('Permite visualizar el nombre asociado a la red wifi del cliente')">NOMBRE DE RED WIFI</label>
                                                                <label for="" id="btn-consulta-estado-wifi" onclick="habladorText('Permite validar el estado de la red wifi')">ESTADO DE RED WIFI</label>
                                                            </div>

                                                            <button style="background: #00A7CC;"><i class="fa-solid fa-rotate" style="color: #ffffff;"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="items-info items-sopor">
                                                <div class="cabecera">
                                                    <h5 onclick="itemInfoSoporte('con-sopo-ajustes-wifi')">
                                                        <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                        Ajustes WIFI (ONT)</h5>
                                                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_aw_sf" onclick="alertAudio('au_aw_sf', 'img_aw_sf', 1, 14)">
                                                    <audio id="au_aw_sf" controls class="audio" style="display: none;">
                                                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_aw_sf.wav">
                                                    </audio>
                                                </div>
                                                <div class="body-items-inf">
                                                    <div class="contet hide-body con-tree-colms" id="con-sopo-ajustes-wifi">
                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>ESTADOS</th>
                                                                    <th>PLATAFORMAS</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Estado WIFI</td>
                                                                        <td class="dell-sem">Activo <div class="semaforo semaforo-co"></div></td>         
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Canal</td>
                                                                        <td class="dell-sem">Automático <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>SSID Visible</td>
                                                                        <td class="dell-sem">Activo <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td>Potencia WIFI</td>
                                                                        <td class="dell-sem">100 <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>DHCP Estado</td>
                                                                        <td class="dell-sem">Activo <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td>DHCP Lease Time (dd:HH:mm:ss)</td>
                                                                        <td class="dell-sem">01:00:00:00 <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr class="row-bl">
                                                                        <td>DHCP Router IP</td>
                                                                        <td class="dell-sem">192.168.0.1 <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>HOSTNAME</th>
                                                                    <th>IpAddress</th>
                                                                    <th>MACaddress</th>
                                                                    <th>SerialAP</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Archer_CS</td>
                                                                        <td class="dell-sem" style="color: var(--orange-etb);">192.168.0.3 <img src="../../../images/images-suma/laptop.svg" alt=""></td>
                                                                        <td>84-d8-1b-1e-a3-33</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>ESTADOS</th>
                                                                    <th>PLATAFORMAS</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Protocolo WIFI</td>
                                                                        <td class="dell-sem">b,g,n <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td>Nombre Red WIFI</td>
                                                                        <td class="dell-sem"><span id="Nombre-red-ont-so"></span> <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>

                                                                    <tr class="row-bl">
                                                                        <td>TKIPandAESEncryption</td>
                                                                        <td class="dell-sem"><span id="encrypt-table">Encriptación WIFI</span><div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="items-actions-soporte items__actions_four" style="border-top: 0px;">
                                                            <button style="background: #FF5E00;" onclick="action_ont();">Acciones <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_act_aw_sf" onclick="alertAudio('au_act_aw_sf', 'img_act_aw_sf', 1, 16)">
                                                            <audio id="au_act_aw_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_act_aw_sf.wav">
                                                            </audio>

                                                            <div class="dropdrown-act drowndown__fon" id="dropdrown-act-ont">
                                                                <label for="" id="change-name-ont" onclick="habladorText('Permite cambiar el nombre de la red (SSID), debe tener un minimo de un caracter hasta 32 caracteres')">Cambiar Nombre</label>
                                                                <label for="" id="change-pass-ont" onclick="habladorText('Permite cambiar la clave de la red, debe tener un minimo de ocho caracter hasta 63 caracteres')">Cambiar Contraseña</label>
                                                                <label for="" id="change-all-ont" onclick="habladorText('Permite cambiar el nombre de la red (SSID) y clave')">Cambiar Nombre y Contraseña</label>
                                                                <label for="" id="change-estado-wifi-ont" onclick="habladorText('Permite cambiar el estado wifi, debe selecionar el estado requerido en la lista desplegable')">Cambiar Estado WIFI</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Cambiar Estado de Red Visible</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Canal</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Potencia</label>
                                                                <label for="" id="change-encryp-ont" onclick="habladorText('Permite cambiar el tipo de encriptación, para esto es necesario que incgrese la nueva contraseña y el tipo de encriptación requerida')">Cambiar Tipo Encriptación</label>
                                                                <label for="" onclick="habladorText('Sobrescribe los valores guardados en ACS en la ONT/CPE')">Reaprovisionar Servicio - ACS</label>
                                                            </div>


                                                            <button style="background: #00A7CC;" onclick="btn_consul_ont();">Consultas  <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_consultas_aw_sf" onclick="alertAudio('au_consultas_aw_sf', 'img_consultas_aw_sf', 1, 15)">
                                                            <audio id="au_consultas_aw_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_consultas_aw_sf.wav">
                                                            </audio>

                                                            <div class="dropdrown-act" id="dropdrown-act-consulta-ont">
                                                                <label for="">PING</label>
                                                                <label for="">PING LAN CLIENTE</label>
                                                                <label for="">LAN</label>
                                                                <label for="">WAN</label>
                                                                <label for="">Equipos Conectados</label>
                                                                <label for="">WIFI (Red)</label>
                                                                <label for="">WIFI (clave)</label>
                                                                <label for="">WIFI (Red y clave)</label>
                                                                <label for="">ALEPO</label>
                                                                <label for="">NOMBRE DE RED WIFI</label>
                                                                <label for="">ESTADO DE RED WIFI</label>
                                                            </div>

                                                            <button style="background: #00A7CC;"><i class="fa-solid fa-rotate" style="color: #ffffff;"></i></button>
                                                        </div>

                                                        <div class="con-divisor-item con-tree-colms" style="grid-column: 1/4;">
                                                            <h3>Ajustes WIFI 5.0</h3>
                                                        </div>

                                                            <div class="con-table">
                                                                <table class="table-general table-sopor">
                                                                    <tr>
                                                                        <th>ESTADOS</th>
                                                                        <th>PLATAFORMAS</th>
                                                                    </tr>
                                                                    <tbody>
                                                                        <tr class="row-bl">
                                                                            <td>Estado WIFI (5.0)</td>
                                                                            <td class="dell-sem">Activo<div class="semaforo semaforo-co"></div></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Canal (5.0)</td>
                                                                            <td class="dell-sem">Automatico<div class="semaforo semaforo-co"></div></td>
                                                                        </tr>
                                                                        <tr class="row-bl">
                                                                            <td>SSID Visible (5.0)</td>
                                                                            <td class="dell-sem">Activo<div class="semaforo semaforo-co"></div></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Potencia WIFI (5.0)</td>
                                                                            <td class="dell-sem">100<div class="semaforo semaforo-co"></div></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="con-table">
                                                                <table class="table-general table-sopor">
                                                                    <tr>
                                                                        <th>ESTADOS</th>
                                                                        <th>PLATAFORMAS</th>
                                                                    </tr>
                                                                    <tbody>
                                                                        <tr class="row-bl">
                                                                            <td>Protocolo WIFI (5.0)</td>
                                                                            <td class="dell-sem">a.n.aC<div class="semaforo semaforo-co"></div></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Nombre Red WIFI (5.0)</td>
                                                                            <td class="dell-sem">Rodriguez Munoz 5GH ETB<div class="semaforo semaforo-co"></div></td>
                                                                        </tr>
                                                                        <tr class="row-bl">
                                                                            <td>Encriptación WIFI (5.0)</td>
                                                                            <td class="dell-sem">TKIPandAESEncryption<div class="semaforo semaforo-co"></div></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="items-actions-soporte" style="border-top: 0px;">
                                                                <button style="background: #FF5E00;" onclick="action_ont2();">Acciones <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_cin_act_aw_sf" onclick="alertAudio('au_cin_act_aw_sf', 'img_cin_act_aw_sf', 1, 16)">
                                                                <audio id="au_cin_act_aw_sf" controls class="audio" style="display: none;">
                                                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_act_aw_sf.wav">
                                                                </audio>

                                                            <div class="dropdrown-act drowndown__fon" id="dropdrown-act-ont2">
                                                                <label for="" id="change-name-ont" onclick="habladorText('Permite cambiar el nombre de la red (SSID), debe tener un minimo de un caracter hasta 32 caracteres')">Cambiar Nombre</label>
                                                                <label for="" id="change-pass-ont" onclick="habladorText('Permite cambiar la clave de la red, debe tener un minimo de ocho caracter hasta 63 caracteres')">Cambiar Contraseña</label>
                                                                <label for="" id="change-all-ont" onclick="habladorText('Permite cambiar el nombre de la red (SSID) y clave')">Cambiar Nombre y Contraseña</label>
                                                                <label for="" id="change-estado-wifi-ont" onclick="habladorText('Permite cambiar el estado wifi, debe selecionar el estado requerido en la lista desplegable')">Cambiar Estado WIFI</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Cambiar Estado de Red Visible</label>
                                                                <label for="" id="change-norm-wifi5" onclick="habladorText('Permite cambiar el canal por el cual esta trabajando el WIFI a 5ghz');">Normalizar Canal</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Potencia</label>
                                                                <label for="" id="change-encryp-ont" onclick="habladorText('Permite cambiar el tipo de encriptación, para esto es necesario que incgrese la nueva contraseña y el tipo de encriptación requerida')">Cambiar Tipo Encriptación</label>
                                                                <label for="" onclick="habladorText('Sobrescribe los valores guardados en ACS en la ONT/CPE')">Reaprovisionar Servicio - ACS</label>
                                                            </div>

                                                                <div class="dropdrown-act" id="dropdrown-act-consulta-ont">
                                                                    <label for="">PING</label>
                                                                    <label for="">PING LAN CLIENTE</label>
                                                                    <label for="">LAN</label>
                                                                    <label for="">WAN</label>
                                                                    <label for="">Equipos Conectados</label>
                                                                    <label for="">WIFI (Red)</label>
                                                                    <label for="">WIFI (clave)</label>
                                                                    <label for="">WIFI (Red y clave)</label>
                                                                    <label for="">ALEPO</label>
                                                                    <label for="">NOMBRE DE RED WIFI</label>
                                                                    <label for="">ESTADO DE RED WIFI</label>
                                                                </div>

                                                                <button style="background: #00A7CC;"><i class="fa-solid fa-rotate" style="color: #ffffff;"></i></button>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="items-info items-sopor">
                                                <div class="cabecera">
                                                    <h5 onclick="itemInfoSoporte('con-sopo-telefo')">
                                                        <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                        LINEA TELEFONICA</h5>
                                                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_lineaT_sf" onclick="alertAudio('au_lineaT_sf', 'img_lineaT_sf', 1, 6)">
                                                    <audio id="au_lineaT_sf" controls class="audio" style="display: none;">
                                                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_lineaT_sf.mp3">
                                                    </audio>
                                                </div>
                                                <div class="body-items-inf">
                                                    <div class="contet hide-body con-tree-colms" id="con-sopo-telefo">

                                                        <div class="con-cards-soporte" style="grid-column: 1/4;">
                                                            <div class="cards-soporte">
                                                                <h2>Telefono</h2>
                                                                <p>576017647268</p>
                                                            </div>
                                                    
                                                            <div class="cards-soporte">
                                                                <h2>ID servicios MMS</h2>
                                                                <p>SR-35728454</p>
                                                            </div>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>SUPLEMENTARIOS</th>
                                                                    <th>PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>
                                                                            Coferencia entre Tres;

                                                                            Contestador Virtual;

                                                                            Identificador de Llamadas

                                                                            Idenificador de Segunda Llamada;

                                                                            Llamada en Espera;

                                                                            Marcación Abreviada

                                                                            Marcación Redial
                                                                        </td>
                                                                        <td id="ton1" class="dell-sem" style="min-width: 250px;">-<div class="semaforo semaforo-error" id="semaforo-serv-secundarios"></div>
                                                                        </td>
                                                                        <td id="ton2" style="display: none;" class="dell-sem" style="min-width: 250px;">
                                                                            Coferencia entre Tres;

                                                                            Contestador Virtual;

                                                                            Identificador de Llamadas

                                                                            Idenificador de Segunda Llamada;

                                                                            Llamada en Espera;

                                                                            Marcación Abreviada

                                                                            Marcación Redial
                                                                        <div class="semaforo semaforo-co" id="semaforo-serv-secundarios"></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Transferencia de Llamada</td>
                                                                        <td class="dell-sem">Transferencia de Llamada <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>ESTADOS</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMAS</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Estado No Tel</td>
                                                                        <td>Activo</td>
                                                                        <td class="dell-sem">Normal, Sin Bloqueos <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Numero Tel Programado en Modem</td>
                                                                        <td>+576017647268</td>
                                                                        <td id="ton3" class="dell-sem">+576017647268 <div class="semaforo semaforo-error" id="semaforo-tel-modem"></div></td>
                                                                        <td id="ton4" style="display: none;" class="dell-sem">+576017647268 <div class="semaforo semaforo-co" id="semaforo-tel-modem"></div></td>
                                                                    </tr>

                                                                    <tr class="row-bl">
                                                                        <td>Registro linea</td>
                                                                        <td>-</td>
                                                                        <td class="dell-sem">Up <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="items-actions-soporte items__actions_four">
                                                            <button style="background: #FF5E00;" onclick="action_linea_t();">Acciones <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_act_lt_sf" onclick="alertAudio('au_act_lt_sf', 'img_act_lt_sf', 1, 8)">
                                                            <audio id="au_act_lt_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_act_lt_sf.mp3">
                                                            </audio>
                                                            <div class="dropdrown-act drowndown__fon" id="dropdrown-act-linea-t">
                                                                <label for="" onclick="inter3(), habladorText('Esto ejecutará un proceso interno, Normalizará todos los servicios, por consiguiente todos los semaforos serán refrescados.')" id="btn-norm-se-secun">Normalizar Servicios Suplementarios</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar CategorÃa Cliente</label>
                                                                <label for="" onclick="inter4(), habladorText('Normalizará el número telefonico que se encuentra configurado según el Modem')" id="btn-norm-tel-modem">Normalizar No. Tel Configurado en Modem</label>
                                                                <label for="" onclick="modalExitoSoporte('NORMALIZAR_LINEA_SIP', false, false), habladorText('Esta acción reiniciará el código secreto, para esto es necesario que ingrese el nuevo código en el formulario actual')">Reset CÃ³digo Secreto</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar la Linea Telefónica con bloqueo</label>
                                                                <label for="" onclick="modalExitoSoporte('NORMALIZAR_LINEA_SIP', false, false), habladorText('Esto ejecutará un proceso interno, Normalizará todos los servicios ACS, por consiguiente todos los semaforos serán refrescados.')">Reaprovisionar Servicio - ACS</label>
                                                            </div>

                                                            <button style="background: #00A7CC;" onclick="btn_consul_infra();">Consultas  <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_consultas_lt_sf" onclick="alertAudio('au_consultas_lt_sf', 'img_consultas_lt_sf', 1, 7)">
                                                            <audio id="au_consultas_lt_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_consultas_lt_sf.mp3">
                                                            </audio>
                                                            <div class="dropdrown-act" id="dropdrown-act-consulta">
                                                                <label for="" id="btn-validar-serv" onclick="habladorText('Proporciona información sobre el tiempo de respuesta del servicio.')">Validar Conectividad</label>
                                                                <label for="" id="btn-transferencia" onclick="habladorText('Proporciona información sobre el número de teléfono')">TRANSFERENCIA INMEDIATA</label>
                                                            </div>

                                                            <button style="background: #00A7CC;"><i class="fa-solid fa-rotate" style="color: #ffffff;"></i></button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="items-info items-sopor">
                                                <div class="cabecera">
                                                    <h5 onclick="itemInfoSoporte('con-sopo-tv')">
                                                        <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                        TELEVISIÓN</h5>
                                                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_tv_sf" onclick="alertAudio('au_tv_sf', 'img_tv_sf', 5, 9)">
                                                    <audio id="au_tv_sf" controls class="audio" style="display: none;">
                                                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/Paso 1/643358c519b8e527766907_JCRbpcWn.mp3">
                                                    </audio>

                                                </div>
                                                <div class="body-items-inf">
                                                    <div class="contet hide-body con-tree-colms" id="con-sopo-tv">
                                                        <div class="con-cards-soporte" style="grid-column: 1/4;">
                                                            <div class="cards-soporte">
                                                                <h2>Subscriber ID</h2>
                                                                <p>531271</p>
                                                            </div>
                        
                                                            <div class="cards-soporte">
                                                                <h2>ID servicios MSS</h2>
                                                                <p>1-4T307W</p>
                                                            </div>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>ESTADO</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Estado</td>
                                                                        <td>Activo</td>
                                                                        <td class="dell-sem"><span id="estado-tv">Activo</span><div class="semaforo semaforo-co" id="semaforo-estado-tv"></div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Plan</td>
                                                                        <td>PLAN BASICO</td>
                                                                        <td class="dell-sem">PLAN BASICO <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>ADICIONALES</th>
                                                                    <th>INVENTARIO</th>
                                                                    <th>PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>Canales</td>
                                                                        <td>PREMIUM HBO</td>
                                                                        <td class="dell-sem">PREMIUM HBO <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Servicios</td>
                                                                        <td>Grabador Virtual;<br>La TV de Ayer; <br>Pausa en Vivo </td>
                                                                        <td class="dell-sem">Grabador Virtual; <br> La TV de Ayer; <br> Pausa en Vivo <div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="con-table">
                                                            <table class="table-general table-sopor">
                                                                <tr>
                                                                    <th>STB</th>
                                                                    <th>SERIAL</th>
                                                                    <th>MAC <br> INVETARIO</th>
                                                                    <th>MAC <br> PLATAFORMA</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr class="row-bl">
                                                                        <td>1- 4T309M; 1- 4T309Z</td>
                                                                        <td>6534**234212; 6534**234217</td>
                                                                        <td>OC565C0392E4; 0C565C0392E9</td>
                                                                        <td class="dell-sem"><br>0C565C0392E4;<br> OC565C0392E9<br><br><div class="semaforo semaforo-co"></div></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>


                                                        <div class="items-actions-soporte seven__actions">
                                                            <button style="background: #00C2DF; font-size: 15px;" id="btn-consul-equipos2" onclick="habladorText('Muestra algunas imágenes sobre la ONT instalada')">Imagen del Equipo</button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_img_ont_sf" onclick="alertAudio('au_img_ont_sf', 'img_img_ont_sf', 5, 4)">
                                                            <audio id="au_img_ont_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/Paso 1/643358c519b8e527766907_JCRbpcWn.mp3">
                                                            </audio>
                                                            <span></span>

                                                            <button style="background: #FF5E00;" onclick="action_tv();">Acciones <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_act_sf" onclick="alertAudio('Au_act_sf', 'img_act_sf', 5, 10)">
                                                            <audio id="Au_act_sf" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/Paso 1/643358c519b8e527766907_JCRbpcWn.mp3">
                                                            </audio>
                                                            <div class="dropdrown-act drowndown__fon" id="dropdrown-act-tv">
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Estado Subscriber ID</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar MAC DECO</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Canales Adicionales</label>
                                                                <label for="" class="label-disa" onclick="habladorText('Esta función no esta disponible para esta orden')">Normalizar Servicios Adicionales</label>
                                                                <label for="" onclick="modalExitoSoporte('Reset Clave Control Parental', false, true), habladorText('Genera un reset a la clave y deja los ultimos cuatro numeros del subscriber ID')">Reset Clave Control Parental</label>
                                                                <label for="" onclick=" ,habladorText('Esta función no esta disponible para esta orden')">Normalizar Plan TV</label>
                                                                <label for="" onclick="modalExitoSoporte('Reaprovisionar Servicios-ACS', false, true), habladorText('Sobrescribe los valores guardados en ACS en la ONT/CPE')">Reaprovisionar Servicios-ACS</label>
                                                            </div>
                                                            <button style="background: #00A7CC;" onclick="btn_consul_ont();">Consultas  <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i></button>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio">
                                                            
                                                            <div class="dropdrown-act" id="dropdrown-act-consulta-ont">
                                                                <label for="">PING</label>
                                                                <label for="">PING LAN CLIENTE</label>
                                                                <label for="">LAN</label>
                                                                <label for="">WAN</label>
                                                                <label for="">Equipos Conectados</label>
                                                                <label for="">WIFI (Red)</label>
                                                                <label for="">WIFI (clave)</label>
                                                                <label for="">WIFI (Red y clave)</label>
                                                                <label for="">ALEPO</label>
                                                                <label for="">NOMBRE DE RED WIFI</label>
                                                                <label for="">ESTADO DE RED WIFI</label>
                                                            </div>
                                                            
                                                            <button style="background: #00A7CC;"><i class="fa-solid fa-rotate" style="color: #ffffff;"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="con-dos-btn-retor">
                                                <button id="no" class="btn_clasic btn_orage_bg">No Solucionado</button>
                                                <button id="no2" class="btn_clasic btn_orage_bg" style="display: none;">No Solucionado</button>
                                                <button class="btn_clasic" onclick="so();">Solucionado</button>
                                            </div>

                                            <div class="modal fade modales-soporte" tabindex="-1" id="modal-noso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                            
                                            <div class="items-info items-sopor">
                                                    <div class="cabecera">
                                                        <h5 onclick="itemInfoSoporte('con-logs-sp')">
                                                            <img src="../../../images/img/rule.svg" alt="" class="menus-cabecera">
                                                            LOG del sistema</h5>
                                                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_tv_sf" onclick="alertAudio('au_tv_sf2', 'img_tv_sf', 5, 9)">
                                                            <audio id="au_tv_sf2" controls class="audio" style="display: none;">
                                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/Paso 1/643358c519b8e527766907_JCRbpcWn2.mp3">
                                                            </audio>
                                    
                                                    </div>
                                                        <div class="body-items-inf">
                                                            <div class="contet" id="con-logs-sp">
                                                                <div class="con-table">
                                                                    <table id="log" class="table-general table-sopor table-sopor-logs">
                                                                        <tr>
                                                                            <th style="max-width: 20px; margin-left: 10px;">Fecha Inicio</th>
                                                                            <th style="max-width: 20px;">Fecha Fin</th>
                                                                            <th style="max-width: 20px;">Comando</th>
                                                                            <th style="max-width: 20px;">Descripción</th>
                                                                            <th style="max-width: 20px;">Tipo Comando</th>
                                                                            <th style="max-width: 20px;">Respuesta</th>
                                                                        </tr>
                                                                        <tbody id="tbody-logs">
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>     
                                            </div>
                                        
                                    </div>  

                                        <!-- Temp -->
                                        <div class="con-consulta" id="modal-consulta-vecinos">
                                            <div class="header-cons"> <h3>Estados de Equipos en la Tarjeta </h3> <i class="fa-solid fa-xmark btns-close-sopo" onclick="close_vecino();"></i></div>
                                            <div class="body-cons">
                                                <div class="con-filt">
                                                    <label for="">Mostrar</label>
                                                    <select name="" id="">
                                                        <option value="">10</option>
                                                        <option value="">50</option>
                                                        <option value="">100</option>
                                                        <option value="">500</option>
                                                    </select>
                                                    <label for="">Registros</label>
                                                    <label for="">Buscar:</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="con-table">
                                                    <table class="table-general table-sopor">
                                                        <tr>
                                                            <th>Semáforo</th>
                                                            <th>Estado</th>
                                                            <th>Potencia</th>
                                                            <th>Numero <br> Orden</th>
                                                            <th>Telefono</th>
                                                            <th>Marca <br> Equipo <br> ONT</th>
                                                            <th>Dirección Instalación</th>
                                                            <th>Pecho <br> A. ??</th>
                                                            <th>OLFID</th>
                                                            <th>PONID</th>
                                                            <th>ONUID</th>
                                                            <th>objectName</th>
                                                            <th>Propietario</th>
                                                            <th>NombreCliente</th>
                                                        </tr>
                                                        <tbody>
                                                        <tr class="row-bl">
                                                                <td><div class="semaforo semaforo-co"></div></td>
                                                                <td>Activo</td>
                                                                <td>-19.678</td>
                                                                <td></td>
                                                                <td>6014523019</td>
                                                                <td>ALCATEL</td>
                                                                <td>KR 738 5 05</td>
                                                                <td>2018/03/31</td>
                                                                <td>10.241.250.5</td>
                                                                <td>1-1-3-4</td>
                                                                <td>ALCLFA47F5C2</td>
                                                                <td>BOMUAL7360043- <br> 1-3-4-17</td>
                                                                <td></td>
                                                                <td>MIGUEL ABOON <br> ARDILA QUINCHE</td>
                                                        </tr>
                                                        <tr>
                                                                <td><div class="semaforo semaforo-co"></div></td>
                                                                <td>Activo</td>
                                                                <td>-18.186</td>
                                                                <td></td>
                                                                <td>6012736331</td>
                                                                <td>ALCATEL</td>
                                                                <td>KR 738 5 29</td>
                                                                <td>2018/11/22</td>
                                                                <td>10.241.250.5</td>
                                                                <td>1-1-3-4</td>
                                                                <td>ALCLFA47F5C2</td>
                                                                <td>BOMUAL736004:1 <br> 1-3-4-7</td>
                                                                <td></td>
                                                                <td>ADELA GARNICA <br> SILVA</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>  

                                                                                <!-- Modal que despliega los equipos a consultar-->
                                                                                <div class="modal fade" id="modal-consulta-equipos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="top: 60px;">
                                            <div class="modal-dialog">
                                              <div class="modal-content" style="top: 35px; width: 1100px; right: 100px; left: -250px;">
                                                <!-- Contenido del modal -->
                                                <div class="modal-header" id="header-cons">
                                                    <div class="header-cons"><h3>Características de Equipos </h3> </div>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="ocultarHablador();" style="bottom: 10px; position: relative; color: #fff;"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="body-cons">
                                                        <img src="../../../images/images-suma/infra1.png" alt="">
                                                        <img src="../../../images/images-suma/infra2.png" alt="">
                                                        <img src="../../../images/images-suma/infra3.png" alt="">
                                                        <img style="margin-bottom: 10px;" src="../../../images/images-suma/infra4.png" alt="">
                                                        <img style="margin-bottom: 10px;" src="../../../images/images-suma/infra5.png" alt="">
                                                        <img style="margin-bottom: 10px;" src="../../../images/images-suma/infra6.png" alt="">
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="modal fade" id="modal-consulta-equipos2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="top: 60px;">
                                            <div class="modal-dialog">
                                              <div class="modal-content" style="top: 35px; width: 1100px; right: 100px; left: -250px;">
                                                <!-- Contenido del modal -->
                                                <div class="modal-header" id="header-cons">
                                                    <div class="header-cons"><h3>Características de Equipos </h3> </div>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="ocultarHablador();" style="bottom: 10px; position: relative; color: #fff;"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="body-cons">
                                                        <img src="../../../images/images-suma/deco1.png" alt="">
                                                        <img src="../../../images/images-suma/deco2.png" alt="">
                                                        <img src="../../../images/images-suma/deco3.png" alt="">
                                                        <img style="margin-bottom: 10px;" src="../../../images/images-suma/deco4.png" alt="">
                                                        <img style="margin-bottom: 10px;" src="../../../images/images-suma/deco5.png" alt="">
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="modal fade" id="modal-consulta-equipos3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="top: 60px;">
                                            <div class="modal-dialog">
                                              <div class="modal-content" style="top: 35px; width: 1100px; right: 100px; left: -250px;">
                                                <!-- Contenido del modal -->
                                                <div class="modal-header" id="header-cons">
                                                    <div class="header-cons"><h3>Características de Equipos </h3> </div>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="ocultarHablador();" style="bottom: 10px; position: relative; color: #fff;"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="body-cons">
                                                        <img src="../../../images/images-suma/acceso1.png" alt="">
                                                        <img src="../../../images/images-suma/acceso2.png" alt="">
                                                        <img src="../../../images/images-suma/acceso3.png" alt="">
                                                        <img style="margin-bottom: 10px;" src="../../../images/images-suma/acceso4.png" alt="">
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="con-consulta" id="modal-consulta-pqr">
                                            <div class="header-cons"> <h3>PQR </h3> <i class="fa-solid fa-xmark btns-close-sopo" id="close-caracte-pqr" onclick="AbrirModalConsulta('modal-consulta-pqr')"></i></div>
                                            <div class="body-cons">
                                                <div class="con-table">
                                                    <table class="table-general table-sopor">
                                                        <tr>
                                                            <th>Número</th>
                                                            <th>Estado</th>
                                                            <th>Fecha Creación</th>
                                                            <th>Sintoma</th>
                                                            <th>Causal</th>
                                                            <th>Motivo</th>
                                                            <th>CUN</th>
                                                            <th>Gestión</th>
                                                            <th>Solución</th>
                                                        </tr>
                                                        <tbody>
                                                            <tr>
                                                                <td>MDM-PQR 38675280</td>
                                                                <td>Enviado a Segundo Nivel</td>
                                                                <td>2023-05- 07T10:47:23.0750000Z</td>
                                                                <td>ONT NO ENCIENDE / FALLA</td>
                                                                <td>FALLA EN OPE</td>
                                                                <td>FALLA TÉCNICA</td>
                                                                <td>4347230001111374</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="con-consulta" id="modal-consulta-sus">
                                            <div class="header-cons"> <h3>Suspensiones y Reconexiones </h3> <i class="fa-solid fa-xmark btns-close-sopo" id="close-caracte-pqr" onclick="AbrirModalConsulta('modal-consulta-sus')"></i></div>
                                            <div class="body-cons">
                                                <div class="con-table">
                                                    <table class="table-general table-sopor">
                                                        <tr>
                                                            <th>Fuente</th>
                                                            <th>Fecha Ejecucion (MES/DIA/AÑO)</th>
                                                            <th>Tramite</th>
                                                            <th>Numero Asociado </th>
                                                            <th>Estado del Tramite </th>
                                                            <th>Transaccion Id</th>
                                                            <th>Fecha Transaccion</th>
                                                        </tr>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        
                                        <div class="con-consulta" id="modal-consulta-tramites">
                                            <div class="header-cons"> <h3>Trámites </h3> <i class="fa-solid fa-xmark btns-close-sopo" id="close-caracte-pqr" onclick="AbrirModalConsulta('modal-consulta-tramites')"></i></div>
                                            <div class="body-cons">
                                                <div class="con-table">
                                                    <table class="table-general table-sopor">
                                                        <tr>
                                                            <th>Front</th>
                                                            <th>Fecha Ejecucion (MES/DIA/AÑO)</th>
                                                            <th>CUN</th>
                                                            <th>Número Conexión</th>
                                                            <th>Tipo Orden  </th>
                                                            <th>SubTipo Orden</th>
                                                            <th>Estado Orden</th>
                                                            <th>Reincidente</th>
                                                        </tr>
                                                        <tbody>
                                                            <td>1-DPORDKD</td>
                                                            <td>2020-05-27 05:29:00</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>VTA</td>
                                                            <td></td>
                                                            <td>Validación Cobertura</td>
                                                            <td>No</td>
                                                            <!-- <td></td> -->
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="con-consulta" id="modal-consulta-promos">
                                            <div class="header-cons"> <h3>Promociones </h3> <i class="fa-solid fa-xmark btns-close-sopo" id="close-caracte-pqr" onclick="AbrirModalConsulta('modal-consulta-promos')"></i></div>
                                            <div class="body-cons">
                                                <div class="con-table">
                                                    <table class="table-general table-sopor">
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Descripción</th>
                                                            <th>Vigencia</th>
                                                            <th>Fecha Asignación</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                        <tbody>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="con-consulta" id="modal-consulta-pagos">
                                            <div class="header-cons"> <h3>Pagos </h3> <i class="fa-solid fa-xmark btns-close-sopo" id="close-caracte-pqr" onclick="AbrirModalConsulta('modal-consulta-pagos')"></i></div>
                                            <div class="body-cons">
                                                <div class="con-table">
                                                    <table class="table-general table-sopor">
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Descripción</th>
                                                            <th>Vigencia</th>
                                                            <th>Fecha Asignación</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                        <tbody>
                                                            <tr>
                                                                <td>280180500</td>
                                                                <td>2023-03-25 14:43:48</td>
                                                                <td>42950</td>
                                                                <td>Banco Bancolombia</td>
                                                                <td>2023-03-25 14:43:48</td>
                                                            </tr>
                                                            <tr>
                                                                <td>281512479</td>
                                                                <td>2020-04-25 14:43:48</td>
                                                                <td>59900</td>
                                                                <td>Banco Bancolombia</td>
                                                                <td>2023-04-27 14:00:48</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="con-consulta" id="modal-consulta-log">
                                            <div class="header-cons"> <h3>LOG del sistema </h3> <i class="fa-solid fa-xmark btns-close-sopo" id="close-caracte-pqr" onclick="modalLog('modal-consulta-log')"></i></div>
                                            <div class="body-cons">
                                                <div class="items-info items-sopor">
                                                    <div class="cabecera">
                                                        <h5 onclick="itemInfoSoporte('con-sopo-log')">
                                                            <img src="../../../images/rule.svg" alt="" class="menus-cabecera">
                                                            LOG del sistema </h5>

                                                    </div>
                                                    <div class="body-items-inf">
                                                        <div class="contet hide-body" id="con-sopo-log">
                                                            <div class="con-table">
                                                                <table class="table-general table-sopor">
                                                                    <tr>
                                                                        <th>Fecha Inicio</th>
                                                                        <th>Fecha Fin</th>
                                                                        <th>Comando</th>
                                                                        <th>Descripcion</th>
                                                                        <th>Tipo Comando</th>
                                                                        <th>Respuesta</th>
                                                                    </tr>

                                                                    <tbody id="tbody-log">

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- Temp -->
                                    </div>
        </div>         
            <!-- Items -->
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

            <div id="flujo-btn" class="btn-flot" onclick="btn_flujo()">Flujo</div>
        
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
    <script src="../../../../Controller/security/FTTH3/anti-cheat-ftth7.js"></script>

</body>
</html>