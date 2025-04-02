<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pqr.css">
    <link rel="stylesheet" href="../../css/mainSuma.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link href="../../fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="../../fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="../../fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../images/ETB.svg">
    <title>ETB - PQR</title>
</head>
<body>
<div class="container-genre">

        <?php 
            include('../../components/infoAudios.php');
            include('../../components/sidebar.php');
            include('../../components/navbar.php');
        ?>

        <div class="main-pqr">
            <div class="usuario">
            <div class=''>
            <label>Cliente:</label> <span></span><br>
            </div>

            <div class=''>
            <label></label> <span></span><br>
            </div>
            <div>
                <img src="../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_pqr" onclick="alertAudio('au_pqr', 'img_pqr', 2, 9)">
                <audio id="au_pqr" controls class="audio" style="display: none;">
                    <source type="audio/wav" src="../../../Model/audioSuma/tep/au_pqr.mp3">
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
                </div>
                <div>
                    <label for="">Número PQR</label>
                    <span>MDM-PQR-38814008</span>
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
                    <span>20354851</span>
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
                    <span>8312587</span>
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
                    <span></span>
                </div>
                <div>
                    <label for="">CRQ Ventana Mantenimiento</label>
                    <span>PETICION</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Fecha Presentación</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Radicado</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Número de Pedido</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Sistema de Radicación</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Solicitante</label>
                    <span class="solicitante"></span>
                </div>
                <div>
                    <label for="">Estado</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Valor Ajustado</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Nombre Instalador</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Fecha Agenda</label>
                    <span>2024-02-23</span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Franja Agenda</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Estado Agenda</label>
                    <span>PENDIENTE</span>
                </div>
                <div>
                    <label for="">Motivo o Causal</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Grupo Asignado</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Estado Agenda Anterior</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Proveedor</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Usuario Creador</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Usuario Asignado</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Codigo Back</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Sub Estado</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Tipo Excepción</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Excepción</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Fecha Contingente</label>
                    <span></span>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Código Resolución</label>
                    <input type="number" name="" id="">
                </div>
                <div>
                    <label for="">Imputabilidad</label>
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Descripción Resolución</label>
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Tipo de Cierre</label>
                    <span>
                        <select name="" id="">
                            <option value="">ACCEDE</option>
                        </select>
                    </span>
                </div>
            </div>

            <div class="usuario item-2">
                <div>
                    <label for="">Solucion</label>
                    <textarea name="descripcion" id="" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">Medio de notificación</label>
                    <span>
                        <select name="" id="">
                            <option value="">Virtual</option>
                        </select>
                    </span>
                </div>
                <div>
                    <label for="">Email/Dirección/Teléfono</label>
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="usuario">
                <div>
                    <label for="">No deseo recibir notificación</label>
                    <input type="checkbox" name="" id="">
                </div>
            </div>
        </div>

    </div>
    <div class="alert-flotante" id="alert-flotante">
        <div class="etb-flotant etb-flotant-login" id="etb-flotant">
            <img src="../../images/ETB.svg" alt="">
        </div>
        <div class="mensaje-parlante msg-parl-log" id="mensaje-parlante">
            <p id="text-msg-hab">
                <div class="lds-ellipsis" id="wait-text"><div></div><div></div><div></div><div></div></div>
            </p>
        </div>
        <div class="con-close-alert" onclick="ocultarHablador()">
            <img src="../../images/cross_small.svg" alt="">
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

    <script src="../../bootstrap/jquery.js"></script>
    <script src="../../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../bootstrap/typed.js"></script>
    <script src="../../../Controller/suma/main.js"></script>
    <script src="../../../../Controller/security/FTTHNO/anti-cheat-ftthno4.js"></script>

</body>
</html>