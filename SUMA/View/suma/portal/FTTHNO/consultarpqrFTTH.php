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
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-temp"></div></td>
                    <td>6</td>
                    <td>MDM-PQR-38440786</td>
                    <td>nnicrod</td>
                    <td>INCIDENTES ETB</td>
                    <td>25/04/2024 8:57:29 a.m.</td>
                    <td>Enviado a Segundo Nivel</td>
                    <td>PETICION</td>
                    <td>FALLA TECNICA</td>
                    <td>4347230001002018</td>
                    <td></td>
                    <td>7777777</td>
                    <td></td>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-error"></div></td>
                    <td>10</td>
                    <td>MDM-PQR-38343512</td>
                    <td>nnicrod</td>
                    <td>FRANK REY</td>
                    <td>19/04/2024 12:27:00 p.m.</td>
                    <td>Enviado a Segundo Nivel</td>
                    <td>PETICION</td>
                    <td>FALLA TECNICA</td>
                    <td>4347230000956565</td>
                    <td>3921039470</td>
                    <td>6016273535</td>
                    <td></td>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-error"></div></td>
                    <td>11</td>
                    <td>MDM-PQR-38319845</td>
                    <td>nnicrod</td>
                    <td>CRISS GREEN</td>
                    <td>18/04/2024 09:07:57 a.m.</td>
                    <td>Enviado a Segundo Nivel</td>
                    <td>PETICION</td>
                    <td>FALLA TECNICA</td>
                    <td>4347230000945344</td>
                    <td>7578846</td>
                    <td>6016253184</td>
                    <td></td>
                </tr>
                <tr class="row-bl">
                    <td><div class="semaforo semaforo-co"></div></td>
                    <td>0</td>
                    <td>MDM-PQR-38625974</td>
                    <td>nnicrod</td>
                    <td>LUCIANA CASTILLA</td>
                    <td>12/04/2024 15:51:10 p.m.</td>
                    <td>CREACION</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
    <script src="../../../../Controller/security/FTTHNO/anti-cheat-ftthno.js"></script>

</body>
</html>