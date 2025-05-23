<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/pqr.css">
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
            <label>Cliente:</label> <span style="color: #00A7CC;">VIVIAN ALVARADO</span><br>
            </div>

            <div class=''>
            <label>Numero de Documento:</label> <span style="color: #00A7CC;">1000748526</span><br>
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
                    <span>106</span>
                </div>
                <div>
                    <label for="">Número PQR</label>
                    <span>MDM-PQR-3939229</span>
                </div>
                <div class="recurrente">
                    <button class="btn-recurrente">SI</button>
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
                    <span>3PLAY 30M SILVER 1</span>
                </div>
                <div>
                    <label for="">Línea/Id</label>
                    <span>6013195421013</span>
                </div>
            </div>

            <div class="usuario">
                <div>
                    <label for="">Motivo</label>
                    <span>INFORMACION</span>
                </div>
                <div>
                    <label for="">Causal</label>
                    <span>VISITA CASUAL</span>
                </div>
                <div>
                    <label for="">Cuenta Facturación</label>
                    <span>22222222222</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Medio Notificación</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Síntoma</label>
                    <span>CONFIRMACION</span>
                </div>
                <div>
                    <label for="">Tecnología</label>
                    <span>FTTH</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Canal de Recuperación</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Sub Canal</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Punto</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">CUN</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Producto Relacionado</label>
                    <span>3PLAY 30M SILVER 1</span>
                </div>
                <div>
                    <label for="">Medio de Atención</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Fecha Creación</label>
                    <span>2024-02-16 12:58:08</span>
                </div>
                <div>
                    <label for="">Cun Relacionado</label>
                    <span>6250124658754200</span>
                </div>
                <div>
                    <label for="">CRQ Ventana Mantenimiento</label>
                    <span>PETICION</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Fecha Presentación</label>
                    <span>2024-02-16 12:58:08</span>
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
                    <span class="solicitante">VIVIAN ALVARADO</span>
                </div>
                <div>
                    <label for="">Estado</label>
                    <span>CERRADO</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Valor Ajustado</label>
                    <span>0</span>
                </div>
                <div>
                    <label for="">Nombre Instalador</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
                <div>
                    <label for="">Fecha Agenda</label>
                    <span>2024-02-16</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Franja Agenda</label>
                    <span>12:58:08</span>
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
                    <span style="color: transparent;">AVHM</span>
                </div>
                <div>
                    <label for="">Estado Agenda Anterior</label>
                    <span style="color: transparent;">AVHM</span>
                </div>
                <div>
                    <label for="">Proveedor</label>
                    <span>ETB</span>
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
                    <span style="color: transparent;">AVHM</span>
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
                        <select name="" id="" disabled>
                            <option value="0">Seleccione</option>
                            <option value="1" selected>RECEPCIÓN</option>
                        </select>
                    </span>
                </div>
                <div>
                    <label for="">Operador Destino</label>
                    <span>
                        <select name="" id="" disabled>
                            <option value="0">Seleccione</option>
                            <option value="1">COLOMBIA MÓVIL (TIGO)</option>
                            <option value="2">COLOMBIA TELECOM.- MOVISTAR</option>
                            <option value="3">COLOMBIA TELECOM.- TELEFÓNICA</option>
                            <option value="4">COMCEL (CLARO MÓVIL)</option>
                            <option value="5" selected>ETB S.A ESP</option>
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
                        <select name="" id="" disabled>
                            <option value="0">Seleccione</option>
                            <option value="1">ACCEDE</option>
                            <option value="2">RESPALDO POR COMPETENCIA</option>
                            <option value="3" selected>NO ACCEDE</option>
                            <option value="4">ACCEDE PARCIALMENTE</option>
                        </select>
                    </span>
                </div>
            </div>

            <div class="usuario item-2">
                <div>
                    <label for="">Solucion</label>
                    <textarea name="descripcion" id="" cols="30" rows="3"></textarea>
                </div>
                <div>
                </div>
                <div style="display: grid; margin-left: 15px; position: relative; bottom: 140px;">
                    <button class="pqr-b1"><img src="../../../images/images-suma/pencil.png" alt="">Editar Solicitante</button>
                    <button class="pqr-b2"><img src="../../../images/images-suma/hand.png" alt="">Agendar</button>
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
                            <option value="1">CORREO ELECTRONICO</option>
                            <option value="2">CORREO ORDINARIO</option>
                            <option value="3" style="color: #c6c6c6;">PRESENCIAL</option>
                            <option value="4">TELEFONICO</option>
                            <option value="5" style="color: #c6c6c6;" selected>VERBAL / CALL CENTER</option>
                            <option value="6">VIRTUAL</option>
                            <option value="7">WHATSAPP</option>
                        </select>
                    </span>
                </div>
                <div  style="position: relative; bottom: 130px;">
                    <label for="">Email/Dirección/Teléfono</label>
                    <input type="text" name="" id="">
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
                    <button class="pqr-b3" id="btn_cpqr" style="width: 140px;" onclick="error_pqr2();"><img src="../../../images/images-suma/check.png" alt="">Cerrar PQR</button>
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
                    <textarea name="descripcion" id="" cols="30" rows="3" disabled>VISITA CASUAL</textarea>
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
                    <td>INSTANCIA ADMINISTRATIVA</td>
                    <td id="ges2">MIXTA</td>
                    <td id="est2">Cerrado</td>
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
                    <td>NOTIFICACION</td>
                    <td id="ges4">SIN NOTIFICAR</td>
                    <td id="est4">Cerrado</td>
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
    <script src="../../../../Controller/suma/FALLA/pqrFALLA.js"></script>
    <script src="../../../../Controller/security/FALLA/anti-cheat-falla7.js"></script>

</body>
</html>