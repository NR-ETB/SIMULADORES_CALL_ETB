<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/pqr.css">
    <link rel="stylesheet" href="../../css/reportarfalla.css">
    <link rel="stylesheet" href="../../css/soporte.css">
    <link rel="stylesheet" href="../../../css/mainSuma.css">
    <link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
    <link href="../../../fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../images/ETB.svg">
    <title>ETB - PQR</title>
</head>
<body>
<div class="container-genre">

        <?php 
            include('../../../components/infoAudios.php');
            include('../../../components/sidebar.php');
            include('../../../components/navbar.php');
        ?>

        <div class="main-pqr">

            <script>
                var today = new Date();
                var day = today.getDate();
                var month = today.getMonth() + 1;
                var year = today.getFullYear();
                var hours = today.getHours();
                var minutes = today.getMinutes();
            </script>


            <div class="usuario">
            <div class=''>
            <label>Cliente:</label> <span style="color: #00A7CC;">MILLO MATEOS</span><br>
            </div>

            <div class=''>
            <label>Numero de Documento:</label> <span style="color: #00A7CC;">1000110440</span><br>
            </div>
            <div>
                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_pqr" onclick="alertAudio('au_pqr', 'img_pqr', 2, 9)">
                <audio id="au_pqr" controls class="audio" style="display: none;">
                    <source type="audio/wav" src="../../../../Model/audioSuma/tep/au_pqr.mp3">
                </audio>
            </div>
            </div>

            <div class="line"></div>

            <div class="usuario">
                <div class='item-1'>
                    <label>ANS</label> 
                    <div class='semaforo semaforo-co'></div>
                </div>
            </div>

            <div class="usuario">
                <div class=''>
                    <label>Días PQR</label>
                    <span>0</span>
                </div>
                <div>
                    <label for="">Número PQR</label>
                    <span>MDM-PQR-3939235</span>
                </div>
                <div class="recurrente">
                    <button class="btn-recurrente">NO</button>
                    <label for="">Recurrente</label>
                </div>
            </div>

            <div class="usuario">
                <div>
                    <label for="">Clase</label>
                    <span>PETICION</span>
                </div>
                <div>
                    <label for="">Producto</label>
                    <span>INTERNET</span>
                </div>
                <div>
                    <label for="">Línea/Id</label>
                    <span>6013154297810</span>
                </div>
            </div>

            <div class="usuario">
                <div>
                    <label for="">Motivo</label>
                    <span>FALLA TECNICA</span>
                </div>
                <div>
                    <label for="">Causal</label>
                    <span>FALLA INTERNET</span>
                </div>
                <div>
                    <label for="">Cuenta Facturación</label>
                    <span>3333333333333</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Medio Notificación</label>
                    <span>CORREO ELECTRONICO</span>
                </div>
                <div>
                    <label for="">Síntoma</label>
                    <span>SIN SERVICIO -C</span>
                </div>
                <div>
                    <label for="">Tecnología</label>
                    <span>FTTH</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Canal de Recuperación</label>
                    <span>VERVAL / CALL CENTER</span>
                </div>
                <div>
                    <label for="">Sub Canal</label>
                    <span>TELEFONICO</span>
                </div>
                <div>
                    <label for="">Punto</label>
                    <span>CALL CENTER</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">CUN</label>
                    <span>4347230001219417</span>
                </div>
                <div>
                    <label for="">Producto Relacionado</label>
                    <span>INTERNET</span>
                </div>
                <div>
                    <label for="">Medio de Atención</label>
                    <span>LINEA TELEFONICA</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Fecha Creación</label>
                    <span><script>document.write(`${month}/${day}/${year}`)</script> <script>document.write(`${hours}:${minutes}`)</script></span>
                </div>
                <div>
                    <label for="">Cun Relacionado</label>
                    <span></span>
                </div>
                <div>
                    <label for="">CRQ Ventana Mantenimiento</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Fecha Presentación</label>
                    <span>2024-06-21 08:00:00</span>
                </div>
                <div>
                    <label for="">Radicado externo</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
                <div>
                    <label for="">Número de Pedido</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Sistema de Radicación</label>
                    <span>MDM_PQR</span>
                </div>
                <div>
                    <label for="">Solicitante</label>
                    <span class="solicitante">MILLO MATEOS</span>
                </div>
                <div>
                    <label for="">Estado</label>
                    <span>Enviado a Segundo Nivel</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Valor Ajustado</label>
                    <span>0</span>
                </div>
                <div>
                    <label for="">Nombre Instalador</label>
                    <span>JOSH_DON</span>
                </div>
                <div>
                    <label for="">Fecha Agenda</label>
                    <span><script>document.write(`${month}/${day}/${year}`)</script></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Franja Agenda</label>
                    <span><script>document.write(`${hours}:${minutes}`)</script></span>
                </div>
                <div>
                    <label for="">Estado Agenda</label>
                    <span>PENDIENTE</span>
                </div>
                <div>
                    <label for="">Motivo o Causal</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Grupo Asignado</label>
                    <span>ASEG_COBRE VISTA CLIENTE</span>
                </div>
                <div>
                    <label for="">Estado Agenda Anterior</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
                <div>
                    <label for="">Proveedor</label>
                    <span>DIGITEX</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Usuario Creador</label>
                    <span class="solicitante">nnirod</span>
                </div>
                <div>
                    <label for="">Usuario Asignado</label>
                    <span class="solicitante">nnirod</span>
                </div>
                <div>
                    <label for="">Codigo Back</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Sub Estado</label>
                    <span>Normal</span>
                </div>
                <div>
                    <label for="">Tipo Excepción</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
                <div>
                    <label for="">Excepción</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Fecha Contingente</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
            </div>
            <div class="usuario">
            <div>
                    <label for="">Operadores LSP</label>
                    <span>
                        <select name="" id="" style="background-color: #c6c6c6; border-color: #F36F31" disabled>
                            <option value="0"></option>
                            <option value="1">RECEPCIÓN</option>
                        </select>
                    </span>
                </div>
                <div>
                    <label for="">Operador Destino</label>
                    <span>
                        <select name="" id="" style="background-color: #c6c6c6; border-color: #F36F31" disabled>
                            <option value="0"></option>
                            <option value="1">COLOMBIA MÓVIL (TIGO)</option>
                            <option value="2">COLOMBIA TELECOM.- MOVISTAR</option>
                            <option value="3">COLOMBIA TELECOM.- TELEFÓNICA</option>
                            <option value="4">COMCEL (CLARO MÓVIL)</option>
                            <option value="5">ETB S.A ESP</option>
                            <option value="6">IMFRACEL COMCEL LARGA DISTAN.</option>
                            <option value="7">TELMEX (CLARO FIJO)</option>
                            <option value="8">UNE EOM TELCO (ORBITEL)</option>
                        </select>
                    </span>
                </div>
            </div>
            <div class="usuario">
                <div style="margin-top: 25px;">
                    <label for="">Tipo de Cierre</label>
                    <span>
                        <select name="" id="" style="background-color: #c6c6c6; border-color: #F36F31" disabled>
                            <option value="0">Seleccione</option>
                            <option value="1" selected>ACCEDE</option>
                            <option value="2">RESPALDO POR COMPETENCIA</option>
                            <option value="3">NO ACCEDE</option>
                            <option value="4">ACCEDE PARCIALMENTE</option>
                        </select>
                    </span>
                </div>
            </div>

            <div class="usuario item-2">
                <div>
                    <label for="">Solucion</label>
                    <textarea name="descripcion" id="" cols="30" rows="3" style="background-color: #c6c6c6; border-color: #F36F31"></textarea>
                </div>
                <div>
                </div>
                <div style="display: grid; margin-left: 15px; position: relative; bottom: 140px;">
                    <button class="pqr-b1"><img src="../../../images/images-suma/pencil.png" alt="">Editar Solicitante</button>
                    <button class="pqr-b2" onclick="btn_fa();"><img src="../../../images/images-suma/hand.png" alt="">Agendar</button>
                    <button class="pqr-b3"><img src="../../../images/images-suma/plus.png" alt="">Generar Carta</button>
                    <button class="pqr-b4"><img src="../../../images/images-suma/airplane.png" alt="">Historica Mensajeria</button>
                    <button class="pqr-b3"><img src="../../../images/images-suma/plus.png" alt="">Nueva Petición</button>
                    <button class="pqr-b3"><img src="../../../images/images-suma/upload.png" alt="">Adjunto Solucion</button><br><br>
                    <button class="pqr-b1"><img src="../../../images/images-suma/paper.png" alt="">Párrafos ayúda</button>
                </div>
            </div>
            <div class="usuario">
                <div style="position: relative; bottom: 130px;">
                    <label for="">Medio de notificación</label>
                    <span>
                        <select name="" id="" disabled>
                            <option value="0">Seleccione</option>
                            <option value="1" selected>CORREO ELECTRONICO</option>
                            <option value="2">CORREO ORDINARIO</option>
                            <option value="3" style="color: #c6c6c6;">PRESENCIAL</option>
                            <option value="4">TELEFONICO</option>
                            <option value="5" style="color: #c6c6c6;">VERBAL / CALL CENTER</option>
                            <option value="6">VIRTUAL</option>
                            <option value="7">WHATSAPP</option>
                        </select>
                    </span>
                </div>
                <div  style="position: relative; bottom: 130px;">
                    <label for="">Email/Dirección/Teléfono</label>
                    <span>
                        <select name="" id="" disabled>
                            <option value="0">mil@email.com</option>
                        </select>
                    </span>
                </div>
            </div>
            <div class="usuario">
                <div style="position: relative; bottom: 130px;">
                    <label for="">No deseo recibir notificación</label>
                    <input type="checkbox" name="" id="">
                </div>
            </div>
            <div class="usuario">
                <div style="position: relative; bottom: 130px; left: 600px;">
                <button class="pqr-b3" id="btn_cpqr" style="width: 140px; display: none;" onclick="error_pqr2();"><img src="../../../images/images-suma/check.png" alt="">Cerrar PQR</button>
                </div>
            </div>

            <div class="line" style="position: relative; bottom: 100px;"></div>

            <div class="usuario">
                <div style="position: relative; bottom: 130px;">
                    <span class="solicitante">Adjuntar Archivos</span>
                </div>
            </div>

            <div class="line" style="position: relative; bottom: 100px;"></div>

            <table class="table-general table-sopor" style="width: 400px; position: relative; bottom: 70px;">
                <tr>
                    <th>Semaforo</th>
                    <th>PLATINO <br> Recurrente: Si</th>
                    <th>Cantidad</th>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>PQR NIVEL 1</td>
                    <td>0</td>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>PQR NIVEL 2</td>
                    <td>0</td>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>Agendamiento PQR Actual</td>
                    <td>0</td>
                </tr>
            </table>

            <div class="usuario" >
                <div style="position: relative; bottom: 40px;">
                    <label for="">Descripcion</label>
                    <textarea name="descripcion" id="" cols="30" rows="3" style="border-color: #F36F31" disabled>SIN INTERNET</textarea>
                </div>
            </div>

            <table class="table-general table-sopor" style="width: 400px; position: relative; bottom: 10px;">
                <tr>
                    <th>Semaforo</th>
                    <th>Dias</th>
                    <th>Nombre Actividad</th>
                    <th>Gestión</th>
                    <th>Estado</th>
                    <th>Descripcion</th>
                    <th>Comentarios</th>
                    <th>Usuarios Asignados</th>
                    <th>Accion</th>
                    <th>Adjuntar</th>
                    <th>Adjuntos</th>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-error"></div></td>
                    <td></td>
                    <td>NOTIFICACION</td>
                    <td>SIN NOTIFICAR</td>
                    <td>Cerrado</td>
                    <td></td>
                    <td></td>
                    <td>nnirod</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Editar</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Adjuntar</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Adjuntos</td>
                </tr>
                <tr class="row-bl">
                <td><div class="semaforo semaforo-error"></div></td>
                    <td></td>
                    <td>GESTION TECNICA</td>
                    <td>GETION PRIMER NIVEL</td>
                    <td>Cerrado</td>
                    <td></td>
                    <td></td>
                    <td>nnirod</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Editar</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Adjuntar</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Adjuntos</td>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-error"></div></td>
                    <td></td>
                    <td>GESTION TECNICA</td>
                    <td id="ges3">
                        <select name="" id="oges2" style="width: 130px;">
                        <option value="2">AVISO (F01)</option>
                        <option value="1">PERSONAL (F46)</option>
                        <option value="0" selected>GESTION TECNICA</option>
                    </select></td>
                    <td id="ges4" style="display: none;">SIN NOTIFICAR</td>
                    <td id="est3">
                    <select id="oest2" style="width: 58px;" onchange="toggleDisplay2();">
                        <option value="0">En proceso</option>
                        <option value="1">Cerrado</option>
                    </select></td>
                    <td id="est4" style="display: none;">Cerrado</td>
                    <td></td>
                    <td></td>
                    <td>nnirod</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Editar</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Adjuntar</td>
                    <td onclick="" style="color: #FF5E00; cursor: pointer;">Adjuntos</td>
                </tr>
            </table>

            <div class="usuario">
                <div style="position: relative; bottom: 35px; left: 100px;">
                    <button class="pqr-b3">Crear Actividad</button>
                    <button class="pqr-b3" style="width: 240px;">Actividades con otras áreas</button>
                </div>
            </div>

        </div>

    </div>

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


    <div class="modal modal-success-sim" tabindex="-1" id="modal-epqr">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INFORMACIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p>La PQR ya se encuentra cerrada, porfavor realice la getion para volver a abrirla</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" onclick="btn_solucionPartII();">ACEPTAR</button>
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

    <!-- Solucionado, paso calendar final -->
    <div class="modal fade" id="modal-soluic4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="bottom: 15px; position: relative;">
            <div class="modal-dialog">
              <div class="modal-content" style="height: 93%;">
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

                    <div id="no-ven" style="display: -webkit-inline-box; margin-top: 50px; position: relative; left: 300px;">
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

                <div id="calendar" style="left: 300px;"></div>

                <div style="position: relative; top: 5px;">

                    <div id="no-ven" style="display: -webkit-inline-box; margin-top: 50px; position: relative; left: 300px;">
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

                    <p style="color: #FF5E00; margin-left: 50px; position: relative; left: 300px; top: 40px;">Agendas Programadas</p>

                    <div style="position: relative; left: 465px; bottom: 10px;">
                        <button type="button" style="width: 80px; background-color: transparent; position: relative; right: 385px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 2px 0 0 2px;">Copy</button>
                        <button type="button" style="width: 80px; background-color: transparent; position: relative; right: 390px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 0 2px 2px 0;;">Excel</button>
                        <button type="button" style="width: 80px; background-color: transparent; position: relative; right: 396px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 2px 0 0 2px;">CSV</button>
                        <button type="button" style="width: 80px; background-color: transparent; position: relative; right: 401px; top: 80px; border: 1px solid rgba(22, 21, 19, 0.5); color: #000; border-radius: 0 2px 2px 0;;">Print</button>
                        <p style="position: relative; left: 47px; top: 45px; border: #00A7CC;">Filtrar:</p>
                        <textarea name="" id="des3" cols="30" rows="10" style="width: 200px; height: 30px; position: relative; left: 102px;"></textarea>  
                    </div>
                    <div class="table-solui" style="bottom: 20px; position: relative;">
                        <table class="table-general table-sopor" style="width: 200px;">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Franja</th>
                                    <th>Estado</th>
                                    <th>Usuario Creador</th>
                                    <th>Usuario Modificador</th>
                                    <th>Motivo</th>
                                    <th>Cancelar</th>
                                    <th>Fecha</th>
                                </tr>
                                <tr class="row-bl">
                                <td>
                                    <script>document.write(`${day}/${month}/${year}`)</script></td>
                                    <td><script>document.write(`${hours}:${minutes}`)</script></td>
                                    <td>Activo</td>
                                    <td>nnicrod</td>
                                    <td></td>
                                    <td></td>
                                    <td><input type="checkbox"></td>
                                    <td><script>document.write(`${day}/${month}/${year}`)</script> <script>document.write(`${hours}:${minutes}`)</script>
                                </td>
                                </tr>
                        </table>
                    </div>

                    <p style="position: relative; left: 82px; bottom: 25px;">Registros 0-0 de 0  No hay filas seleccionadas</p>
                    <div>
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 559px; bottom: 70px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px;">Anterior</button>
                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 555px; bottom: 70px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0;;">Siguiente</button>
                    </div>

                    <p style="color: #FF5E00; position: relative; left: 82px; bottom: 5px;">Solicitud cliente:</p><input type="checkbox" style="position: relative; left: 250px; bottom: 45px;">

                </div>

                </div>

                <div style="position: relative; bottom: 160px; right: 120px;">
                    <button class="btn_clasic" id="btn-solucion2222">Salir</button>
                    <button class="btn_clasic" id="btn-solucion2222" style="background-color: #FF5E00;" onclick="agen()">Agendar</button>     
                </div>
            </div>

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
    <script src="../../../../Controller/suma/VISITA/pqrVISITA.js"></script>
    <script src="../../../../Controller/security/VISITA/anti-cheat-visita4.js"></script>

</body>
</html>