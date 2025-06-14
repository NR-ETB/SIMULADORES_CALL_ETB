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
<body>
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
                    <a href="#" class="item-bread" style="display: none;">Consulta</a>
                    <a href="#" class="item-bread">Retención</a>
                    <a href="#" class="item-bread" style="display: none;">Consulta</a>
                    <a href="#" class="item-bread">Consultas Retención</a>
                    <a href="#" class="item-bread" style="border: none; color: #11a8f3 !important;">Cliente: HERNAN CAPEIRO</a>
            </div>
        </div>
                
        <div class="imgmenu" style="height: 320px;">

            <img style="cursor: pointer;" class="img1" onclick="pqr();" src="../../../images/speaker.png" alt="">
            <img style="cursor: pointer;" onclick="tram();" src="../../../images/stadis.png" alt="">
            <img style="cursor: pointer;" onclick="sup();" src="../../../images/menuss.png" alt="">
            <img style="cursor: pointer;" onclick="prod();" src="../../../images/db2.png" alt="">
            <img style="cursor: pointer;" onclick="ret();" src="../../../images/stadis2.png" alt="">
            <img style="cursor: pointer;" onclick="bun();" src="../../../images/net.png" alt="">

        </div>

        <div style="display: flex;">

            <div class="items-info items-sopor item-datas" style="width: 776px; margin-right: 15px; margin-left: 15px;">
                <div class="cabecera" style="background-color: #fff;">
                <h5>Datos Cliente</h5>
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_cliente', 'img_datos_cliente', 2, 0)">
                    <audio id="au_datos_cliente" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_datos_cliente.mp3">
                    </audio>
                </div>
            
                <div class="body-items-inf" style="height: 290px;">
                    <div class="content-info" id="con-sopo-inter">
                    
                                        <div class='content-item-info item-1' style="position: relative; top: 40px; width: 220px;">
                                            <label>Nombre</label> <span>HERNAN CAPEIRO</span><br>
                                            <label>Tipo de Documento</label> <span>PASAPORTE</span><br>
                                            <label>Numero de Documento</label> <span>1000634251</span><br>
                                            <label>Email</label> <span>hcpe@email.com</span><br>
                                            <label>Celular</label> <span>3176251432</span><br><br>
                                            <button style="font-size: 10px; position: relative; top: 170px;">Actualizar Inf. Contacto</button>
                                        </div>

                                        <div class='content-item-info item-2' style="position: relative; right: 20px; bottom: 7px;">
                                            <div style="position: relative; left: 230px; bottom: 3px;">
                                                <label>UEN</label> <span>Hogares y Mipymes</span><br>
                                                <label>Departamento</label> <span>BOGOTA</span><br>
                                                <label>Ciudad</label> <span>BOGOTA D.C</span><br>
                                                <label>Direccion</label> <span>Calle 172 #16 a 24</span><br>
                                                <label>Telefono Fijo</label> <span>6017829304</span><br>
                                            </div>
                                        </div>
                    </div>
                </div>
            </div>

            <div class="items-info items-sopor item-datas" style="width: 776px;">
                <div class="cabecera" style="background-color: #fff;">
                <h5>Servicio</h5>
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_fact" onclick="alertAudio('au_datos_fact', 'img_datos_fact', 2, 3)">
                    <audio id="au_datos_fact" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_datos_fact.mp3">
                    </audio>
                </div>
            
                <div class="body-items-inf" style="height: 490px;">
                    <div class="content-info" id="con-sopo-inter">
                    
                                        <div class='content-item-info item-1' style="position: relative; bottom: 25px; width: 220px;">
                                            <label>Cuenta de Facturacion</label> <span>7777</span><br>
                                            <label>Dept. Instalacion</label> <span>BOGOTA</span><br>
                                            <label>Paquete</label> <span>DUO 700M HOG</span><br>
                                            <label>Sistema Origen</label> <span>SUMA</span><br>
                                            <label>Antiguedad</label> <span>18.47 Meses</span><br>
                                            <label>UEN</label> <span>HOGARES Y PYMES</span><br>
                                            <label>Tarifa</label> <span>$139900.00</span><br>
                                            <label>Calificacion CHURN</label> <span>Bajo</span><br><br>
                                            <span style="position: relative; top: 95px;">Duo</span><label style="position: relative; left: 530px; top: 95px;">Tipo Plan Fija</label><br><br>
                                            <label style="position: relative; top: 100px;">Beneficio Retencion</label> <input style="position: relative; top: 100px;" type="checkbox" disabled><br>
                                        </div>

                                        <div class='content-item-info item-2' style="position: relative; right: 20px; top: 11px;">
                                            <div style="position: relative; left: 230px; bottom: 3px;">
                                                <label>Direccion Instalacion</label> <span>Calle 172 #16 a 24</span><br>
                                                <label>Ciudad Instalacion</label> <span>BOGOTA D.C</span><br>
                                                <label>Velocidad Banda Ancha</label> <span>700M</span><br>
                                                <label>Estrato</label> <span>6</span><br>
                                                <label>Tecnologia</label> <span>FTTH</span><br>
                                                <label>Estado</label> <span>ACTIVO</span><br>
                                                <label>Fecha Activacion</label> <span>MAR 25, 2025</span><br>
                                                <label>Numero Conexion</label> <span>6017829304</span><br>
                                                <label>LTE</label> <input type="checkbox" disabled><br><br>
                                                <label style="position: relative; top: 30px;">Plan Retencion</label> <input style="position: relative; top: 30px;" type="checkbox" disabled><br>
                                            </div>
                                        </div>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="items-info items-sopor item-datas" style="width: 1570px; margin-left: 15px;">
            <div class="cabecera" style="background-color: #fff;">
            <h5>Motivos Retiro</h5>
                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_reten2', 'img_datos_cliente', 2, 0)">
                <audio id="au_datos_reten2" controls class="audio" style="display: none;">
                    <source type="audio/wav" src="../../../../Model/audioSuma/reten/reten5.mp3">
                </audio>
            </div>
        
            <div class="body-items-inf" style="height: 260px;">
                <div class="content-info" id="con-sopo-inter">
                
                    <div class='content-item-info item-1' style="position: relative; bottom: 25px;">

                        <div style="display: flex;">
                            <label>Tipos</label> <select name="" id="" style="width: 630px; margin-left: 26px; margin-bottom: 5px;" disabled>
                                <option value="">Servicio Principal</option>
                                <option value="">SVA</option>
                            </select><br>
                        </div>


                        <div style="display: flex;">
                            <label>Motivos</label> <select name="" id="mot" style="width: 630px; margin-left: 5px;">
                                <option value="1" selected>Problemas Técnicos</option>
                                <option value="2">ECÓNOMICO</option>
                                <option value="3">Facturación</option>
                                <option value="4">Traslado - Fuera de cobertura</option>
                                <option value="5">Competencia</option>
                                <option value="6">Inconformidades de Servicio</option>
                                <option value="7">Personales</option>
                            </select><br>
                        </div>

                    </div>

                    <div class='content-item-info item-2' style="position: relative; right: 20px; top: 11px;">
                        
                        <div style="position: relative; left: 60px; bottom: 15px;">

                            <div style="display: flex;">
                                <label>Servicios</label> <select name="" id="" style="width: 630px; margin-left: 17.8px; margin-bottom: 5px;" disabled>
                                    <option value="">DUO 700M HOG</option>
                                </select><br>
                            </div>

                            <div id="sub1" style="display: flex;">
                                <label>SubMotivo</label> <select name="" id="fall" style="width: 630px; margin-left: 5px;">
                                    <option value="0">Seleccione un SubMotivo...</option>
                                    <option value="0">Falla Televisión</option>
                                    <option value="0">Falla en Voz (Línea, local, nacional o internacional)</option>
                                    <option value="1" selected>Falla todos los servicios</option>
                                    <option value="0">Falla en DirectvGO</option>
                                    <option value="0">Falla Internet (cable y/o WiFi)</option>
                                </select><br>
                            </div>

                    </div>

                    <div style="display: flex; position: relative; right: 250px; top: 35px;">
                        <p style="margin-right: 40px;">Nueva...</p>
                        <button style="width: 400px; border-radius: 25px;">RETENER</button>
                        <div class="semaforo semaforo-co" style="margin-left: 200px;"></div>
                    </div>

                </div>
            </div>
        </div>

        <div style="display: flex;">
            <div id="flujo-btn" class="btn-flot" style="cursor: text; border-radius: 0; width: 180px; margin-left: 100px;" onclick="fat();">Facturacion</div>
            <div id="flujo-btn" class="btn-flot" style="cursor: text; border-radius: 0; margin-left: 290px; width: 180px;" onclick="prom();">Promociones</div>
            <div id="flujo-btn" class="btn-flot" style="cursor: text; border-radius: 0; margin-left: 480px; width: 180px;" onclick="est();">Estado</div>
        </div>
        
        </div>

        <div id="reto">

            <div class="contedor-portal" style="width: 1600px;">
                <div class="breadcump">
                    <a href="#" class="item-bread">Retención</a>
                    <a href="#" class="item-bread">RF-003575869</a>
                    <a href="#" class="item-bread">Estado Retención: Pendiente</a>
                    <a href="#" class="item-bread">Nivel: 3</a>
            </div>

            <div class="items-info items-sopor item-datas" style="width: 1620px; height: 1800px; position: relative; right: 20px;">
                <div class="cabecera" style="background-color: #fff;">
                <h5>Retención</h5>
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_ret', 'img_datos_cliente', 2, 0)">
                    <audio id="au_datos_ret" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/reten/reten6.mp3">
                    </audio>
            </div>
            <div class="acon-main-pasos" style="margin-top: 50px; padding: 0 30px;">
                <div class="con-pasos sw-main sw-theme-arrows" id="smartwizard">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="nav-item done" id="pasoli-1"><a class="nav-link">Paso 1<br><small style="color: transparent;">...</small></a></li>
                        <li class="nav-item done" id="pasoli-2"><a class="nav-link">Paso 2<br><small style="color: transparent;">...</small></a></li>
                        <li class="nav-item done" id="pasoli-3"><a class="nav-link">Paso 3<br><small style="color: transparent;">...</small></a></li>
                        <li class="nav-item done" id="pasoli-4"><a class="nav-link">Paso 4<br><small style="color: transparent;">...</small></a></li>
                        <li class="nav-item done" id="pasoli-5"><a class="nav-link">Paso 5<br><small style="color: transparent;">...</small></a></li>
                        <li class="nav-item done" id="pasoli-6"><a class="nav-link">Paso 6<br><small style="color: transparent;">...</small></a></li>
                        <li class="nav-item active" id="pasoli-7"><a class="nav-link">Paso 7<br><small style="color: transparent;">...</small></a></li>
                        <li class="nav-item nav-item-alert"><a class="nav-link">
                            <img src="../../../images/speaker.png" alt="parlante-audio-etb" class="img-audio" id="img-list-paso-a" onclick="alertAudio('au-list-paso-a', 'img-list-paso-a')" style="margin-left: 20px;">
                            <audio id="au-list-paso-a" controls class="audio" style="display: none;">
                                <source type="audio/wav" src="../../../../Model/audioSuma/reten/reten3.mp3">
                            </audio>
                        </a></li>   
                    </ul>
                </div>
                
                
                <div class="items-info items-sopor item-datas" style="margin-top: 50px; width: 1510px;">

                    <!-- Paso 1 -->
                    <div class="paso-1" id="paso-1" style="position: relative; bottom: 40px; height: 380px;">

                        <div class="con-btn-paso-2" style="display: flex; position: relative; right: 500px; bottom: 12px;">
                            <button id="btn-paso-3" style="height: 24px;">RETIRAR >></button>
                            <button id="btn-paso-3" style="height: 60px;">ABANDONAR RETENCIÓN  <br>>></button>
                        </div>

                        <div style="display: flex; position: relative; left: 270px;">
                            <div style="display: flex;">
                                <label style="color: #F36F31;">Nombre</label> <p style="margin-left: 17.8px; color: #005b96;">Oferta escalera retención XL (no cuenta control)</p>
                            </div>


                            <div style="display: flex; position: relative; left: 270px;">
                                <label style="color: #F36F31;">Descripción</label> <p style="margin-left: 17.8px; color: #005b96;">Cliente obtiene 1 mes sin costo, más descuento <br> del 15% en la Oferta retención S</p>
                            </div>
                        </div>

                        <div style="display: flex; position: relative; left: 270px; top: 50px;">
                            <p style="color: #F36F31;">Observaciones</p>
                            <textarea style="margin-left: 10px; width: 700px; height: 100px;" name="" id="description7">Cliente obtiene 1 mes sin costo, más desceunto del 15% en la Oferta retención S</textarea>
                        </div>

                        <div class="con-btn-paso-2" style="position: relative; top: 180px;">
                            <div class="mar">
                                <button id="btn-paso-3"><< ANTERIOR</button>
                                <button style="background-color: #20A4CB;">ACEPTAR</button>
                            </div>
                        </div>
                    </div>
                    <!-- Paso 1 -->

                </div>

                    <div class="items-info items-sopor item-datas" style="margin: 155px 0 0 0; width: 1565px;">

                        <div class="table-product" id="con-sopo-inter">
                            <div class="con-table2">
                                <table class="table-general table-sopor table-produc" style="width: 95%; margin: 20px 0 20px 35px; table-layout: fixed;">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">Paso</th>
                                            <th style="width: 15%;">Fecha</th>
                                            <th style="width: 20%;">Acción</th>
                                            <th style="width: 30%;">Descripción</th>
                                            <th style="width: 15%;">Estado Acción</th>
                                            <th style="width: 15%;">Observaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="row-bl" id="retab">
                                            <td>1</td>
                                            <td>4/3/2025 8:45:42 AM</td>
                                            <td>Soporte primer nivel</td>
                                            <td>Cliente retenido solucionando en línea fallas técnicas en sus servicios</td>
                                            <td>Rechazado</td>
                                            <td>Cliente retenido solucionando en línea fallas técnicas en sus servicios</td>
                                        </tr>
                                        <tr id="retab2">
                                            <td>2</td>
                                            <td>4/3/2025 8:46:39 AM</td>
                                            <td>Visita técnica</td>
                                            <td>Generar visita técnica ya que al hacer soporte técnico continúan las fallas del servicio</td>
                                            <td>Rechazado</td>
                                            <td>Generar visita técnica ya que al hacer soporte técnico continúan las fallas del servicio</td>
                                        </tr>
                                        <tr class="row-bl" id="retab3">
                                            <td>3</td>
                                            <td>4/3/2025 8:46:21 AM</td>
                                            <td>Oferta escalar retención (S/In cuenta control)</td>
                                            <td>Cliente obtiene 15% de descuento sobre su plan contratado</td>
                                            <td>Rechazado</td>
                                            <td>Cliente obtiene 15% de descuento sobre su plan contratado</td>
                                        </tr>
                                        <tr id="retab4">
                                            <td>4</td>
                                            <td>4/3/2025 8:46:57 AM</td>
                                            <td>Oferta escalar retención (M/In cuenta control)</td>
                                            <td>Cliente obtiene 20% de descuento sobre su plan contratado</td>
                                            <td>Rechazado</td>
                                            <td>Cliente obtiene 20% de descuento sobre su plan contratado</td>
                                        </tr>
                                        <tr class="row-bl" id="retab5">
                                            <td>5</td>
                                            <td>4/3/2025 8:47:35 AM</td>
                                            <td>Oferta escalar retención (L/In cuenta control)</td>
                                            <td>Cliente obtiene 25% de descuento sobre su plan contratado</td>
                                            <td>Rechazado</td>
                                            <td>Cliente obtiene 25% de descuento sobre su plan contratado</td>
                                        </tr>
                                        <tr id="retab6">
                                            <td>6</td>
                                            <td>4/3/2025 8:47:47 AM</td>
                                            <td>Oferta de retención Básica</td>
                                            <td>Cliente se le otorgará una tarifa preferencial ($60.000)</td>
                                            <td>Rechazado</td>
                                            <td>Cliente se le otorgará una tarifa preferencial ($60.000)</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>  
                        
                    </div>
            
                    </div>
            
                    <div class="items-info items-sopor item-datas" style="margin: 65px 0 0 0; width: 1565px;">
                            <div class="cabecera" style="background-color: #fff;">
                            <h5>Caracteristicas</h5>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_reten', 'img_datos_cliente', 2, 0)">
                                <audio id="au_datos_reten" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/reten/reten4.mp3">
                                </audio>
                        </div>
                        <div class="table-product" id="con-sopo-inter">
                            <div class="con-table2">
                                <table class="table-general table-sopor table-produc" style="margin: 50px 0 20px 80px; width: 90%;">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Información Función</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <tr class="row-bl">
                                            <td>Tipo</td>
                                            <td>Servicio Principal</td>
                                        </tr>
                                        <tr>
                                            <td>Servicio</td>
                                            <td>DUO 700M HOG</td>
                                        </tr>
                                        <tr class="row-bl">
                                            <td>Versión</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Número Agrupación</td>
                                            <td>6236</td>
                                        </tr>
                                    </tbody>
                                </table>                    
                        </div>  
                        
                    </div>
            
                    </div>

                    <div class="con-btn-paso-2" style="display: flex; position: relative; top: 35px;">
                        <button id="btn-paso-3" style="height: 50px; width: 250px;" onclick="btn_end();"><< FINALIZAR >></button>
                    </div>

                </div>

            </div>

            </div>

        </div>
        
                    
    <!-- ================================ MODALES ==================================================== -->

    <div class="modal fade" id="ofertasModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 50px;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center" style="border-radius: 10px; border: none; box-shadow: 0px 0px 14px 10px rgba(243, 111, 49, 0.75);">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p class="fw-bold">Las ofertas disponibles para el cliente son:</p>
                    <ul class="list-unstyled">
                        <li>Oferta escalera retención S (no cuenta control)</li>
                        <li>Oferta escalera retención M (no cuenta control)</li>
                        <li>Oferta escalera retención L (no cuenta control)</li>
                        <li>Oferta de retención Básica</li>
                        <li>Oferta escalera retención XL (no cuenta control)</li>
                    </ul>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" style="background-color: #F36F31;" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ofertasModal_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 50px;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center" style="border-radius: 10px; border: none; box-shadow: 0px 0px 14px 10px rgba(243, 111, 49, 0.75); padding: 20px;">
                <div class="modal-body">
                    <p class="fw-bold">
                        El valor por pagar con la selección de la estrategia <b>Oferta escalera retención S (no cuenta control)(15%)</b> es <b>$ 76.594,00</b> IVA incluido
                    </p>
                    <p><i>*La tarifa aplica solo para productos principales</i></p>
                    
                    <div class="text-start" style="padding: 10px;">
                        <p><b>Valor de la oferta actual:</b> <span style="float: right;">$ 90.110,00</span></p>
                        <p><b>Valor a pagar con la oferta:</b> <span style="float: right; color: green;">$ 76.594,00</span></p>
                        <p><b>Beneficio entregado:</b> <span style="float: right; color: green;">$ 13.516,00</span></p>
                    </div>
    
                    <p style="color: #F36F31; font-weight: bold;">
                        Esta degradación será por tiempo definido para la oferta correspondiente
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" style="background-color: #005b96; border: none; width: 200px;" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ofertasModal_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 50px;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center" style="border-radius: 10px; border: none; box-shadow: 0px 0px 14px 10px rgba(243, 111, 49, 0.75);">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p class="fw-bold">
                        El valor por pagar con la selección de la estrategia 
                        <b>Oferta escalera retención M</b> (no cuenta control)(20%) es: 
                        <b>$72.088,00 IVA incluido</b>
                    </p>
                    <p><i>*La tarifa aplica solo para productos principales</i></p>
                    <table class="table text-start">
                        <tbody>
                            <tr>
                                <td>Valor de la oferta actual:</td>
                                <td><b>$90.110,00</b></td>
                            </tr>
                            <tr>
                                <td>Valor a pagar con la oferta:</td>
                                <td style="color: green;"><b>$72.088,00</b></td>
                            </tr>
                            <tr>
                                <td>Beneficio entregado:</td>
                                <td style="color: green;"><b>$18.022,00</b></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="color: #F36F31; font-weight: bold;">
                        Esta degradación será por tiempo definido para la oferta correspondiente
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="ofertasModal_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 50px;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center" style="border-radius: 10px; border: none; box-shadow: 0px 0px 14px 10px rgba(243, 111, 49, 0.75);">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p class="fw-bold">
                        El valor por pagar con la selección de la estrategia 
                        <b>Oferta escalera retención L</b> (no cuenta control)(25%) es: 
                        <b>$67.582,00 IVA incluido</b>
                    </p>
                    <p><i>*La tarifa aplica solo para productos principales</i></p>
                    <table class="table text-start">
                        <tbody>
                            <tr>
                                <td>Valor de la oferta actual:</td>
                                <td><b>$90.110,00</b></td>
                            </tr>
                            <tr>
                                <td>Valor a pagar con la oferta:</td>
                                <td style="color: green;"><b>$67.582,00</b></td>
                            </tr>
                            <tr>
                                <td>Beneficio entregado:</td>
                                <td style="color: green;"><b>$22.528,00</b></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="color: #F36F31; font-weight: bold;">
                        Esta degradación será por tiempo definido para la oferta correspondiente
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="ofertasModal_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 50px;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center" style="border-radius: 10px; border: none; box-shadow: 0px 0px 14px 10px rgba(243, 111, 49, 0.75);">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p class="fw-bold">
                        El valor por pagar con la selección de la estrategia 
                        <b>Oferta de retención Básica</b> es: 
                        <b>$60.000,00 IVA incluido</b>
                    </p>
                    <p><i>*La tarifa aplica solo para productos principales</i></p>
                    <table class="table text-start">
                        <tbody>
                            <tr>
                                <td>Valor de la oferta actual:</td>
                                <td><b>$90.110,00</b></td>
                            </tr>
                            <tr>
                                <td>Valor a pagar con la oferta:</td>
                                <td style="color: green;"><b>$60.000,00</b></td>
                            </tr>
                            <tr>
                                <td>Beneficio entregado:</td>
                                <td style="color: green;"><b>$30.110,00</b></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="color: #F36F31; font-weight: bold;">
                        Esta degradación será por tiempo definido para la oferta correspondiente
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
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

    <div class="alert-flotante" id="alert-flotante3">
        <div class="etb-flotant etb-flotant-login" id="etb-flotant">
            <img src="../../../images/ETB.svg" alt="">
        </div>
        <div class="mensaje-parlante msg-parl-log" id="mensaje-parlante3">
            <p id="text-msg-hab3">
                <div class="lds-ellipsis" id="wait-text"><div></div><div></div><div></div><div></div></div>
            </p>
        </div>
        <div class="con-close-alert" onclick="ocultarHablador()">
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

    <div class="modal fade" id="modal-pqr"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title">PQR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="items-info items-sopor item-datas" style="margin: 15px; width: 770px;">
                    <div class="cabecera" style="background-color: #fff;">
                        <h5>PQRs</h5>
                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_cliente', 'img_datos_cliente', 2, 0)">
                        <audio id="au_datos_cliente" controls class="audio" style="display: none;">
                            <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_datos_cliente.mp3">
                        </audio>
                    </div>
                    <div class="modal-body" style="overflow-x: hidden;">
                        <p id="ayu5" style="position: relative; top: 15px; left: 50px;">Mostrar<input style="width: 30px;" type="text" placeholder="1" disabled>registros</p>
                        <p style="position: relative; bottom: 25px; left: 495px;">Buscar:<input style="width: 170px; margin-left: 10px;" type="text" placeholder="" disabled></p>
                                
                            <div class="table-product" id="con-sopo-inter">
                                    <div class="con-table2">
                                        <table class="table-general table-sopor table-produc">
                                        <thead>
                                            <tr>
                                                <th>Número PQR</th>
                                                <th>CUN</th>
                                                <th>Fecha Creación</th>
                                                <th>Tipo PQR</th>
                                                <th>Número Conexión</th>
                                                <th>Motivo</th>
                                                <th>Causal</th>
                                                <th>Síntoma</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>MDM-PQR-46170941</td>
                                                <td>4347240001239690</td>
                                                <td>6/26/2024 10:50:43 AM</td>
                                                <td>PRODUCTO</td>
                                                <td>6013713128</td>
                                                <td>FALLA TECNICA</td>
                                                <td>FALLA INTERNET</td>
                                                <td>SIN SERVICIO -F</td>
                                                <td>Cerrado</td>
                                            </tr>
                                            <tr>
                                                <td>MDM-PQR-46109748</td>
                                                <td>4347240001212473</td>
                                                <td>6/22/2024 3:53:41 PM</td>
                                                <td>PRODUCTO</td>
                                                <td>6013713128</td>
                                                <td>INFORMACION Y/O DOCUMENTACION</td>
                                                <td>VISITAS TECNICAS</td>
                                                <td>CONFIRMACIÓN FECHA VISITA DAÑO</td>
                                                <td>Cerrado</td>
                                            </tr>
                                            <tr>
                                                <td>MDM-PQR-49922897</td>
                                                <td></td>
                                                <td>2/14/2025 11:34:20 AM</td>
                                                <td>PRODUCTO</td>
                                                <td></td>
                                                <td>INFORMACION Y/O DOCUMENTACION</td>
                                                <td>REQUISITOS Y ESTADO DEL TRAMITE</td>
                                                <td>PROTECCION DATOS PERSONALES</td>
                                                <td>Cerrado</td>
                                            </tr>
                                            <tr>
                                                <td>MDM-PQR-49505318</td>
                                                <td></td>
                                                <td>1/21/2025 4:05:00 PM</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>ANULADO</td>
                                            </tr>
                                            <tr>
                                                <td>MDM-PQR-49394029</td>
                                                <td></td>
                                                <td>1/15/2025 12:45:32 PM</td>
                                                <td>PRODUCTO</td>
                                                <td></td>
                                                <td>Informacion y/o Documentacion</td>
                                                <td>Ley 2300 de 2023</td>
                                                <td>REGISTRO</td>
                                                <td>Cerrado</td>
                                            </tr>                               
                                        </table>

                                        <p id="ayu3" style="position: relative; left: 30px; top: 25px; color: #11a8f3;">Mostrando registros del 1 al 5 de un total de 5 registros</p>
                                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 910px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px; cursor: pointer;">Anterior</button>
                                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 905px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0; cursor: pointer;">Siguiente</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-principal-portal">
           

    <div class="modal fade" id="modal-tram"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title">TRAMITES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="modal-body" style="overflow-x: hidden;">
                    <p id="ayu5" style="position: relative; top: 15px; left: 50px;">Mostrar<input style="width: 30px;" type="text" placeholder="1" disabled>registros</p>
                    <p style="position: relative; bottom: 25px; left: 530px;">Buscar:<input style="width: 170px; margin-left: 10px;" type="text" placeholder="" disabled></p>
                            
                        <div class="table-product" id="con-sopo-inter">
                                <div class="con-table2">
                                    <table class="table-general table-sopor table-produc">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>Número PQR</th>
                                                <th>CUN</th>
                                                <th>Estado</th>
                                                <th>Asesor</th>
                                                <th>Fecha Actualización</th>
                                                <th>Proceso</th>
                                                <th>Motivo</th>
                                                <th>Cuenta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1/16/2025 9:55:54 AM</td>
                                                <td>MDM-FIBRA-017254678</td>
                                                <td>434725000077106</td>
                                                <td>Orden Completada</td>
                                                <td>DAYANA PATRICIA</td>
                                                <td>1/18/2025 12:40:12 PM</td>
                                                <td>PRCH</td>
                                                <td>UPGRADE</td>
                                                <td>12054993902</td>
                                            </tr>
                                            <tr>
                                                <td>2/2/2024 2:07:23 PM</td>
                                                <td>MDM-PQR-43828643</td>
                                                <td>4347240000236163</td>
                                                <td>Aprovisionamiento Pendiente</td>
                                                <td>DAYANA PATRICIA</td>
                                                <td>2/2/2024 2:11:13 PM</td>
                                                <td>ASEG</td>
                                                <td></td>
                                                <td>12054993902</td>
                                            </tr>
                                        </tbody>                         
                                    </table>

                                    <p id="ayu3" style="position: relative; left: 30px; top: 25px;">Mostrando registros del 1 al 5 de un total de 5 registros</p>
                                    <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 810px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px; cursor: pointer;">Anterior</button>
                                    <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 805px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0; cursor: pointer;">Siguiente</button>

                                    <div>
                                        <button class="btn btn-secondary" style="margin-bottom: 10px; background-color: #20a4cb; border-color: #20a4cb; border-radius: 25px;" onclick="reten();">Iniciar Retencion</button>
                                        <button class="btn btn-secondary" style="margin-bottom: 10px; background-color: #20a4cb; border-color: #20a4cb; border-radius: 25px;">Retencion Cerebro</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-ret"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title">RETENCIONES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="modal-body" style="overflow-x: hidden;">
                    <p id="ayu5" style="position: relative; top: 15px; left: 50px;">Mostrar<input style="width: 30px;" type="text" placeholder="1" disabled>registros</p>
                    <p style="position: relative; bottom: 25px; left: 530px;">Buscar:<input style="width: 170px; margin-left: 10px;" type="text" placeholder="" disabled></p>
                            
                        <div class="table-product" id="con-sopo-inter">
                                <div class="con-table2">
                                    <table class="table-general table-sopor table-produc">
                                        <tr>
                                            <th>Fecha Creacion</th>
                                            <th>ID</th>
                                            <th>Estado</th>
                                            <th>Accion</th>
                                            <th>Estado Accion</th>
                                            <th>Cuenta Facturacion</th>
                                            <th>Numero Conexion</th>
                                            <th>Tecnologia</th>
                                            <th>Detalle</th>
                                            <th>Retencion</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>20/02/2024 8:46:00 AM</td>
                                                <td>RF-003575869</td>
                                                <td>Suscriptor_No_Valido_Retirado</td>
                                                <td>Downgrade oferta plan (captura sin promocion)</td>
                                                <td>Rechazado</td>
                                                <td>7777</td>
                                                <td>6017829304</td>
                                                <td>FTTH</td>
                                                <td class="fa-solid fa-eye eye-color" style="display: table-cell;"></td>
                                                <td><img style="width: 25px;" src="../../../images/porce.png" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td>2025/02/10, 12:24:09 pm</td>
                                                <td>RF-003649582</td>
                                                <td>Pendiente</td>
                                                <td>Cesión de contrato</td>
                                                <td>Rechazado</td>
                                                <td>7777</td>
                                                <td>6017829304</td>
                                                <td>FTTH</td>
                                                <td class="fa-solid fa-eye eye-color" style="display: table-cell;"></td>
                                                <td><img style="width: 25px;" src="../../../images/porce.png" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td>2025/01/28, 10:11:13 am</td>
                                                <td>RF-003936485</td>
                                                <td>Suscriptor_No_Valido_Retenido</td>
                                                <td>Resaltar beneficios</td>
                                                <td>Rechazado</td>
                                                <td>7777</td>
                                                <td>6017829304</td>
                                                <td>FTTH</td>
                                                <td class="fa-solid fa-eye eye-color" style="display: table-cell;"></td>
                                                <td><img style="width: 25px;" src="../../../images/porce.png" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td>2025/01/28, 09:18:18 am</td>
                                                <td>RF-003091725</td>
                                                <td>Suscriptor_No_Valido_Retenido</td>
                                                <td>Resaltar beneficios</td>
                                                <td>Rechazado</td>
                                                <td>7777</td>
                                                <td>6017829304</td>
                                                <td>FTTH</td>
                                                <td class="fa-solid fa-eye eye-color" style="display: table-cell;"></td>
                                                <td><img style="width: 25px;" src="../../../images/porce.png" alt=""></td>
                                            </tr>
                                            <tr>
                                                <td>2025/01/24, 10:20:13 am</td>
                                                <td>RF-003523142</td>
                                                <td>Suscriptor_No_Valido_Retirado</td>
                                                <td>Suspensión voluntaria</td>
                                                <td>Rechazado</td>
                                                <td>7777</td>
                                                <td>6017829304</td>
                                                <td>FTTH</td>
                                                <td class="fa-solid fa-eye eye-color" style="display: table-cell;"></td>
                                                <td><img style="width: 25px;" src="../../../images/porce.png" alt=""></td>
                                            </tr>
                                        </tbody>                               
                                    </table>

                                    <p id="ayu3" style="position: relative; left: 30px; top: 25px;">Mostrando registros del 1 al 5 de un total de 5 registros</p>
                                    <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 1010px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px; cursor: pointer;">Anterior</button>
                                    <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 1005px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0; cursor: pointer;">Siguiente</button>

                                    <div>
                                        <button class="btn btn-secondary" style="margin-bottom: 10px; background-color: #20a4cb; border-color: #20a4cb; border-radius: 25px;" onclick="reten();">Iniciar Retencion</button>
                                        <button class="btn btn-secondary" style="margin-bottom: 10px; background-color: #20a4cb; border-color: #20a4cb; border-radius: 25px;">Retencion Cerebro</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-sup"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title">SUSPENCIONES Y REPOSICIONES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="modal-body" style="overflow-x: hidden;">
                    <p id="ayu5" style="position: relative; top: 15px; left: 50px;">Mostrar<input style="width: 30px;" type="text" placeholder="1" disabled>registros</p>
                    <p style="position: relative; bottom: 25px; left: 530px;">Buscar:<input style="width: 170px; margin-left: 10px;" type="text" placeholder="" disabled></p>
                            
                        <div class="table-product" id="con-sopo-inter">
                                <div class="con-table2">
                                    <table class="table-general table-sopor table-produc">
                                        <thead>
                                            <tr>
                                                <th>Fuente</th>
                                                <th>Fecha Ejecución (Mes/Día/Año)</th>
                                                <th>Trámite</th>
                                                <th>Número Asociado</th>
                                                <th>Estado del Trámite</th>
                                                <th>Transición</th>
                                                <th>Fecha Transición (Mes/Día/Año)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>COLLECTIONS</td>
                                                <td>2024/07/04</td>
                                                <td>Suspensión por Pago</td>
                                                <td></td>
                                                <td>CUMPLIDO</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>COLLECTIONS</td>
                                                <td>2024/07/05</td>
                                                <td>Reconexión por Pago</td>
                                                <td></td>
                                                <td>CUMPLIDO</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>                              
                                    </table>

                                    <p id="ayu3" style="position: relative; left: 30px; top: 25px;">Mostrando registros del 1 al 2 de un total de 5 registros</p>
                                    <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 550px; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px; cursor: pointer;">Anterior</button>
                                    <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 545px; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0; cursor: pointer;">Siguiente</button>

                                    <div>
                                        <button class="btn btn-secondary" style="margin-bottom: 10px; background-color: #20a4cb; border-color: #20a4cb; border-radius: 25px;" onclick="reten();">Iniciar Retencion</button>
                                        <button class="btn btn-secondary" style="margin-bottom: 10px; background-color: #20a4cb; border-color: #20a4cb; border-radius: 25px;">Retencion Cerebro</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-prod"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title">PRODUCTOS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="items-info items-sopor item-datas" style="margin: 15px; width: 770px;">
                    <div class="cabecera" style="background-color: #fff;">
                        <h5>Productos</h5>
                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_cliente', 'img_datos_cliente', 2, 0)">
                        <audio id="au_datos_cliente" controls class="audio" style="display: none;">
                            <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_datos_cliente.mp3">
                        </audio>
                    </div>
                    <div class="modal-body" style="overflow-x: hidden;">
                        <p id="ayu5" style="position: relative; top: 15px; left: 50px;">Mostrar<input style="width: 30px;" type="text" placeholder="1" disabled>registros</p>
                        <p style="position: relative; bottom: 25px; left: 495px;">Buscar:<input style="width: 170px; margin-left: 10px;" type="text" placeholder="" disabled></p>
                                
                            <div class="table-product" id="con-sopo-inter">
                                    <div class="con-table2">
                                        <table class="table-general table-sopor table-produc">
                                            <thead style="background-color: #3faada; color: white;">
                                                <tr>
                                                    <th>Producto/Plan</th>
                                                    <th>Número Conexión</th>
                                                    <th>Cuenta Facturación</th>
                                                    <th>Dirección Instalación</th>
                                                    <th>Est.</th>
                                                    <th>Tecnología</th>
                                                    <th>UEN</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>DUO 700M HOG</td>
                                                    <td>6017829304</td>
                                                    <td>7777</td>
                                                    <td>Calle 172 #16 a 24</td>
                                                    <td>3</td>
                                                    <td>6</td>
                                                    <td>HOGARES Y MIPYMES/HOGARES</td>
                                                    <td>Activo</td>
                                                </tr>
                                            </tbody>                             
                                        </table>

                                        <p id="ayu3" style="position: relative; left: 30px; top: 25px; color: #11a8f3;">Mostrando registros del 1 al 1 de un total de 1 registros</p>
                                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 610px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px; cursor: pointer;">Anterior</button>
                                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 605px;; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0; cursor: pointer;">Siguiente</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-bun"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title">BUNDLE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="modal-body">

                <div style="display: flex;">
                    <div class="items-info items-sopor item-datas" style="margin: 15px; width: 370px; height: 730px;">
                        <div class="cabecera" style="background-color: #fff;">
                            <h5>Valor del Bundle</h5>
                    </div>
                    <div class="body-items-inf">
                        <div class="content" >
                                <div class="bundle2">
                                    <div class="header-b">
                                        <p class="f-h-b">DUO 700M HOG</p>
                                        <p style="bottom: 12px; position: relative;">$ 139900  <span>Mes</span></p>
                                        <div class="header-serv">
                                            <p><span>Mensual</span></p>
                                        </div>
                                    </div>
                                    <div class="service">
                                        <div class="header-serv">
                                            LINEA TELEFONICA
                                        </div>
                                        <div class="list-s list-s-l">
                                            <ul>
                                                <li>VOZ LOCAL ILIMITADA</li>
                                                <li>TRANSFERENCIA DE LLAMADA EN OCUPADO</li>
                                                <li>LLAMADA EN ESPERA</li>
                                                <li>IDENTIFICADOR DE LLAMADAS</li>
                                                <li>IDENTIFICADOR DE SEGUNDA LLAMADA</li>
                                                <li>CONEXION SIN MARCAR</li>
                                                <li>MARCACION SUGERIDA</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="con-btn-paso-2" style="position: relative; left: 130px; bottom: 50px;">
                            </div>
                        </div>
                    </div>

                    <div class="items-info items-sopor item-datas" style="margin: 15px; width: 340px; position: relative; bottom: 250px;">
                        <div class="cabecera" style="background-color: #fff;">
                            <h5>Valor Impuesto</h5>
                    </div>
                    <div class="table-product" id="con-sopo-inter" style="width: 300px; margin: 60px 0 0 15px; font-size: 12px;">
                        <div class="con-table2">
                            <table class="table-general table-sopor table-produc">
                                <thead>
                                    <tr>
                                        <th>Valor full</th>
                                        <th>Valor Impuesto</th>
                                        <th>Valor Sin Impuesto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>$139,900.00</td>
                                        <td>$4,750.00</td>
                                        <td>$135,150.00</td>
                                    </tr>
                                </tbody>                           
                            </table>
                        </div>
                    </div>

                    </div>

                    <div style="position: relative; bottom: 220px;">
                        <h5 style="color: #F36F31; font-size: 17px; font-weight: 800; text-align: center;">-Descuentos Promocionales</h5>

                        <div class="table-product" id="con-sopo-inter" style="width: 300px; margin: 0px 0 0 35px;font-size: 12px;">
                            <div class="con-table2">
                                <table class="table-general table-sopor table-produc">
                                        <thead>
                                            <tr>
                                                <th>Valor full</th>
                                                <th>Valor Impuesto</th>
                                                <th>Valor Sin Impuesto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>$139,900.00</td>
                                                <td>$4,750.00</td>
                                                <td>$135,150.00</td>
                                            </tr>
                                        </tbody>                           
                                    </table>
                                </div>
                        </div>
                    </div>

                    </div>

                    <div style="position: relative; top: 120px; left: 105px;">
                        <h5 style="color: #F36F31; font-size: 22px; font-weight: 800; text-align: center;">La informacion que se muestra <br> es la vigente a la fecha de la <br> consulta.</h5>
                    </div>

                    <div class="items-info items-sopor item-datas" style="height: 350px; margin: 15px; width: 340px; position: relative; top: 380px; right: 135px;">
                        <div class="cabecera" style="background-color: #fff;">
                            <h5>Valor SVAs</h5>
                    </div>
                    <div class="table-product" id="con-sopo-inter" style="width: 300px; margin: 60px 0 0 5px; font-size: 12px;">
                        <div class="con-table2">
                            <table class="table-general table-sopor table-produc">
                                <thead>
                                    <tr>
                                        <th>Nombre SVA</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SOLUCION AP MECH 2</td>
                                        <td>$0.00</td>
                                    </tr>
                                </tbody>                           
                            </table>
                        </div>
                    </div>

                    <div style="position: relative; bottom: 0px;">
                        <h5 style="color: #F36F31; font-size: 17px; font-weight: 800; text-align: center;">-Descuentos SVAs (Sin IVA) <br> SOLUCION AP MESH 2</h5>

                        <div class="table-product" id="con-sopo-inter" style="width: 300px; margin: 0px 0 0 5px;font-size: 12px;">
                            <div class="con-table2">
                                <table class="table-general table-sopor table-produc">
                                        <thead>
                                            <tr>
                                                <th>Promociones</th>
                                                <th>%</th>
                                                <th>Descuento</th>
                                                <th>Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Total Descuento</td>
                                                <td>0</td>
                                                <td>$0.00</td>
                                                <td></td>
                                            </tr>
                                        </tbody>                           
                                    </table>
                                </div>
                        </div>
                    </div>

                    </div>

                    <div class="items-info items-sopor item-datas" style="width: 200px; height: 100px; position: relative; top: 20px; right: 120px;">
                        <div class="cabecera" style="background-color: #fff; font-size: 12px;">
                            <h5 style="font-size: 10px;">Promociones Servicios <br> Adicionales sin Facturación</h5>
                    </div>

                    <div class="table-product" id="con-sopo-inter" style="width: 300px; margin: 0px 0 0 5px; opacity: 0;">
                        <div class="con-table2">
                            <table class="table-general table-sopor table-produc">
                                    <thead>
                                        <tr>
                                            <th>Promociones</th>
                                            <th>%</th>
                                            <th>Descuento</th>
                                            <th>Detalle</th>
                                            <th>Promociones</th>
                                            <th>%</th>
                                            <th>Descuento</th>
                                            <th>Detalle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Descuento</td>
                                            <td>0</td>
                                            <td>$0.00</td>
                                            <td></td>
                                            <td>Total Descuento</td>
                                            <td>0</td>
                                            <td>$0.00</td>
                                            <td></td>
                                        </tr>
                                    </tbody>                           
                                </table>
                            </div>
                    </div>

                </div>
            </div>

            <div style="width: 960px; border: 2px solid #F36F31; margin: 15px 0 30px 15px;"></div>

            <div style="display: flex; font-size: 12px; color: #F36F31;">
                <h5 style="font-size: 16px; position: relative; left: 100px;">Sub total Bundle $97,930.00 <br><br>+</h5>
                <h5 style="font-size: 16px; position: relative; left: 280px;">Sub total SVAs $0.00 = </h5>
                <h5 style="font-size: 16px; position: relative; left: 360px;">Valor Producto $97,930.00</h5>
            </div>

        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="modal-fat"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content" style="left: -285px; bottom: 0; top: 266px;">
                <div class="modal-header" style="background-color: #F36F31;">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title" style="color: #fff;">Facturación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="modal-body" style="overflow-x: hidden;">
                    <div class="items-info items-sopor content-fact" style="height: 280px;">
                        <div class="cabecera" style="background-color: #fff;">
                            <h5> 
                            Datos Facturación</h5>
                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_fact" onclick="alertAudio('au_datos_fact', 'img_datos_fact', 2, 3)">
                            <audio id="au_datos_fact" controls class="audio" style="display: none;">
                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_datos_fact.mp3">
                            </audio>
                        </div>
                        <div class="body-items-inf">
                            <div class="content-fact-fac" id="con-sopo-inter" style="display: grid; grid-gap: 20px; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(3, 1fr); font-size: 14px;">
                        

                                        <div class='content-item-info item-1' style="bottom: 60px; right: 420px; position: relative; grid-area: item-1;">
                                        <label>Cuenta Facturacion:</label> <span>7777</span><br>
                                        <label>Estado Cta Facturacion:</label> <span>Activo</span><br>
                                        <label>Ciudad:</label> <span>Bogota D.C</span><br>
                                        <label>Dirección Facturación:</label> <span>Calle 172 #16 a 24</span><br>
                                        <label>Jerarquía Facturación:</label> <span>Hijo</span><br>
                                        <label>Email Facturación:</label> <span>hcpe@email.com</span><br>
                                        <label>Mora:</label> <span>No</span><br>
                                        </div>

                                        <div class='content-item-info item-2' style="grid-area: item-2; position: relative; right: 110px; bottom: 60px;">
                                        <label>Frecuencia:</label> <span>Mensual</span><br>
                                        <label>Departamento:</label> <span>Bogota</span><br>
                                        <label>Barrio:</label> <span>00007</span><br>
                                        <label>Tipo de Envio:</label> <span>Virtual</span><br>
                                        <label>Dia de Corte:</label> <span>8</span><br>
                                        <label>Pago Frecuente:</label> <span>No</span><br>
                                        </div>

                                        <div class='content-item-info item-3' style="grid-area: item-3; position: relative; bottom: 60px; left: 90px;">
                                        <label>Estrato:</label> <span>8</span><br>
                                        <label>Ciclo:</label> <span>12</span><br>
                                        <label>Tipo de Facturacion:</label> <span>Detallada</span><br>
                                        <label>Cuenta Padre:</label> <span>7777</span><br>
                                        <label>Tipo de Entrega:</label> <span></span><br>
                                        </div>

                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-prom"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content" style="left: -80px; bottom: 0; top: 55px;">
                <div class="modal-header" style="background-color: #F36F31;">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title" style="color: #fff;">Promociones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="items-info items-sopor item-datas" style="margin: 15px; width: 770px;">
                    <div class="modal-body" style="overflow-x: hidden;">
                        <p id="ayu5" style="position: relative; top: 15px; left: 50px;">Mostrar<input style="width: 30px;" type="text" placeholder="1" disabled>registros</p>
                        <p style="position: relative; bottom: 25px; left: 495px;">Buscar:<input style="width: 170px; margin-left: 10px;" type="text" placeholder="" disabled></p>
                                
                            <div class="table-product" id="con-sopo-inter">
                                    <div class="con-table2">
                                        <table class="table-general table-sopor table-produc" style="font-size: 12px;">
                                            <thead>
                                                <tr>
                                                    <th style="padding: 10px; border: 1px solid #ddd;">Nombre</th>
                                                    <th style="padding: 10px; border: 1px solid #ddd;">Descripción</th>
                                                    <th style="padding: 10px; border: 1px solid #ddd;">Vigencia</th>
                                                    <th style="padding: 10px; border: 1px solid #ddd;">Fecha Asignación</th>
                                                    <th style="padding: 10px; border: 1px solid #ddd;">Estado</th>
                                                </tr>
                                            </thead>
                                        
                                            <!-- Cuerpo -->
                                            <tbody>
                                                <tr style="background-color: #f9f9f9;">
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO, MESES 1 y 2 MAX V1</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO, MESES 1 y 2 MAX V1</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">11/8/2023 5:00:00 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">3/27/2025 11:39:36 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">Terminado</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO, MESES 1 y 2 PARAMOUNT-V1</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO, MESES 1 y 2 PARAMOUNT-V1</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">11/8/2023 5:00:00 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">3/27/2025 11:39:36 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">Terminado</td>
                                                </tr>
                                        
                                                <tr style="background-color: #f9f9f9;">
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO, MESES 1 y 2 UNIVERSAL-V1</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO, MESES 1 y 2 UNIVERSAL-V1</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">11/8/2023 5:00:00 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">3/27/2025 11:39:36 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">Terminado</td>
                                                </tr>
                                        
                                                <tr>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO - 40% MESES 1,2,3,4,5,6 FTTH</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCION DESCUENTO 100% PRORRATEO - 40% MESES 1,2,3,4,5,6 FTTH</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">3/8/2024 5:00:00 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">3/27/2025 11:39:36 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">Terminado</td>
                                                </tr>
                                        
                                                <tr style="background-color: #f9f9f9;">
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCIÓN DESCUENTO 100% PRORRATEO Y MES 1 - 30% MESES 2-3-4-5-6</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">PROMOCIÓN DESCUENTO 100% PRORRATEO Y MES 1 - 30% MESES 2-3-4-5-6</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">8/8/2025 5:00:00 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">3/27/2025 11:39:36 AM</td>
                                                    <td style="padding: 10px; border: 1px solid #ddd;">Terminado</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <p id="ayu3" style="position: relative; left: 30px; top: 25px; color: #11a8f3;">Mostrando registros del 1 al 5 de un total de 5 registros</p>
                                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 520px; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px; cursor: pointer;">Anterior</button>
                                        <button type="button" style="width: 100px; background-color: transparent; position: relative; left: 515px; bottom: 20px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0; cursor: pointer;">Siguiente</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-est"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content" style="left: 105px; bottom: 0; top: 174px;">
                <div class="modal-header" style="background-color: #F36F31;">
                    <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                    <audio id="au_editar_contac" controls class="audio" style="display: none;">
                        <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                    </audio>
                    <h5 class="modal-title" style="color: #fff;">Estado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>           
                </div>
                <div class="modal-body" style="overflow-x: hidden;">
                    <div class="items-info items-sopor content-fact" style="height: 470px;">
                        <div class="body-items-inf">
                            <div class="content-fact-fac" id="con-sopo-inter">
                        

                                <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 40px; text-align: center;">
    
                                    <!-- Columna 1: Pago -->
                                    <div>
                                        <h2 style="color: #F36F31;">Pago</h2>
                                        <p><strong style="color: #F36F31;">Descripción:</strong> <span style="color: #005b96;">Activo</span></p>
                                        <p><strong style="color: #F36F31;">Fecha:</strong> <span style="color: #005b96;">7/5/2024<br>3:03:44 PM</span></p>
                                    </div>

                                    <!-- Columna 2: Fraude -->
                                    <div>
                                        <h2 style="color: #F36F31;">Fraude</h2>
                                        <p><strong style="color: #F36F31;">Descripción:</strong> <span style="color: #005b96;">Activo</span></p>
                                        <p><strong style="color: #F36F31;">Fecha:</strong> <span style="color: #005b96;">9/4/2023<br>12:28:45 PM</span></p>
                                    </div>

                                    <!-- Columna 2: Trámite -->
                                    <div>
                                        <h2 style="color: #F36F31;">Tramite</h2>
                                        <p><strong style="color: #F36F31;">Descripción:</strong> <span style="color: #005b96;">Activo</span></p>
                                        <p><strong style="color: #F36F31;">Fecha:</strong> <span style="color: #005b96;">1/18/2025<br>12:46:22 PM</span></p>
                                        <p><strong style="color: #F36F31;">Fecha Reconexión:</strong> <span style="color: #005b96;">3/27/2025<br>11:39:35 AM</span></p>
                                    </div>

                                    <div>
                                        <h2 style="color: #F36F31;">Voluntaria</h2>
                                        <p><strong style="color: #F36F31;">Descripción:</strong> <span style="color: #005b96;">Activo</span></p>
                                        <p><strong style="color: #F36F31;">Fecha:</strong> <span style="color: #005b96;">9/4/2023<br>12:28:45 PM</span></p>
                                    </div>
                                
                                </div>
                                

                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
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
            <p>Has finalizado con exito el escenario de CONSULTA RETENCION del Simulador SUMA, recuerda que siempre esta a tu disposicion y cuentas con intentos ilimitados :)</p>
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
    <script src="../../../../Controller/suma/RETENCION/portalRETENCION.js"></script>
    <script src="../../../../Controller/security/RETENCION/anti-cheat-ret1.js"></script> 

    <script>
        habladorText3('En este apartado, encontraras todo lo relacionado con la retención seleccionada, puedes ver a completo detalle, todo lo que se ha realizado con la misma y también poder ver de manera completa los datos del cliente. para finalizar con el escenario diríjase a la parte inferior y da click en el botón FINALIZAR')
    </script>

</body>
</html>