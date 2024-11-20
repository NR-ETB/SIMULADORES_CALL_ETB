<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/pqr.css">
    <link rel="stylesheet" href="../../../css/mainSuma.css">
    <link rel="stylesheet" href="../../css/portal.css">
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

            <div class="usuario" style="margin-left: 35px;">
                <div>
                    <label for="">Cliente</label>
                    <span>ARMANDO PAREDES</span>
                </div>
                <div>
                    <label for="">Cedula de Ciudadania</label>
                    <span>1000652458</span>
                </div>
                <div>
                    <label for="">Id PQR</label>
                    <span>MDM-PQR-3939230</span>
                </div>
            </div>

            <div class="usuario" style="margin-bottom: 100px; margin-left: 35px;">
                <div>
                    <label for="">Linea:</label>
                    <span></span>
                </div>
                <div>
                    <label for="">Cuenta de Facturacion:</label>
                    <span></span>
                </div>
                <div>
                    <label for="">ID Servicio:</label>
                    <span></span>
                </div>
            </div>
    
            <div class="line" style="width: 90%; margin-left: 35px;"></div>
            
    <div class="modal-body">


                <div class="content-modal" style="width: 50%; height: 310px;">

                    <script>
                        var today = new Date();
                        var day = today.getDate();
                        var month = today.getMonth() + 1;
                        var year = today.getFullYear();
                        var hours = today.getHours();
                        var minutes = today.getMinutes();
                    </script>

                        <form>

                            <label for="">Fecha Creación</label>
                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="0"><script>document.write(`${month}/${day}/${year}`)</script> <span><script>document.write(`${hours}:${minutes}`)</script></span> </option>
                                </select>
                            </span>

                            <label for="">Fecha Presentación</label>
                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="0"><script>document.write(`${month}/${day}/${year}`)</script> <span><script>document.write(`${hours}:${minutes}`)</script></span></option>
                                </select>
                            </span>

                            <label for="">Solicitante</label>
                                <span>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante" onclick="alertAudio('au_solicitante', 'img_solicitante', 2, 5)">
                                <audio id="au_solicitante" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_solicitante.mp3">
                                </audio>
                            </span>

                            
                            <select name="solicitante" id="search-soli" readonly="readonly" class="solicitante-search" style="background-color: #c0c0c0; width: 735px; margin-bottom: 20px;">
                                <option id="cun-rel" value="1">ARMANDO PAREDES</option>
                            </select>
                            <button type="button" id="search"><i class="fa-solid fa-magnifying-glass"></i></button>

                            <label for="">Descripcion</label>
                            <textarea name="descripcion" id="" cols="30" rows="3" style="margin-bottom: 20px; border-color: #f26821;"></textarea>

                            <label for="">Clase</label>
                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="0"></option>
                                    <option value="1">ASEGURAMIENTO DE CANALES</option>
                                    <option value="2">PETICIÓN</option>
                                    <option value="3">QUEJAS</option>
                                    <option value="4">RECUERSOS</option>
                                    <option value="5">RESOLUCIÓN</option>
                                    <option value="6">SOLICITUDES IAS</option>
                                </select>
                            </span>

                            <label for="">Motivo</label>
                            <span>
                                <select name="motivo" id="" style="margin-bottom: 20px;">
                                    <option value="0"></option>
                                    <option value="1">FALLA TECNICA</option>
                                </select>
                            </span>

                            <label for="">Relación PQR</label>
                            <span><input type="text" name="relacion" id="inputValor" value="" style="margin-bottom: 20px; width: 493px;" disabled ></span>
                            <span class="select-relacion">
                                <select name="producto" id="prod" onchange="pro();">
                                    <option value="0"></option>
                                    <option value="2">NINGUNO</option>
                                    <option value="3">PEDIDO</option>
                                    <option value="1">PRODUCTO</option>
                                    <option value="4">QUEJA</option>
                                </select>
                            </span>

                            <label for="">Canala de Recepcion</label>
                            <span>
                                <select name="causal" id="" style="margin-bottom: 20px; border-color: #f26821;">
                                    <option value="0">VERBAL/CALL CENTER</option>
                                </select>
                            </span>

                            <label for="">Subcanal</label>
                            <span>
                                <select name="sintoma" id="" style="margin-bottom: 20px; border-color: #f26821;">
                                    <option value="0">Seleccione...</option>
                                </select>
                            </span>

                            <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                                <label for="btn-adj">Adjunto Solucion</label>
                                <input type="file" name="btn-adj" id="" style="display: none;">
                            </div>
                            
                            <label for="">Descripcion</label>
                            <textarea name="" id="" style="margin-bottom: 20px; border-color: #f26821; width: 1572px; height: 35px;"></textarea>

                            <label for="">Descripcion</label>
                            <textarea name="" id="" style="border-color: #f26821; width: 770px; height: 35px;"></textarea>

                        </form>

                        <form style="position: relative; left: 800px; bottom: 883px;">

                            <label for="">Causal</label>
                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="0"></option>
                                    <option value="1">BAJA CALIDAD DEL SERVICIO</option>
                                    <option value="2">FALLA CPE</option>
                                    <option value="3">FALLA INTERNET</option>
                                    <option value="4">FALLA WIFI</option>
                                    <option value="5">GESTIÓN PROACTIVA</option>
                                    <option value="6">SIN DATOS</option>
                                </select>
                            </span>

                            <label for="">Sintomas</label>
                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="0"></option>
                                    <option value="1">PROBLEMA EQUIPO DEL CLIENTE</option>
                                    <option value="2">SIN SERVICIO -F</option>
                                </select>
                            </span>

                            <label for="">Accion a Seguir</label>
                            <textarea name="descripcion" id="" cols="30" rows="3" style="margin-bottom: 20px; border-color: #f26821;"></textarea>

                            <label for="">CUN</label>
                                <span>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante" onclick="alertAudio('au_solicitante', 'img_solicitante', 2, 5)">
                                <audio id="au_solicitante" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_solicitante.mp3">
                                </audio>
                            </span>

                            <select name="solicitante" id="search-soli" readonly="readonly" class="solicitante-search" style="background-color: #c0c0c0; width: 735px; margin-bottom: 20px;">
                                <option id="cun-rel" value="1">6250124658754201</option>
                            </select>
                            <button type="button" id="search"><i class="fa-solid fa-magnifying-glass"></i></button>

                            <label for="">CUN Relacionado</label>
                            <span>
                                <select name="motivo" id="" style="margin-bottom: 20px;">
                                    <option value="0"></option>
                                </select>
                            </span>

                            <label for="">Radicado Externo</label>
                            <span>
                                <select name="motivo" id="" style="margin-bottom: 20px;">
                                    <option value="0"></option>
                                </select>
                            </span>

                            <label for="">Medio de Atencion</label>
                            <span>
                                <select name="causal" id="" style="margin-bottom: 20px; border-color: #f26821;">
                                    <option value="0">Linea Telefonica</option>
                                </select>
                            </span>

                            <label for="">Punto</label>
                            <span>
                                <select name="motivo" id="" style="margin-bottom: 20px;">
                                    <option value="0"></option>
                                    <option value="1">Call Center</option>
                                </select>
                            </span>

                            <label for="">Originada Por</label>
                            <span><input type="text" name="relacion" id="inputValor" value="" style="margin-bottom: 105px; width: 489px;" disabled ></span>
                            <span class="select-relacion">
                                <select name="producto" id="prod" onchange="pro();">
                                    <option value="0">NINGUNO</option>
                                </select>
                            </span>

                            <input value="Crear" onclick="location.href = './portalFTTCPartII.php'" class="crear-pqr">
                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante_fn" onclick="alertAudio('au_solicitante_fn', 'img_solicitante_fn', 2, 8)">       

                            <audio id="au_solicitante_fn" controls class="audio" style="display: none;">

                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_solicitante_fn.mp3">

                            </audio>

                        </form>

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

</div>

    <script src="../../../bootstrap/jquery.js"></script>
    <script src="../../../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../../bootstrap/typed.js"></script>
    <script src="../../../../Controller/suma/FTTC/portalFTTC.js"></script>
    <script src="../../../../Controller/security/FTTC/anti-cheat-fttc2.js"></script>

</body>
</html>