<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/portal.css">
    <link rel="stylesheet" href="../../../css/mainSuma.css">
    <link rel="stylesheet" href="../../css/soporte.css">
    <link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
    <link href="../../../fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="../../../fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../images/ETB.svg">
    <title>ETB - Portal</title>
</head>
<body>
    <div class="container-genre" style="overflow-x: hidden;">

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
                    <a href="#" class="item-bread">Inicio</a>
                    <a href="#" class="item-bread">Consulta</a>
                    <a href="#" class="item-bread">Vista 360</a>
                    <a href="#" class="item-bread">Busqueda Cliente</a>
                </div>

                    <div class="con-filtros">
                        <select name="doc_type" id="tip">
                            <option value="0">Tipo de documento</option>
                            <option value="1">CC</option>
                            <option value="0">NIT</option>
                            <option value="2">CE</option>
                            <option value="3">PS</option>
                            <option value="0">RUT</option>
                            <option value="0">PPT</option>
                        </select>
                        <input type="text" id="num_doc" placeholder="Número de Documento">
                        <input type="text" id="num_conex" placeholder="Número de Conexión (601)">
                        <input type="text" id="cuenta_fact" placeholder="Cuenta Facturación">
                        <input type="text" id="id_red" placeholder="Redes Sociales">
                        <input type="text" id="id_serv" placeholder="Id Servicio (SALESFORCE)">
                        <input type="text" id="num_orden" placeholder="Número de Orden">
                        <img class="i" src="../../../images/i.png" alt="">
                    </div>
                    <div class="con-funtion-fil">
                        <button type="submit" id="btn-search" class="btn-clasic" style="background: var(--blue-os-etb);" onclick="verificarUser();"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>BUSCAR</button>
                        <button class="btn-clasic" onclick="btn_clear();"><i class="fa-solid fa-broom" style="color: #ffffff;"></i>LIMPIAR</button>
                    </div>
                    <div id="age" class="menus">
                        <img class="tres" src="../../../images/360.png" alt="">
                        <div class="down">
                        <button class="noti">Notificaciones</button>
                        <button>Tramites</button>
                        <button onclick="btn_vis();">PQR</button>
                        <button>Factuaracion y Envio</button>
                        <button onclick="detail();" style="background-color: #084d6f;">Detalle</button>
                        <button>Retenciones</button>
                        <button class="int">Interacciones</button>
                        </div>
                    </div>
                    <input type="text" name="datosEnviados" id="" value="1" style="display: none;">
                </form>
                
                <div id="seccion" class="oculto datos-usuario" style="display: none;">
                    <div class="items-info items-sopor item-datas">
                        <div class="cabecera">
                        <h5>DATOS CLIENTE</h5>
                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_cliente', 'img_datos_cliente', 2, 0)">
                            <audio id="au_datos_cliente" controls class="audio" style="display: none;">
                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_datos_cliente.mp3">
                            </audio>
                        </div>
                    
                        <div class="body-items-inf" style="height: 290px;">
                            <div class="content-info" id="con-sopo-inter">
                            
                                                <div class='content-item-info item-1' style="position: relative; bottom: 3px; width: 220px;">
                                                <label>Nombre:</label> <span>CLAID MUSS</span><br>
                                                <label>Tipo de Documento:</label> <span>CC</span><br>
                                                <label>Numero de Documento:</label> <span>1000842659</span><br>
                                                <label>Email:</label> <span>clad@email.com</span><br>
                                                <label>Telefono Fijo:</label> <span>6012014935</span><br>
                                                <label>Usuario MiETB:</label> <span>clad@email.com</span><br>
                                                <label>Tipo de Atencion:</label> <span></span><br>
                                                <button style="font-size: 10px;">Documentos Cliente</button>
                                                </div>

                                                <div class='content-item-info item-2' style="position: relative; left: 250px; bottom: 30px;">
                                                <label>Celular:</label> <span>3215796485</span><br>
                                                <label>Departamento:</label> <span>SANTANDER</span><br>
                                                <label>Ciudad:</label> <span>BUCARAMANGA</span><br>
                                                <label>Direccion:</label> <span>Calle 54 #31 d 29</span><br>
                                                <label>Campaña Activa:</label> <span></span><br>
                                                <label>Codigo LISIM:</label> <span>NO</span><br>
                                                </div>

                                                <div class='content-item-info item-2' style="position: relative; left: 260px; bottom: 7px;">
                                                <div style="position: relative; left: 230px; bottom: 3px;">
                                                    <label>UEN:</label> <span>Hogares y Mipymes</span><br>
                                                    <label>Segmento UEN:</label> <span>HOGARES</span><br>
                                                    <label>Segmento:</label> <span>HOGARES</span><br>
                                                    <label>Categoria:</label> <span>PLATA</span><br>
                                                    <label>Esquema Atencion:</label> <span></span><br>
                                                    <label>Recuperacion Experiencia:</label> <span>SI</span><br>
                                                </div>
                                                <div style="display: grid; grid-gap: 10px; grid-template-columns: repeat(4, 1fr); position: relative; right: 100px; margin-top: 40px; width: 800px; font-size: 10px;">
                                                <button style="position: relative; right: 120px; top: 42px; width: 140px;">Actualizar Teléfono Fijo</button>
                                                <button style="position: relative; right: 160px; top: 42px; width: 140px;">Actualizar Teléfono Móvil</button>
                                                <button style="position: relative; right: 90px; width: 70px; top: 42px;">Ver Detalle</button>
                                                <button style="position: relative; right: 210px; width: 130px; top: 42px;">Usuario Redes Sociales</button>
                                                <button style="position: relative; right: 350px; top: 8px; width: 130px;" onclick="autori();">Autorizaciones</button>
                                                </div>
                                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="table" class="items-info items-sopor item-produc" style="display: none;">
                        <div class="cabecera">
                            <h5>Productos</h5>
                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_productos" onclick="alertAudio('au_productos', 'img_productos', 2, 1)">
                            <audio id="au_productos" controls class="audio" style="display: none;">
                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_productos.mp3">
                            </audio>
                        </div>
                        <div class="body-items-inf">
                           <div class="table-product" id="con-sopo-inter">
                                <div class="con-table">
                                    <table class="table-general table-sopor table-produc">
                                        <tr>
                                            <th>Front</th>
                                            <th>Documento Anterior </th>
                                            <th>Producto</th>
                                            <th>Plan</th>
                                            <th>Número Conexión</th>
                                            <th>Cuenta Facturación</th>
                                            <th>Dirección Instalación</th>
                                            <th>Est.</th>
                                            <th>Tecnología</th>
                                            <th>Tipo Línea</th>
                                            <th>Estado</th>
                                            <th>Vol</th>
                                            <th>Mora</th>
                                            <th>Fraude</th>
                                            <th>Pérdida/Robo</th>
                                            <th>Nivel Riesgo</th>
                                        </tr>
                                        <tbody onclick="tabac(),tabac2();">

                                        <tr>
                                        <td>PORTALFIJA</td>
                                        <td></td>
                                        <td>3PLAY 30M SILVER 1</td>
                                        <td>3PLAY 30M SILVER 1</td>
                                        <td>60120354851</td>
                                        <td>4444</td>
                                        <td>Calle 54 #31 d 29</td>
                                        <td>3</td>
                                        <td>FTTH</td>
                                        <td></td>
                                        <td>Activo</td>
                                        <td><div class='semaforo semaforo-g'></div></td>
                                        <td><div class='semaforo semaforo-g'></div></td>
                                        <td><div class='semaforo semaforo-g'></div></td>
                                        <td><div class='semaforo semaforo-g'></div></td>
                                        <td><div class='semaforo semaforo-error'></div></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Inactivo</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><div class='semaforo semaforo-co'></div></td>
                                        </tr>

                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="eyes" class="content-soport-fact" style="display: none;">
                        <div class="items-info items-sopor content-soport ">
                            <div class="cabecera">
                                <h5>Soporte Técnico</h5>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_soporte" onclick="alertAudio('au_soporte', 'img_soporte', 2, 2)">
                                <audio id="au_soporte" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_general_sf.mp3">
                                </audio>
                            </div>
                            <div class="body-items-inf">
                                <div class="content-soport-sop" id="con-sopo-inter">
                                      
                                        <div class='content-item-info'>
                                            <label>Central:</label> <span>SANTA INES</span><br>
                                            <label>Equipo:</label> <span>BOSIZTC60104003</span><br>
                                            <label>Molécula:</label> <span>N4CU07_E15</span><br>
                                            <label>Falla Masiva:</label>  <span></span> <br>
                                            </div>

                                            <div class='content-item-info'>
                                            <label>Visita Abierta:</label><br>
                                            <label>PQRs Falla Técnica:</label> <br>
                                            <label>Reportar Falla:</label> <i class='fa-solid fa-eye eye-color' onclick="btn_report();"></i><br>
                                        </div>   
                                            
                                </div>
                            </div>
                        </div>

                        <div class="items-info items-sopor content-fact" id="df" style="display: none;">
                            <div class="cabecera">
                                <h5> 
                                Datos Facturación</h5>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_fact" onclick="alertAudio('au_datos_fact', 'img_datos_fact', 2, 3)">
                            

                                <audio id="au_datos_fact" controls class="audio" style="display: none;">

                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/soporte/au_datos_fact.mp3">

                                </audio>
                            </div>
                            <div class="body-items-inf">
                                <div class="content-fact-fac" id="con-sopo-inter">

                                            <div class='content-item-info item-1'>
                                            <label>Cuenta Facturacion:</label> <span>4444</span><br>
                                            <label>Estado Cta Facturacion:</label> <span>Activo</span><br>
                                            <label>Ciclo:</label> <span>24</span><br>
                                            <label>Dirección Facturación:</label> <span>Calle 54 #31 d 29</span><br>
                                            <label>Tipo Factura:</label> <span>Detallada</span><br>
                                            <label>Tipo de Envío:</label> <span>Virtual</span><br>
                                            <label>Tipo de Entrega:</label> <span>Correo Electronico</span><br>
                                            <label>Email Facturación:</label> <span>clad@email.com</span><br>
                                            <label>Pago Recurrente:</label> <span>No</span><br>
                                            <label>Jerarquía Facturación:</label> <span>Hijo</span><br>
                                            <label>Cuenta Padre:</label> <span></span><br>
                                            <label>Mensaje Variación Factura:</label> <span></span><br>
                                            </div>

                                            <div class='content-item-info item-2'>
                                            <label>Frecuencia:</label> <span>Mensual</span><br>
                                            <label>Departamento:</label> <span>Santander</span><br>
                                            <label>Ciudad:</label> <span>Bucaramanga</span><br>
                                            <label>Barrio:</label> <span>003303</span><br>
                                            <label>Estrato:</label> <span>3</span><br>
                                            </div>

                                            <div class='content-item-info item-3'>
                                            <label>Mora:</label> <span>Si</span><br>
                                            <label>Día de Corte:</label> <span>0</span><br>
                                            <label>Cliente Migrado :</label> <span>Si</span><br>
                                            </div>

                                            <div class='content-item-info item-4'>
                                            <label>Fecha Entrega Factura:</label> <span></span><br>
                                            <label>Fecha Suspención:</label> <span></span><br>
                                            </div>

                                            <div class='content-item-info item-5'>
                                            <label>Fecha Pago:</label> <span></span><br>
                                            <label>Factura:</label> <span></span><br>
                                            <label>Estado:</label> <span></span><br>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    </div>
            </div>
        </div>
    </div>
    <!-- ================================ MODALES ==================================================== -->
    <div class="modal fade" id="modal-visita"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CREANDO PQR DE INFORMACIÓN

                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_creacion_pqr" onclick="alertAudio('au_creacion_pqr', 'img_creacion_pqr', 2, 4)">
                            

                        <audio id="au_creacion_pqr" controls class="audio" style="display: none;">

                            <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_crecion_pqr.mp3">

                        </audio>
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="descrip-pqr">
                        <label for="">Id PQR</label>
                    </div>
                    <div class="content-modal">
                        <form>
                            <label for="">Clase</label>
                            <span>
                                <select name="clase" id="">
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
                                <select name="motivo" id="">
                                    <option value="0"></option>
                                    <option value="1">FALLA TECNICA</option>
                                </select>
                            </span>

                            <label for="">Relación PQR</label>
                            <span><input type="text" name="relacion" id="inputValor" value="" disabled></span>
                            <span class="select-relacion">
                                <select name="producto" id="prod" onchange="pro();">
                                    <option value="0"></option>
                                    <option value="1">PRODUCTO</option>
                                </select>
                            </span>

                            <label for="">Causal</label>
                            <span>
                                <select name="causal" id="">
                                    <option value="0"></option>
                                    <option value="1">BAJA CALIDAD DEL SERVICIO</option>
                                    <option value="2">FALLA CPE</option>
                                    <option value="3">FALLA INTERNET</option>
                                    <option value="4">FALLA WIFI</option>
                                    <option value="5">GESTIÓN PROACTIVA</option>
                                    <option value="6">SIN DATOS</option>
                                </select>
                            </span>

                            <label for="">Sintoma</label>
                            <span>
                                <select name="sintoma" id="">
                                    <option value="0"></option>
                                    <option value="1">PROBLEMA EQUIPO DEL CLIENTE</option>
                                    <option value="2">SIN SERVICIO -F</option>
                                </select>
                            </span>

                            <label for="">Descripcion</label>
                            <textarea name="descripcion" id="" cols="30" rows="3"></textarea>

                            <label for="">CUN
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante" onclick="alertAudio('au_solicitante', 'img_solicitante', 2, 5)">
                                <audio id="au_solicitante" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_solicitante.mp3">
                                </audio>
                            </label>
                            <select name="solicitante" id="search-soli" readonly="readonly" class="solicitante-search" style="background-color: #c0c0c0;">
                                <option id="cun-rel" value="1">6250124658754201</option>
                            </select>
                            <button type="button" id="search"><i class="fa-solid fa-magnifying-glass"></i></button>

                            <div class="table-search" style="display: none;" id="table_search">
                                <div class="content-table-search">
                                    <div class="barra-busqueda">
                                        <label for="buscar">Buscar:</label>
                                        <input type="text" id="buscar" name="buscar">
                                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante_tb" onclick="alertAudio('au_solicitante_tb', 'img_solicitante_tb', 2, 6)">
                                

                                            <audio id="au_solicitante_tb" controls class="audio" style="display: none;">

                                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_solicitante_tb.mp3">

                                            </audio>
                                    </div>
                                    <div class="con-table">
                                        <table class="table-general table-sopor">
                                            <tr>
                                                <th>Solicitante</th>
                                                <th>Numero Documento</th>
                                                <th>Tipo Documento</th>
                                                <th>Telefono Solicitante</th>
                                                <th>Celular</th>
                                                <th>Email</th>
                                                <th>Dirección</th>
                                                <th>Acción</th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="">Editar</a></td>     
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <input value="Crear" onclick="location.href = './pqr.php'" class="crear-pqr">
                            <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante_fn" onclick="alertAudio('au_solicitante_fn', 'img_solicitante_fn', 2, 8)">       

                            <audio id="au_solicitante_fn" controls class="audio" style="display: none;">

                                <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_solicitante_fn.mp3">

                            </audio>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-actualizar"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Contacto</h5>
                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                                

                        <audio id="au_editar_contac" controls class="audio" style="display: none;">

                            <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">

                        </audio>
                    </h5>
                </div>
                <div class="modal-body">
                    <form class="editar-contact">
                        <label for="">Tipo Documento</label>
                        <span class="select-relacion">
                            <select name="tipo_documento" id="">
                                <option value=""></option>
                            </select>
                        </span>

                        <label for="">Número de Documento</label>
                        <input type="number" name="doc_soli" value="" readonly>
                    
                        <label for="">Nombres</label>
                        <input type="text" name="nombre" id="" value="">

                        <label for="">Apellidos</label>
                        <input type="text" name="apellido" id="" value="">
                        
                        <label for="">Teléfono Fijo</label>
                        <input type="text" name="telefono" id="" value="">

                        <label for="">Celular</label>
                        <input type="text" name="celular" id="" value="">

                        <label for="">Email</label>
                        <input type="text" name="email" id="" value="">
                        
                        <label for="">Dirección</label>
                        <input type="text" name="direccion" id="" value="">

                        <label for="" class="autorizacion">Autoriza el manejo de datos personales</label>
                        <span class="select-relacion">
                            <select name="" id="">
                                <option value="">Seleccione una opción</option>
                                <option value="">Si</option>
                                <option value="">No</option>
                            </select>
                        </span>
                        <div class="modal-footer">
                            <input type="submit" class="btn-guardar" value="Guardar" id="guardar_soli">
                            <button type="button" class="btn btn-secondary btn-cancelar" data-bs-toggle="modal" data-bs-target="#modal-actualizar">Cancelar</button>
                        </div>
                    </form>
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
    
    <div class="modal fade" id="modal-falla"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ultimas PQR's</h5>
                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                        <audio id="au_editar_contac" controls class="audio" style="display: none;">
                            <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                        </audio>
                    </h5>           
                </div>
                <div class="modal-body">
                    
                <div class="table-product" id="con-sopo-inter">
                                <div class="con-table2">
                                    <table class="table-general table-sopor table-produc">
                                        <tr>
                                            <th>Numero de PQR</th>
                                            <th>Fecha creacion PQR </th>
                                            <th>Producto</th>
                                            <th>Causal</th>
                                            <th>Sintoma</th>
                                            <th>Estado de la PQR</th>
                                            <th>Numero de INC Remedy</th>
                                            <th>Fecha de ultima agenda</th>
                                            <th>Resolucion 1</th>
                                            <th>Resolucion 2</th>
                                            <th>Resolucion 3</th>
                                            <th>Descripcion PQR</th>
                                        </tr>

                                        <tbody>

                                        <tr id="abi3" onclick="tabac5(),tabac6();">
                                            <td>MDM-PQR-3939224</td>
                                            <td>20/02/2024 8:46:00 AM</td>
                                            <td>INTERNET</td>
                                            <td>SIN SERVICIO -F</td>
                                            <td>CERRADO</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>

                                            <tr id="df3" style="background-color: #4d4d4d; display: none;">
                                            <td></td>
                                            <td><i class='fa-solid fa-eye eye-color' onclick="location.href='./pqrbaseFTTH.php'"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" onclick="btn_of()">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-err">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ERROR</h5>
                    </div>
                    <div class="modal-body">
                        <p>006-No se encontro informacion de este cliente</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error">ACEPTAR</button>
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

        <!-- Modal mensaje de bienvenida -->
        <div class="modal modal-success-sim" tabindex="-1" id="modal-fase" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="mas">Bienvenid@</h5>
                </div>
                <div class="modal-body">
                <p>Al escenario de SOLUCION FTTH del simulador SUMA, sigue las indicaciones y aprende en el proceso</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="dates(),habladorText('Da click en el boton Despues');"">ACEPTAR</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal mensaje de bienvenida -->

    <div class="modal modal-success-sim" tabindex="-1" id="modal-dates" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="mas">Actualizacion de Datos</h5>
                </div>
                <div class="modal-body">
                <p style="text-align: left;">Debemos realizar una actualización de la información del cliente para continuar</p>
                </div>
                <div class="modal-footer" style="display: flex;">
                    <button type="button" style="left: 0px;" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                    <button type="button" style="left: 0px;" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" onclick="habladorText('Cliente: CLAID MUSS <br> Numero de Documento: CC 1000842659 <br> Numero de Conexion: 6012014935 <br> Cuenta Facturacion: 4444');">Despues</button>
                </div>
            </div>
            </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-masivo">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">INFORMACION DE LA FALLA MASIVA</h5>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" style="color: #FF5C39; justify-content: start;">Guion para Dirigirse al cliente:</h5>
                    <br>
                    <p style="text-align: justify;">Apreciado cliente, en este momento presentamos una falla en el sector por lo que se pueden presentar ausencia o degradacion en sus servicios;
                    nuestro personal tecnico se encuentra en la labor de solucionar estos inconvenientes y se estima que todo se estabilizara el <script>document.write(`${month}/${day}/${year}`)</script>
                    a las <span><script>document.write(`${hours}:${minutes}`)</script></span>. De antemano le pedimos excusas por las molestias y te comunicaremos del avance de la solucion de la falla presentada.
                    </p>
                 </div>
                <div class="modal-footer" style="display: flex;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="position: relative; right: 280px; left: 0;">ACEPTAR</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="position: relative; right: 280px; left: 0; background-color: #ff5b5b; border-color: #ff5b5b;" onclick="location.href='./cpqrFTTH.php'">RELACIONAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-pqr"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PQR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_editar_contac" onclick="alertAudio('au_editar_contac', 'img_editar_contac', 2, 7)">
                        <audio id="au_editar_contac" controls class="audio" style="display: none;">
                            <source type="audio/wav" src="../../../../Model/audioSuma/audio/tep/au_editar_contac.mp3">
                        </audio>
                    </h5>           
                </div>
                <div class="modal-body">
                    <button class="btn btn-secondary" style="margin-bottom: 10px; background-color: #20a4cb; border-color: #20a4cb;">Crear PQR</button>
                <div class="table-product" id="con-sopo-inter">
                                <div class="con-table2">
                                    <table class="table-general table-sopor table-produc">
                                        <tr>
                                            <th>Sistema</th>
                                            <th>Fecha <br> (DIA, MES, AÑO)</th>
                                            <th>Numero PQR</th>
                                            <th>CUN</th>
                                            <th>Numeros Contratos</th>
                                            <th>Motivos</th>
                                            <th>Casual</th>
                                            <th>Sistema</th>
                                            <th>Estado</th>
                                            <th>Fecha Cierre <br> (DIA, MES, AÑO)</th>
                                            <th>Recurencia</th>
                                            <th>Familia</th>
                                            <th>Tipo</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                            <td>MCIM</td>
                                            <td>20/02/2024 8:46:00 AM</td>
                                            <td>MDM-PQR-3939224</td>
                                            <td>434723000000366428</td>
                                            <td>6013145216985</td>
                                            <td>FALLA TECNICA</td>
                                            <td>FALLA VOZ</td>
                                            <td>LLAMADAS ENTRADAN - NO SALEN -F</td>
                                            <td>Cerrado</td>
                                            <td>28/05/2024 3:27:00 PM</td>
                                            <td>No</td>
                                            <td>SOPORTE</td>
                                            <td>TRANSACCION</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modales-soporte" tabindex="-1" id="modal-produc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false" style="margin: 10px 50px 0 0;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-exito-s">
             <div class="modal-content" style="position: relative; min-width: 1100px; width: 100%; min-height: 1100px;">
                <div class="modal-header" style="background-color: #fff; margin-top: 15px; border-radius: 10px 10px 0 0;">
                    <h5 class="modal-title" style="text-align: center; color: #1285B6;">Detalle Servicio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                        <div class="items-info items-sopor item-datas" id="table1" style="height: 350px; bottom: 160px; margin: 80px 0 0 0;">
                            <div class="cabecera">
                            <h5>Producto</h5>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_datos_cliente" onclick="alertAudio('au_datos_cliente2', 'img_datos_cliente', 2, 0)">
                                <audio id="au_datos_cliente2" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio_com/gcs6.mp3">
                                </audio>
                            </div>
                        
                            <div class="body-items-inf">
                                <div class="content-info" id="con-sopo-inter">
                                
                                    <div class='content-item-info item-1'>
                                    <br>
                                    <label>Cuenta de Facturación</label> <span>4444</span><br>
                                    <br><br>
                                    <label>Ciudad Instalación</label> <span>Bucaramanga</span><br>
                                    <label>Estrato Instalación</label> <span>3</span><br>
                                    <label>Servicio Demostración</label> <span></span><br>
                                    <label>Accion Sugerida</label> <span></span><br>
                                    </div>

                                    <div class='content-item-info item-2'>
                                    <label>Direccion Instalación</label> <span>Calle 54 #31 d 29</span><br><br>
                                    <label>Localidad Instalación</label> <span>4</span><br>
                                    <label>Segmento Servicio</label> <span>Hogares y Mipymes</span><br>
                                    <label>Nivel Riesgo</label> <span></span><br>
                                    <label>Oferta Especia TV:</label> <span>No</span><br> 
                                    </div>                          

                                    <div class='content-item-info item-2'>
                                    <br>
                                    <label>Pais Instalación</label> <span>COLOMBIA</span><br>
                                    <label>Departamento Instalación</label> <span>SANTANDER</span><br>
                                    <label>Zona Instalación</label> <span></span><br>
                                    <label>Tecnologia</label> <span>FTTH</span><br>
                                    <label>Variable de Impacto</label> <span></span><br>
                                    <label>Pendiente Migración</label> <span>No</span><br>
                                    </div>

                                    <div class='content-item-info item-1'>
                                    <p>Acceder a Sistema Configurador</p> <br>
                                    <p>Acceder a Sistema Radius</label>
                                    </div>

                                    <div class='content-item-info item-2'>
                                    <p style="color: transparent;">Acceder a Grupo Mix</p>
                                    </div>

                                    <div class='content-item-info item-2'>
                                    <p>Acceder a Grupo Mix</p> <br>
                                    <p style="color: transparent;">Acceder a Grupo Mix</p> 
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div style="position: relative; top: 40px;">
                                <div class="table-solui"  id="table2" style="top: 215px; position: relative;">
                                    <table class="table-general table-sopor">
                                            <tr>
                                                <th id="changes1" style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31; cursor: pointer;" onclick="cam();">Productos</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Estados</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Promociones</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Adjuntos</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Susp/Reconex</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">PQR</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Incremento Tarifa</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Tipo ONT</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Hoja de Vida</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Inventario Ips</th>
                                                <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31;">Equipos</th>
                                            </tr>
                                            <tr>
                                                <th id="changes2" style="border: solid #fff; color: #000; background-color: #868686; border-width: thick; width: 200px; text-align: center; border-top-color: #F36F31; cursor: pointer;" onclick="cam2();">Preguntas Frecuentes</th>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                    </div>

                    <div id="cambi" style="position: relative; top: 225px;">
                            <div style="position: relative; top: 40px;" id="ocul1">
                                <p id="ayu5" style="position: relative; bottom: 20px; left: 50px;">Mostrar<input style="width: 30px;" type="text" placeholder="1" disabled>registros</p>
                                <p id="ayu6" style="position: relative; bottom: 20px; left: 50px; display: none;">Mostrar<input style="width: 30px;" type="text" placeholder="2" disabled>registros</p>
                                <p style="position: relative; bottom: 55px; left: 770px;">Buscar:</p>
                                <textarea name="" id="des3" cols="30" rows="10" style="width: 200px; height: 40px; position: relative; bottom: 110px; left: 840px;"></textarea>  
                            </div>
                                <div class="table-solui" style="bottom: 110px; position: relative; left: 100px;" id="">
                                        <table class="table-general table-sopor" style="width: 900px;">
                                            <tr style="opacity: 0;">
                                                <th style="border: none; width: 50%;">proyectos</th>
                                                <th style="border: none; width: 50%;">proyectos</th>
                                                <th style="border: none; width: 50%;">proyectos</th>
                                                <th style="border: none; width: 50%;">proyectos</th>
                                                <th style="border: none; width: 50%;">proyectos</th>
                                                <th style="border: none; width: 50%;">proyectos</th>
                                            </tr>
                                            <tr style="height: 40px;">
                                                <th colspan="12"></th>
                                            </tr>
                                            <tr class="row-bl" id="ayu11">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/h5pactivity/view.php?id=5725" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Tplink Archer-Fisico</a></td>
                                            </tr>
                                            <tr id="ayu12">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/h5pactivity/view.php?id=5726" target="_blank" style="text-decoration: none; color: var(--orange-etb);">APP Archer C5</a></td>
                                            </tr>
                                            <tr class="row-bl" id="ayu13">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5727" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Web Archer C5</a></td>
                                            </tr>
                                            <tr id="ayu14">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5728" target="_blank" style="text-decoration: none; color: var(--orange-etb);">APP Configuracion ap zt h176a</a></td>
                                            </tr>
                                            <tr class="row-bl" id="ayu15">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/course/view.php?id=2582" target="_blank" style="text-decoration: none; color: var(--orange-etb);">IP´S</a></td>
                                            </tr>
                                            <tr id="ayu17">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5729" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Web Firehome</a></td>
                                            </tr>
                                            <tr class="row-bl" id="ayu16">
                                                <td colspan="12" style="text-align: center;"><a onclick="habladorText2('La mejor forma de solucionar los problemas de lentitud, siempre sera por medio del cable, esta nos asegura una mejor gestion del problema, opacando todas las brechas posibles, a diferencia de la solucion wifi, en la cual esta no daria una solucion tan contundente.');" style="text-decoration: none; color: var(--orange-etb);;">Solucion Wifi / Cable</a></td>
                                            </tr>
                                            <tr id="ayu18">
                                                <td colspan="12" style="text-align: center;"><a href="https://docs.google.com/presentation/d/e/2PACX-1vTHEli8MwkCovpdrRMcb59jZ3tTWuIlJ1_8mSulVsXfA3-U6gL6aPcw6DEiaBOLBw/embed?start=false&loop=false&delayms=3000&slide=id.p1" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Imagenes de los Dispositivos</a></td>
                                            </tr>
                                            <tr class="row-bl" id="ayu21" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5731" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Web ap hc220 tplink</a></td>
                                            </tr>
                                            <tr id="ayu22" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5732" target="_blank" style="text-decoration: none; color: var(--orange-etb);">AP TP LINK HC220 G5</a></td>
                                            </tr>
                                            <tr class="row-bl" id="ayu23" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5733" target="_blank" style="text-decoration: none; color: var(--orange-etb);">ZTE MESH</a></td>
                                            </tr>
                                            <tr id="ayu24" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5734" target="_blank" style="text-decoration: none; color: var(--orange-etb);">ZTE AP</a></td>
                                            </tr>
                                            <tr class="row-bl" id="ayu25" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a href="https://auladigital.etb.com.co/mod/hvp/view.php?id=5730" target="_blank" style="text-decoration: none; color: var(--orange-etb);">App Firehome</a> <span style="color: var(--orange-etb);"></a></td>
                                            </tr>
                                            <tr id="ayu26" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a href="https://etb.my.salesforce-sites.com/FTTH3/FG_FTTH3" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Conoce el FLUJO SUMA FTTH</a> <span style="color: var(--orange-etb);">/</span> <a href="https://etb--devflow.sandbox.my.salesforce-sites.com/FTTC" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Conoce el FLUJO SUMA FTTC</a></td>
                                            </tr>
                                            <tr class="row-bl" id="ayu27" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a onclick="cic();" style="text-decoration: none; color: var(--orange-etb);">Ciclos y Cortes de Facturacion</a></td>
                                            </tr>
                                            <tr id="ayu28" style="display: none;">
                                                <td colspan="12" style="text-align: center;"><a href="../../../../Model/documents/LEY 2300.pdf" target="_blank" style="text-decoration: none; color: var(--orange-etb);">Conoce la LEY 2300 de 2023</a></td>
                                            </tr>
                                    </table>
                                </div>

                                <p id="ayu3" style="position: relative; left: 30px; bottom: 90px;">Mostrando registros del 1 al 2 de un total de 2 registros</p>
                                <p id="ayu4" style="position: relative; left: 30px; bottom: 90px; display: none;">Mostrando registros del 2 al 2 de un total de 2 registros</p>
                                <button type="button" class="btn-clasic" onclick="">Exportar</button>
                                <button type="button" class="btn-clasic" style="position: relative; bottom: 80px; left: 780px; background-color: var(--blue-os-etb);" onclick="">Enviar</button>
                                <div>
                                <button type="button" onclick="ant();" style="width: 100px; background-color: transparent; position: relative; left: 845px; bottom: 195px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 2px 0 0 2px; cursor: pointer;">Anterior</button>
                                <button type="button" onclick="sig();" style="width: 100px; background-color: transparent; position: relative; left: 840px; bottom: 195px; border: 1px solid rgba(22, 21, 19, 0.5); color: rgba(22, 21, 19, 0.5); border-radius: 0 2px 2px 0; cursor: pointer;">Siguiente</button>
                            </div>
                    </div>

                    <div style="bottom: 40px; display: flex; position: relative; left: 300px; margin-top: 120px;">

                        <div class="con-it-o2" id="ocul2" style="display: none; position: relative; right: 300px;">
                            <div class="items-info2" style="height: 370px;">
                                <div class="cabecera">
                                    <h5>Paquete Seleccionado</h5>
                                </div>
                                <div class="body-items-inf">
                                <div class="content" >
                                        <div class="bundle2">
                                            <div class="header-b">
                                                <p class="f-h-b">SINGLE INTERNET 100M HOG FTTH V2</p>
                                                <p>$ 64900  <span>Mes</span></p>
                                            </div>
                                            <div class="service">
                                                <div class="header-serv">
                                                    INTERNET
                                                </div>
                                                <div class="list-s list-s-l">
                                                    <ul>
                                                        <li>PUNTO CABLEADO</li>
                                                        <li>IP DINÁMICA</li>
                                                        <li>PLAN 100M/100M</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="cabecera" id="ocul5" style="display: none;  top: 30px; left: 100px;">
                            <h5 style="width: 250px; text-align: center;">**La informacion que se muestra es la vigente a la fecha de la consulta</h5>
                        </div>

                        <div class="con-it-o2" id="ocul3" style="display: none; position: relative; right: 300px;  top: 140px;">
                            <div class="items-info2" style="height: 60px;">
                                <div class="cabecera">
                                    <h5>Valor SVAs</h5>
                                </div>
                                <div class="body-items-inf">
                                <div class="content">
                                        <div class="bundle2">
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="con-it-o2" id="ocul4" style="display: none; position: relative; right: 300px; top: 70px;">
                            <div class="items-info2" style="height: 120px;">
                                <div class="cabecera" style="width: 120px;">
                                    <h5 style="bottom: 15px; position: relative;">Promociones Servicios Adicionales sin facturación</h5>
                                </div>
                                <div class="body-items-inf">
                                <div class="content">
                                        <div class="bundle2">
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="position: relative;  width: 100px; left: 530px; bottom: 35px;">ACEPTAR</button>
                </div>

                </div>
             </div>
         </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-ley" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LEY 2300 DERECHO A LA INTIMIDAD</h5>
                </div>
                <div class="modal-body">
                    <p style="text-align: center;">
                        Se requiere actualizar la información para la ley 2300
                    </p>
                 </div>
                <div class="modal-footer" style="display: flex;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="border: none; border-radius: 20px; position: relative; left: 110px" onclick="ley();">No Registrar</button>
                    <button type="button" class="btn btn-secondary" id="btn-modal-ps4error" style="background-color: #20a4cb; border: none; border-radius: 20px; position: relative; left: 110px;">Registrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-ley2" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LEY 2300 DERECHO A LA INTIMIDAD</h5>
                </div>
                <div class="modal-body">
                    <p style="text-align: center;">
                        Recuerda actualizar la información para la ley 2300
                    </p>
                 </div>
                <div class="modal-footer" style="display: flex;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="border: none; border-radius: 20px; position: relative; left: 110px" onclick="ley2();">No Registrar</button>
                    <button type="button" class="btn btn-secondary" id="btn-modal-ps4error" style="background-color: #20a4cb; border: none; border-radius: 20px; position: relative; left: 110px;">Registrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-ley3" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LEY 2300 DERECHO A LA INTIMIDAD</h5>
                </div>
                <div class="modal-body">
                    <p style="text-align: center;">
                        Recuerda que podras actualizar en cualquier momento la información, mientras tanto continuaremos contáctandote por los canales habituales
                    </p>
                 </div>
                <div class="modal-footer" style="display: flex;">
                    <button type="button" class="btn btn-secondary" id="btn-modal-ps4error" style="border: none; border-radius: 20px; position: relative; left: 0;" onclick="ley3();">ACEPTAR</button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="modal-leyfase2"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h5 class="modal-title">AUTORIZACIONES</h5>       
                </div>
                <div class="modal-body">

                    <div class="table-solui"  id="table2" style="margin-bottom: 25px;">
                        <table class="table-general table-sopor">
                                <tr>
                                    <th id="changes1" style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31; cursor: pointer;" onclick="lf1();">ATDP</th>
                                    <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31; cursor: pointer;" onclick="lf2();">RNE 2003</th>
                                    <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 100px; text-align: center; border-top-color: #F36F31; cursor: pointer;" onclick="lf3();">LEY 2300</th>
                                    <th style="border: solid #fff; color: #000; background-color: #c3c3c3; border-width: thick; width: 200px;; text-align: center; border-top-color: #F36F31; cursor: pointer;" onclick="lf4();">COMUNICACIÓN FINAL</th>
                                </tr>
                        </table>
                    </div>
                
                    <div class="items-info items-sopor content-fact" id="df-11" style="height: 100px;">
                        <div class="cabecera">
                            <h5>Autorización Tratamiento Datos Personales</h5>
                        </div>
                        <div class="body-items-inf">
                            <select name="" id="">
                                <option value="">Autoriza</option>
                            </select>
                        </div>
                    </div>

                    <div class="items-info items-sopor content-fact" id="df-21" style="height: 100px; display: none;">
                        <div class="cabecera">
                            <h5>RNE 2003</h5>
                        </div>
                        <div class="body-items-inf">
                            <p style="color: var(--orange-etb);">Nota: Esta informacion se carga desde la página de la CRC para REGISTRO DE NÚMERO EXCLUIDO - RNE y no puede ser editada desde este formulario.</p>
                        </div>
                    </div>

                    <div class="items-info items-sopor content-fact" id="df-31" style="height: 140px; display: none;">
                        <div class="cabecera">
                            <h5>Derecho a la intimidad Ley 2300 de 2023</h5>
                        </div>
                        <div class="body-items-inf">
                            <button style="position: relative; left: 240px; top: 8px; width: 220px;  background: #11A1D8; padding: 3px 5px; border: 2px solid transparent; color: #FFFFFF; margin-right: 15px;">Autorizacion Informacion Ley 2300</button>
                        </div>
                    </div>

                    <div class="items-info items-sopor content-fact" id="df-41" style="height: 400px; display: none;">
                        <div class="cabecera">
                            <h5>Comunicación final 2300</h5>
                        </div>
                        <div class="body-items-inf">
                            <p style="color: var(--orange-etb);">Comunicaciones</p>
                            <div class="table-product" id="con-sopo-inter">
                                <div class="con-table">
                                    <table class="table-general table-sopor table-produc">
                                        <tr>
                                            <th>Identificador</th>
                                            <th>Mensaje</th>
                                        </tr>

                                        <tbody>

                                        <tr>
                                            <td>3045697542</td>
                                            <td>Se permite comunicación comercial, publicitaria, de servicio y Catedra a través de los canales internos dispuestos por <br>
                                            ETB, hasta definir comunicación según la ley 2300.</td>
                                        </tr>

                                        <tr>
                                            <td>3203569751</td>
                                            <td>Se permite comunicación comercial, publicitaria, de servicio y Catedra a través de los canales internos dispuestos por <br>
                                            ETB, hasta definir comunicación según la ley 2300.</td>
                                        </tr>

                                        <tr>
                                            <td>vivi@email.com</td>
                                            <td>Se permite comunicación comercial, publicitaria, de servicio y Catedra a través de los canales internos dispuestos por <br>
                                            ETB, hasta definir comunicación según la ley 2300.</td>
                                        </tr>

                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
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
    <script src="../../../../Controller/suma/FTTH/portalFTTH.js"></script>
    <script src="../../../../Controller/security/FTTH5/anti-cheat-ftth4.js"></script>

    <script>
        habladorText('Cliente: CLAID MUSS <br> Tipo de Documento: CC <br> Numero de Documento: 1000842659')
    </script>

</body>
</html>