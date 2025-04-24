<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/orden.css">
    <link rel="stylesheet" href="../../css/portal.css">
    <link rel="stylesheet" href="../../../css/mainSuma.css">
    <link rel="stylesheet" href="../../css/soporte.css">
    <link rel="stylesheet" href="../../css/portal2.css">
    <link rel="stylesheet" href="../../css/steps.css">
    <link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
    <link href="../../../fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../images/ETB.svg">
    <title>ETB - Portal</title>
</head>
<body style="overflow-y: hidden;">
    <div class="container-genre">

        <?php 
            include('../../../components/infoAudios.php');
            include('../../../components/sidebar.php');
            include('../../../components/navbar.php');
        ?>

        <script>
            var today = new Date();
            var day = today.getDate();
            var month = today.getMonth() + 1;
            var year = today.getFullYear();
            var hours = today.getHours();
            var minutes = today.getMinutes();
        </script>

        <div class="main-principal-portal">
            <div class="contedor-portal">
                <div class="breadcump">
                    <a href="#" class="item-bread">Home</a>
                    <a href="#" class="item-bread">Consulta</a>
                    <a href="#" class="item-bread">Vista 360</a>
                    <a href="#" class="item-bread">Validación Cliente</a>
            </div>

                    <!-- Paso 3 -->
                    <div class="paso-3" id="paso-3" style="display: block;">

                        <div style="display: grid; position: relative; left: 670px; top: 50px;">
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb); position: relative; right: 84px;">Tipo de Documento</span><p style="position: relative; right: 73px;">CC</p>
                            </div>
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb); position: relative; right: 114px;">Número de Documento</span><p style="position: relative; right: 103px;">1000958632</P>
                            </div>
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb);">Nombres *</span><textarea name="" id="" style="height: 29.5px;">NATALIA</textarea>
                            </div>
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb); position: relative; right: 47px;">Primer Apellido *</span><textarea name="" id="" style="height: 29.5px; position: relative; right: 47px;">FERNANDES</textarea>
                            </div>
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb); position: relative; right: 67px;">Segundo Apellido *</span><textarea name="" id="" style="height: 29.5px; position: relative; right: 67px;">HERNANDES</textarea>
                            </div>
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb); position: relative; right: 77px;">Número de Celular *</span><textarea name="" id="" style="height: 29.5px; position: relative; right: 77px;">3195216852</textarea>
                            </div>
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb); position: relative; left: 31px;">Email *</span><textarea name="" id="" style="height: 29.5px; position: relative; left: 31px;">naf@email.com</textarea>
                            </div>
                            <div style="display: flex;">
                            <span style="color: var(--orange-etb); position: relative; right: 127px;">Fecha de Expedicion Doc. *</span><input type="date" id="" style="height: 29.5px; width: 182px; position: relative; right: 127px;"> 
                            </div>
                            <div style="display: flex;">
                                <span style="color: var(--orange-etb); position: relative; right: 127px; font-size: 14px;">Autorizacion traramiento de datos personales</span>
                                <select name="" id="" style="position: relative; right: 125px; width: 74px;" disabled>
                                    <option value="">Si</option>
                                </select>
                            </div>
                            <div style="display: flex;">
                                <span style="color: var(--orange-etb); position: relative; right: 127px;"><input type="checkbox">Autoriza consulta y reporte en las centrales de riesgo</span> 
                            </div>
                            <div style="display: flex;">
                                <span style="color: var(--orange-etb); position: relative; right: 127px;"><input type="checkbox">¿Es empleado ETB?</span>
                            </div>
                        </div>
                    

                        <div class="con-btn-paso-2" style="display: flex; position: relative; top: 60px;"> 
                        <button style="background-color: #20A4CB;">CANCELAR</button>
                          <button onclick="btn_paso_4(),habladorText('Seleciona los datos correspondientes, para cada pregunta: <br>  Pregunta 1: D , Pregunta 2: B , Pregunta 3: D , Pregunta 4: A , Pregunta 5: A')">SIGUIENTE >></button>
                      </div>
                    </div>
                    <!-- Paso 3 -->

                    <!-- Paso 4 -->
                    <div class="paso" id="paso-4" style="display: none;">

                        <div style="display: grid;">
                            <span>¿Con cual de las siguientes entidades usted tiene exención de cuatro por <br> mil?</span>
                            <br>
                            <p><input type="radio">A. SCOTIABANK COLPATRIA</p>
                            <p><input type="radio">B. AV VILLAS</p>
                            <p><input type="radio">C. BANCO FINANDINA</p>
                            <p><input type="radio">D. Ninguna de las anteriores</p>
                        </div>

                        <div style="display: grid;">
                            <span>¿En algúna momento usted a tenido línea celular con CLARO SOLUCIONES <br> MÓVILES COMCEL?</span>
                            <br>
                            <p><input type="radio">A. SI</p>
                            <p><input type="radio">B. NO</p>
                        </div>

                        <div style="display: grid;">
                            <span>¿Con cuál de los siguientes direcciones tiene o ha tenido relación?</span>
                            <br>
                            <p><input type="radio">A. KR 59 #44 - 22</p>
                            <p><input type="radio">B. CL 4 C BIS #54 - 27</p>
                            <p><input type="radio">C. TV 38 B #7 - 24</p>
                            <p><input type="radio">D. Ninguna de las anteriores</p>
                        </div>

                        <div style="display: grid; position: relative; left: 800px; bottom: 590px;">
                            <span>¿Con cuál de los siguientes números de télefono tiene o ha tenido relación?</span>
                            <br>
                            <p><input type="radio">A. 3184697521</p>
                            <p><input type="radio">B. 3215796842</p>
                            <p><input type="radio">C. 3054269751</p>
                            <p><input type="radio">D. Ninguna de las anteriores</p>
                        </div>

                        <div style="display: grid; position: relative; left: 800px; bottom: 590px;">
                            <span>¿Usted canceló o saldó un crédito en la modalidad CONSUMO(LIBRE <br> INVERSIÓN) con DANN REGIONAL S.A en los últimos seis meses?</span>
                            <br>
                            <p><input type="radio">A. SI</p>
                            <p><input type="radio">B. NO</p>
                        </div>
                    
                        <div class="con-btn-paso-2" style="display: flex; position: relative; bottom: 450px;"> 
                            <button style="background-color: #20A4CB;">CANCELAR</button>
                            <button onclick="btn_paso_5(),habladorText('Aqui deberas seleccionar el canal por el cual, se realizara la validacion del cliente, para el ejemplo sera por medio de SMS al NUMERO 3195216852')">SIGUIENTE >></button>
                        </div>
                    </div>

                    <!-- Paso 5l -->
                    <div class="paso" id="paso-5" style="display: none;">

                        <div class="items-info items-sopor content-fact" id="df" style="height: 250px; width: 75%; position: relative; left: 200px; top: 70px;">
                            <div class="cabecera">
                                <h5>Ley 2300 de 2023</h5>
                            </div>
                            <div class="body-items-inf">
                                <div class="content-fact-fac" id="con-sopo-inter">
    
                                    <div class='content-item-info item-1' style="margin-top: 25px;">
                                        <label>Canal:</label> 
                                        <select name="" id="" style="width: 300px;" onchange="sms(),habladorText('Deberas introducir el codigo que se enviara directamente al celular ingresado <br><br> CELULAR: 3195216852 - CODIGO: 798106')">
                                            <option value="">Seleccione un canal...</option>
                                            <option value="">SMS</option>
                                            <option value="">CORREO ELECTRONICO</option>
                                            <option value="">LLAMADA</option>
                                            <option value="">WHATSAPP</option>
                                        </select>
                                    </div>

                                    <div class='content-item-info item-2' style="display: flex; margin-top: 25px;">
                                        <b style="margin-left: 40px;">Canal</b>
                                        <b style="margin-left: 20px;">Valor</b>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="items-info items-sopor content-fact" id="df2" style="height: 250px; width: 75%; position: relative; left: 200px; top: 70px; display: none;">
                            <div class="cabecera">
                                <h5>Ley 2300 de 2023</h5>
                            </div>
                            <div class="body-items-inf">
                                <div class="content-fact-fac" id="con-sopo-inter">
    
                                    <div class='content-item-info item-1' style="margin-top: 25px;">
                                        <label>Canal:</label> <select name="" id="" style="width: 300px;">
                                            <option value="">Seleccione un canal...</option>
                                        </select>
                                    </div>

                                    <div class='content-item-info item-2' style="display: flex; margin-top: 25px;">
                                        <b style="margin-left: 40px;">Canal</b>
                                        <b style="margin-left: 20px;">Valor</b>
                                    </div>

                                    <div class='content-item-info item-3' style="display: flex;">
                                        <img id="ale" src="../../../images/images-suma/alerta.png" alt="" style="width: 25px; height: 25px;">
                                        <img id="che" src="../../../images/images-suma/checkg.png" alt="" style="width: 25px; height: 25px; display: none;">
                                        <p style="margin-left: 25px;">SMS</p>
                                        <input id="co" type="number" style="margin-left: 25px;">
                                        <button id="valida" style="margin-left: 25px; background: #f26821;" onclick="gen2();">Validar</button>
                                        <button id="valida2" style="margin-left: 25px; background: #f26821; display: none;">Validar</button>
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="con-btn-paso-2" style="display: flex; position: relative; top: 60px;"> 
                            <button id="edn" onclick="alert('No has finalizado con la validacion')">FINALIZAR</button>
                            <button id="edn2" onclick="btn_fase();" style="display: none;">FINALIZAR</button>
                        </div>
                   </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ================================ MODALES ==================================================== -->

    <div class="alert-flotante" id="alert-flotante">
        <div class="etb-flotant etb-flotant-login" id="etb-flotant" style="position: relative; bottom: 30px;">
            <img src="../../../images/ETB.svg" alt="">
        </div>
        <div class="mensaje-parlante msg-parl-log" id="mensaje-parlante" style="position: relative; bottom: 30px;">
            <p id="text-msg-hab">
                <div class="lds-ellipsis" id="wait-text"><div></div><div></div><div></div><div></div></div>
            </p>
        </div>
        <div class="con-close-alert" onclick="ocultarHablador()">
            <img src="../../../images/cross_small.svg" alt="">
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-gen2">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="width: 400px;">
            <div class="modal-header">
            <h5 class="modal-title" id="mas">VALIDACIÓN CONTACTO</h5>
            </div>
            <div class="modal-body">
                <span>Se ha enviado un código a 3195216852, por favor ingresélo aqui para validar</span>
                <div style="display: flex; margin-top: 25px;">
                    <input type="text" placeholder="INGRESE CODIGO" style="height: 35px; margin-left: 80px;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="left: 0;" onclick="val();">VALIDAR CODIGO</button>
            </div>
        </div>
        </div>
    </div>

    <div class="alert-flotante" id="alert-flotante2">
            <div class="etb-flotant etb-flotant-login" id="etb-flotant2" style="position: relative; right: 560px; bottom: 480px;">
                <img src="../../../images/ETB.svg" alt="">
            </div>
            <div class="mensaje-parlante msg-parl-log" id="mensaje-parlante2" style="position: relative; right: 560px; bottom: 420px; height: 180px; width: 500px;">
                <p id="text-msg-hab2">
                    <div class="lds-ellipsis" id="wait-text2"><div></div><div></div><div></div><div></div></div>
                </p>
            </div>
            <div class="con-close-alert" onclick="ocultarHablador()" style="position: relative; right: 560px; bottom: 440px;">
                <img src="../../../images/cross_small.svg" alt="">
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

    <div class="modal modal-success-sim" tabindex="-1" id="modal-or">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content" style="width: 500px; position: relative; left: 670px;">
                    <div class="modal-body">
                        <p style="text-align: start;"><span>Resumen de la Compra</span></h5>
                        <br>
                        <p style="text-align: start;">Numero de Orden <span style="color: var(--orange-etb);">MDM-FIBRA-016342113</span></p>
                        <p style="text-align: start;">Descuento: <span style="color: var(--orange-etb);">Recuerda que cuentas con una AP sin costo</span></p>
                        <div class="con-table">
                            <table class="table-general table-sopor table-produc">
                                <tr>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Valor</th>
                                    <th>Valor Total</th>
                                </tr>
                                <tbody>
                                    <tr>
                                    <td>WIFI PLUS TIPO 1</td>
                                    <td><option value="">1</option></td>
                                    <td>$ 0</td>
                                    <td>$ 0</td>
                                    </tr>

                                    <tr>
                                    <td>1 IP PUBLICA FIJA MEG</td>
                                    <td><option value="">1</option></td>
                                    <td>$ 0</td>
                                    <td>$ 0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="margin-right: 175px;">ACEPTAR</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="modal modal-susc" tabindex="-1" id="cancel" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 100%; height: 350px;">
                <div class="modal-header">
                    <h5 class="modal-title">PROCESO CANCELACIÓN</h5>
                </div>
                <div>
                    <section class="left">
                        <br>
                        <p style="text-align: start; color: var(--orange-etb); margin-left: 10px; position: relative; left: 43px;">Motivo Cancelación * </p>
                        <p style="text-align: start; color: var(--orange-etb); margin-left: 10px; position: relative; left: 10px;">Submotivo Cancelación * </p>
                        <p style="text-align: start; color: var(--orange-etb); margin-left: 10px;">Descripción Cancelación * </p>
                        <br>
                    </section>
                    <section class="right" style="margin-top: 30px;">
                        <br>
                        <select style="position: relative; height: 29.5px; bottom: 205px; left: 230px;">
                            <option value="">Seleccione una opción</option>
                            <option value="">Contacto Fallido</option>
                        </select>
                        <select style="position: relative; height: 29.5px; bottom: 165px; left: 20px; width: 205px;">
                            <option value=""></option>
                            <option value="" style="color: #000;">Se pierde Comunicacion con Cliente</option>
                        </select>
                        <textarea name="" id="" style="position: relative; bottom: 150px; left: 230px; width: 205px;"></textarea>
                        <br>
                        <br>
                    </section>
                    <button onclick="sicancel();" style="background-color: var(--orange-etb); border: none; border-radius: 15px; color: #fff; position: relative; left: 180px; bottom: 150px;">ACEPTAR</button>
                    <button onclick="nocancel();" style="background-color: var(--orange-etb); border: none; border-radius: 15px; color: #fff; position: relative; left: 180px; bottom: 150px;">CANCELAR</button>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-susc" tabindex="-1" id="tab-comp" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 340px; position: relative; top: 317px; margin-right: 1150px;">
                <div class="modal-header" style="background-color: #20A4CB;">
                    <h5 style="color: #fff;">COMPARACIÓN DE SVA's</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="con-table">
                    <table class="table-general table-sopor table-produc">
                        <thead>
                            <tr>
                                <th colspan="2">Producto</th>
                                <th style="color: var(--orange-etb); background-color: #fff;">SVA Actual</th>
                                <th style="color: var(--orange-etb); background-color: #fff;">SVA Nuevo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">WIFI PLUS TIPO 1</td>
                                <td><img src="../../../images/images-suma/checkgreen.png" style="width: 25px; height: 25px;" alt=""></td>
                                <td><img src="../../../images/images-suma/checkgreen.png" style="width: 25px; height: 25px;" alt=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">1 IP PUBLICA FIJA NEG</td>
                                <td><img src="../../../images/images-suma/xred.png" style="width: 25px; height: 25px;" alt=""></td>
                                <td><img src="../../../images/images-suma/checkgreen.png" style="width: 25px; height: 25px;" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-susc" tabindex="-1" id="paso8" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 100%; height: 750px;">
                <div class="modal-header">
                    <h5 class="modal-title">RESUMEN ORDEN</h5>
                </div>
                <div class="final-info">

                    <h5 class="modal-title" style="position: relative; top: 60px;">EL TRAMITE SE HA EJECUTADO EXITOSAMENTE</h5><br>

                    <label for="">Número de Orden</label>
                    <span><p>MDM-FIBRA-000097311</p></span>

                    <label for="">CUN</label>
                    <span><p>4347210001220151</p></span>

                    <label for="">Bundle Seleccionado</label>
                    <span><p>DUO 300M HOG - V3</p></span>

                    <label for="">Tecnología</label>
                    <span><p>FTTH</p></span>

                    <label for="">Valor del Servicio</label>
                    <span><p>$ 79900</p></span>

                    <label for="">Nueva Oferta Anterior</label>
                    <span><p>DUO 300M HOG - V3</p></span>

                    <label for="">Precio Oferta Anterior</label>
                    <span><p>$ 79900</p></span>
                </div>
                <div class="modal-footer">
                    <button id="btn-paso-3" onclick="btn_fase();">ACEPTAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="modal-fase1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">ESCUELA ETB</h5>
            </div>
            <div class="modal-body">
            <p>Has finalizado con exito el escenario de LA LEY 2300 DE 2023 del Simulador SUMA, recuerda que siempre esta a tu disposicion y cuentas con intentos ilimitados :)</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.href ='../../menu/menuSUMA.html'" style="left: 0;">ACEPTAR</button>
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
    <script src="../../../../Controller/suma/SVAS/portalSVASPartII.js"></script>
    <script src="../../../../Controller/suma/SVAS/cpqrSVAS.js"></script>
    <script src="../../../../Controller/security/SVAS/anti-cheat-svas22.js"></script>

    <script>
        habladorText('Selecciona la fecha de expedición del cliente, ademas de  seleccionar la casilla de autorizar la consulta y reporte. <br> FECHA DE EXPEDICION: 10/10/2024')
    </script>

</body>
</html>