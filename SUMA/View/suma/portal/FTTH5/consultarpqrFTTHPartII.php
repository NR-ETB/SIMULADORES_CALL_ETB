<!DOCTYPE html>
<html lang="en" id="fond">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/pqr.css">
    <link rel="stylesheet" href="../../../css/mainSuma.css">
    <link rel="stylesheet" href="../../css/portal.css">
    <link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
    <link href="../../../fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
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

<div class="main-pqr"> 

<div class="usuario" style="margin-left: 35px;">
                <div>
                    <label for="">Número de PQR</label>
                    <input type="text" id="buss">
                </div>
                <div>
                    <label for="">CUN</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Número Identificacion Cliente</label>
                    <span><input type="text" name="relacion" id="inputValor" value="" style="width: 49%; border-color: #20a4cb;" disabled ></span>
                            <span class="select-relacion">
                            <input type="text" style="width: 49%; border-color: #20a4cb;">
                            </span>
                </div>
            </div>

            <script>
                var today = new Date();
                var day = today.getDate();
                var month = today.getMonth() + 1;
                var year = today.getFullYear();
                var hours = today.getHours();
                var minutes = today.getMinutes();
            </script>

            <div class="usuario" style="margin-left: 35px;">
                <div>
                    <label for="">Numero de Conexion</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Cuenta de Facturacion</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Dias Habiles</label>
                    <input type="text">
                </div>
            </div>

            <div class="usuario" style="margin-left: 35px;">
                <div>
                    <label for="">Estado</label>
                    <input type="text">
                </div>
                <div style="margin-left: 150px;">
                    <button class="pqr-b3" style="width: 30%;">Reasignar</button>
                    <button class="pqr-b3" style="width: 25%;" onclick="bus();">Buscar</button>
                    <button class="pqr-b2" style="width: 40%;">Mi Semaforo</button>
                </div>
            </div>
            
            <div class="line" style="width: 100%; margin-left: 35px;"></div>
            
            <div class="modal-body">

            <table class="table-general table-sopor" style="width: 400px; position: relative; bottom: 10px; margin: 20px 0 0 60px;">
                <tr>
                    <th>Semáforo</th>
                    <th>Días Habíles</th>
                    <th>Número PQR</th>
                    <th>Usuarios Asignados</th>
                    <th>Nombre Cliente</th>
                    <th>Fecha Ingreso</th>
                    <th>Estado</th>
                    <th>Clase</th>
                    <th>Motivo</th>
                    <th>CUN</th>
                    <th>Cuenta Facturacion</th>
                    <th>Número conexion</th>
                    <th>Número pedido</th>
                </tr>
                <tr id="abi3" class="row-bl" onclick="tabac5(),tabac6();">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>16</td>
                    <td>MDM-PQR-3939241</td>
                    <td>nnicrod</td>
                    <td>CLAID MUSS</td>
                    <td>3:42 7/8/2024</td>
                    <td>CERRADO</td>
                    <td></td>
                    <td>FALLA TECNICA</td>
                    <td>6250124658754401</td>
                    <td>4444</td>
                    <td>6013215796485</td>
                    <td></td>
                </tr>
                <tr id="abi4" class="row-bl" onclick="tabac7(),tabac8();">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>8</td>
                    <td>MDM-PQR-3939242</td>
                    <td>nnicrod</td>
                    <td>CLAID MUSS</td>
                    <td>4:16 11/8/2024</td>
                    <td>CERRADO</td>
                    <td></td>
                    <td>FALLA TECNICA</td>
                    <td>6250124658754402</td>
                    <td>4444</td>
                    <td>6013215796485</td>
                    <td></td>
                </tr>
                <tr id="abi5" class="row-bl" onclick="tabac9(),tabac10();">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>4</td>
                    <td>MDM-PQR-3939243</td>
                    <td>nnicrod</td>
                    <td>CLAID MUSS</td>
                    <td>9:59 15/8/2024</td>
                    <td>CERRADO</td>
                    <td></td>
                    <td>FALLA TECNICA</td>
                    <td>6250124658754402</td>
                    <td>4444</td>
                    <td>6013215796485</td>
                    <td></td>
                </tr>
                <tr id="abi6" class="row-bl" onclick="tabac11(),tabac12();">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>0</td>
                    <td>MDM-PQR-3939243</td>
                    <td>nnicrod</td>
                    <td>CLAID MUSS</td>
                    <td><script>document.write(`${hours}:${minutes}`)</script><br><script>document.write(`${month}/${day}/${year}`)</script></td>
                    <td>CERRADO</td>
                    <td></td>
                    <td>FALLA TECNICA</td>
                    <td>6250124658754404</td>
                    <td>4444</td>
                    <td>6013215796485</td>
                    <td></td>
                </tr>
            </table>
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

            <div class="modal modal-success-sim" tabindex="-1" id="modal-spqr">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INFORMACIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p>PQR MDM-PQR-3939243 cerrada correctamente</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" onclick="btn_pqr3();">ACEPTAR</button>
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
                    <p>Has finalizado con exito la FALLA FTTH del simulador SUMA, recuerda que siempre esta a tu disposicion y cuentas con intentos ilimitados :)</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.href ='../../menu/menuSUMA.html'">ACEPTAR</button>
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
    <script src="../../../../Controller/suma/FTTH/pqrFTTH.js"></script>
    <script src="../../../../Controller/security/FTTH5/anti-cheat-ftth2.js"></script>

</body>
</html>