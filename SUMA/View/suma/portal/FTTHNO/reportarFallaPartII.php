<!DOCTYPE html>
<html lang="en">
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
<body id="black">

    <div class="container-genre">

        <?php 
            include('../../../components/infoAudios.php');
            include('../../../components/sidebar.php');
            include('../../../components/navbar.php');
        ?>

        <!-- Solucionado, primer paso -->
        <div class="content-info-sol" id="content-soluic" style="display: block; margin-top: 70px; border: 2px solid #fff; z-index: 0;">
                <div class="info-u">
                        <label for="">Cliente</label>
                        <label for="">Número de Documento</label>
                        <p>CLAID MUSS</p>
                        <p>1000842659</p>
                        
                </div>
                <div class="table-solui" style="margin-top: 25px ;">
                    <table class="table-general table-sopor" style="width: 400px;">
                            <tr>
                                <th>Semaforo</th>
                                <th>PLATINO <br> Recurrente: Si</th>
                                <th>Cantidad</th>
                            </tr>
                            <tr class="row-bl">
                                <td><div class="semaforo semaforo-co"></div></td>
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

        <div class="modal fade modales-soporte" tabindex="-1" id="modal-exito-solucionado4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false" style="left: -230px; top: -225px;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-exito-s">
                <div class="modal-content" style="position: relative; bottom: 50px; right: 50px; height: 480px; width: 850px;">
                    <div class="modal-header" style="background-color: #00A7CC;">
                        <h5 class="modal-title"><span id="tittle-main-exit-s">ADICION ACCESS POINT</span>                    
                        <img src="../../../images/speaker.png" alt="parlante-audio-etb" class="img-audio" id="img_info_sf" onclick="alertAudio('au_info_svas', 'img_info_sf', 1, 1)">
                        <audio id="au_info_svas" controls class="audio" style="display: none;">
                            <source type="audio/wav" src="../../../../Model/audioSuma/audio_com/gcs21.mp3">
                        </audio><span id="titulo-alerta-corr-s"></span></h5>
                    </div>
                    <div class="modal-body">
                        <div style="position: relative; bottom: 45px; right: 150px;">

                            <div style="display: -webkit-box;">
                            <input type="checkbox" style="margin-right: 25px;"><p style="color: var(--orange-etb);">WIFI PLUS TIPO 1</p>
                            <select name="" id="" style=" position: relative; left: 280px; width: 180px;">
                                <option value="">Cantidad...</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                            </div>

                            <div style="display: -webkit-box;">
                            <input type="checkbox" style="margin-right: 25px;"><p style="color: var(--orange-etb);">SOLUCION AP MESH 2</p>
                            <select name="" id="" style=" position: relative; left: 236px; width: 180px;">
                                <option value="" >Cantidad...</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                            </div>

                            <div style="display: -webkit-box;">
                            <input type="checkbox" style="margin-right: 25px;"><p style="color: var(--orange-etb);">SOLUCION AP MESH 2</p>
                            <select name="" id="" style=" position: relative; left: 236px; width: 180px;">
                                <option value="" >Cantidad...</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                            </div>

                            <div style="display: -webkit-box;">
                            <input type="checkbox" style="margin-right: 25px;"><p style="color: var(--orange-etb);">AP MESH ADICIONAL</p>
                            <select name="" id="" style=" position: relative; left: 246px; width: 180px;">
                                <option value="" >Cantidad...</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                                <option value="">8</option>
                                <option value="">9</option>
                            </select>
                            </div>

                        </div>

                    </div>
                    <div style="position: relative; left: 75px; bottom: 60px;">
                        <p>Cantidad total</p>
                        <p style="color: var(--orange-etb);">El cliente tiene derecho a 1 AP con costo</p>
                    </div>

                    <div style="position: relative; bottom: 60px;">
                        <button type="button" style="background: #00A7CC; border: 2px solid #00A7CC; border-radius: 5px; color: #fff; left: 76px; bottom: 10px; position: relative;">CANCELAR</button>
                        <button type="button" style="background: #00A7CC; border: 2px solid #00A7CC; border-radius: 5px; color: #fff; left: 76px; bottom: 10px; position: relative;" onclick="port2();">ACEPTAR</button>
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
    <script src="../../../../Controller/suma/FTTH/reporteFTTH.js"></script>
    <script src="../../../../Controller/security/FTTHNO/anti-cheat-ftthno6.js"></script>
</body>
</html>