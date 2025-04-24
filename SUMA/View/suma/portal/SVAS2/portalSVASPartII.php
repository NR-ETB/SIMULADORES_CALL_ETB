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
                    <a href="#" class="item-bread">Tramites</a>
                    <a href="#" class="item-bread">RETIRO DE SVAS (RSER)</a>
            </div>
            <div class="con-main-pasos">
                <div class="con-pasos sw-main sw-theme-arrows" id="smartwizard">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="nav-item active" id="pasoli-1"><a class="nav-link">Paso 1<br><small>Datos Contacto</small></a></li>
                        <li class="nav-item" id="pasoli-2"><a class="nav-link">Paso 2<br><small>Cambio SVAs</small></a></li>
                        <li class="nav-item" id="pasoli-3"><a class="nav-link">Paso 3<br><small>Validación Cliente</small></a></li>
                        <li class="nav-item" id="pasoli-4"><a class="nav-link">Paso 4<br><small>Datos Adicionales</small></a></li>
                        <li class="nav-item" id="pasoli-5"><a class="nav-link">Paso 5<br><small>Agendamiento</small></a></li>
                        <li class="nav-item" id="pasoli-6"><a class="nav-link">Paso 6<br><small>Finalización</small></a></li>
                        <li class="nav-item nav-item-alert"><a class="nav-link">
                            <img src="../../../images/speaker.png" alt="parlante-audio-etb" class="img-audio" id="img-list-paso-a" onclick="alertAudio('au-list-paso-a', 'img-list-paso-a')" style="margin-left: 20px;">
                            <audio id="au-list-paso-a" controls class="audio" style="display: none;">
                            <source type="audio/wav" src="../../../../Model/audioSuma/audio_com/gcs25.mp3">
                            </audio>
                        </a></li>   
                    </ul>
                </div>
                
                <!-- Paso 1 -->
                    <div class="paso-1" id="paso-1" >

                        <div style="display: flex; margin: 80px 645px; 0 0">
                            <input type="checkbox" style="margin-right: 10px;"><p style="color: var(--orange-etb); margin-top: 17px;">El titular de la linea realizara el tramite</p>
                        </div>

                        <div class="con-btn-paso-2">
                            <div class="mar">
                                <button id="btn-paso-3" onclick="valid(),habladorText('En este apartado podras observar tanto el bundle seleccionado, las promociones actuales del cliente y tambien podras ver los Svas disponibles, Deselecciona el HBO PACK $ 24900');">SIGUIENTE >></button>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Paso 1 -->

                    <!-- Paso 2 -->
                    <div class="paso" id="paso-2" >

                        <div class="con-it-o2" id="ocul2" style="position: relative; right: 350px; top: 50px;">
                                <div class="items-info2" style="height: 320px; width: 600px;">
                                    <div class="cabecera">
                                        <h5>Bundle Seleccionado</h5>
                                    </div>
                                    <div class="body-items-inf">
                                    <div class="content" >
                                            <div class="bundle2">
                                                <div class="header-b">
                                                    <p class="f-h-b">DUO 300MB HOG V7</p>
                                                    <p style="bottom: 12px; position: relative;">$ 70900  <span>Mes</span></p>
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
                                </div>
                        </div> 

                        <div class="con-it-o2" id="ocul2" style="position: relative; left: 500px; bottom: 370px;">
                                <div class="items-info2" style="height: 370px; top: 100px;">
                                    <div class="cabecera">
                                        <h5>Svas</h5>
                                    </div>
                                    <div class="body-items-inf">
                                    <div class="content" >
                                        <div style="display: flex;">
                                            <input type="checkbox" checked onclick="btn_or(),habladorText('Una vez seleccionas el Sva, este aparecera añadido en la siguiente tabla, donde ademas de su valor, podras ver los demas Svas que el cliente tiene activos, para continuar presiona en el boton Siguiente.')"><p style="color: var(--orange-etb); margin-top: 15px;">HBO PACK $ 24900</p>
                                        </div>
                                        <div style="display: flex;">                                        
                                            <input type="checkbox"><p style="color: var(--orange-etb); margin-top: 15px;">ADULTOS $ 23800</p>
                                        </div>
                                        <div style="display: flex;">
                                            <input type="checkbox"><p style="color: var(--orange-etb); margin-top: 15px;">HOT GO $ 23800</p>
                                        </div>
                                        <div style="display: flex;">
                                            <input type="checkbox"><p style="color: var(--orange-etb); margin-top: 15px;">DECO ADICIONAL $ 19900</p>
                                        </div>
                                        <div style="display: flex;">
                                            <input type="checkbox"><p style="color: var(--orange-etb); margin-top: 15px;">GRABADOR $ 10300</p>
                                        </div>
                                        <div style="display: flex;">
                                            <input type="checkbox"><p style="color: var(--orange-etb); margin-top: 15px;">PREMIUM MUNDO $ 5200</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div> 

                        <div id="table" class="items-info items-sopor item-produc" style="position: relative; bottom: 230px;">
                            <div class="cabecera">
                                <h5>Promociones</h5>
                            </div>
                            <div class="body-items-inf">
                            <div class="table-product" id="con-sopo-inter">
                                    <div class="con-table">
                                        <table class="table-general table-sopor table-produc">
                                            <tr>
                                                <th>Plan Asociado</th>
                                                <th>Nombre Promoción </th>
                                                <th>Descripción</th>
                                                <th>Acción</th>
                                            </tr>
                                            <tbody>

                                                <tr>
                                                <td>DUO 300MB HOG V7</td>
                                                <td>AUMENTO DE VELOCIDAD 80M SIMETRICO</td>
                                                <td>Aumento de velociodad simétrica</td>
                                                <td>Mantener</td>
                                                </tr>
    
                                                <tr>
                                                <td>DUO 300MB HOG V7</td>
                                                <td>DUO xM HOG RETENCIÓN FTTH</td>
                                                <td>DUO xM HOG RETENCIÓN FTTH</td>
                                                <td>Mantener</td>
                                                </tr>
                                                
                                                </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div id="btn-comp" class="btn-flot" onclick="btn_comp(), habladorText('Aqui podras apreciar, una sencilla comparación de los SVAs que al cliente se le han adicionado o retirado');" style="width: 280px; background-color: #20A4CB;">
                        COMPARACIÓN DE SVAs
                    </div>

                        <a style="color: var(--orange-etb); position: relative; bottom: 230px; left: 700px; cursor: pointer;" onclick="btn_or();"><u>Ver Resumen de Compra</u></a> 

                        <div class="con-btn-paso-2" style="display: flex; position: relative; bottom: 230px;"> 
                          <button onclick="cancel();"style="background-color: #20A4CB;">CERRAR INTERACCIÓN</button>
                          <button onclick="btn_paso_3(),habladorText('En este apartado podras observar los datos del cliente, en este caso deberas seleccionar la casilla de Autorizacion Validacion Codigo, ademas de obligatoriamente ingresar la fecha de expedicion del documento del cliente **12/08/2024**, luego de estoy para continuar presiona en Siguiente.');">SIGUIENTE >></button>
                      </div>
                   </div>
                    <!-- Paso 2 -->

                    <!-- Paso 3 -->
                    <div class="paso-2" id="paso-3" style="display: none;">

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
                            <span style="color: var(--orange-etb); position: relative; right: 127px;">Fecha de Expedicion Doc. *</span><textarea name="" id="fech" style="height: 29.5px; position: relative; right: 127px;"></textarea>
                            </div>
                            <div style="display: flex;">
                                <span style="color: var(--orange-etb); position: relative; right: 127px; font-size: 14px;">Autorizacion traramiento de datos personales</span>
                                <select name="" id="" style="position: relative; right: 125px; width: 74px;" disabled>
                                    <option value="">Si</option>
                                </select>
                            </div>
                            <div style="display: flex; position: relative; top: 20px;">
                                <span style="color: var(--orange-etb); position: relative; right: 127px; font-size: 14px;">Autorizacion Validacion Codigo</span>
                                <input type="checkbox" style="position: relative; right: 125px;">
                            </div>
                        </div>

                        <div id="btn-comp" class="btn-flot" onclick="btn_comp();" style="width: 280px; background-color: #20A4CB;">
                            COMPARACIÓN DE SVAs
                        </div>
                        
                        <a style="color: var(--orange-etb); position: relative; top: 70px; left: 700px; cursor: pointer;" onclick="btn_or();"><u>Ver Resumen de Compra</u></a> 

                        <div class="con-btn-paso-2" style="display: flex; position: relative; top: 80px;"> 
                          <button style="background-color: #20A4CB;" onclick="cancel();">CERRAR INTERACCIÓN</button>
                          <button onclick="btn_paso_4();">SIGUIENTE >></button>
                      </div>
                    </div>
                    <!-- Paso 3 -->
    
                  <!-- paso 4 -->
                <div class="paso" id="paso-4">
                    <div class="con-cards-portal">
                    <div class="cards" style="height: 580px;">
                        <p class="cabecera">Datos Cliente</p>
                        <section class="left">
                            <br>
                            <p>Tipo Documento: </p>
                            <p>Número Documento: </p>
                            <p>Nombres: </p>
                            <p>Apellidos: </p>
                            <p>Telefono Fijo: </p>
                            <p>Celular: </p>
                            <p>Celular2: </p>
                            <p>Departamento: </p>
                            <p>Ciudad: </p>
                            <p>Dirección de Instalación: </p>
                            <p>Estrato: </p>
                            <p>Zona/Central: </p>
                            <p>Molecula/Distrito: </p>
                            <p>Tecnología: </p>
                            <p>Email: </p>
                            <br>
                        </section>
                        <section class="right" style="margin-top: 30px;">
                            <br>
                            <p>CC</p>
                            <p>1000958632</p>
                            <p>NATALIA</p>
                            <p>FERNANDES</p>
                            <p>20354851</p>
                            <p>3145216985</p>
                            <br><br>
                            <p>Atlántico</p>
                            <p>Barranquilla</p>
                            <p>Calle 85A #23 c 28</p>
                            <p>6</p>
                            <p>El Prado</p>
                            <p>ASU8</p>
                            <p>FTTH</p>
                            <p>natf@email.com</p>
                        </section>
                    </div>

                    <div class="cards" style="height: 280px; right: 525px; top: 620px;">
                        <p class="cabecera">Otros Información</p>
                        <section class="left">
                            <br>
                            <p>Envío Contrato * </p>
                            <p>Usuario Portal * </p>
                            <p>Identificación Asesor * </p>
                            <p>Nombre Asesor </p>
                            <p>Enviar Correo Notificación </p>
                            <p>Por que medio se entero? * </p>
                            <br>
                        </section>
                        <section class="right" style="margin-top: 30px;">
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">DigitalSinFirma</textarea>
                            <textarea name="" id="" style="height: 29.5px;">nnicrod</textarea>
                            <textarea name="" id="" style="height: 29.5px;">103358826</textarea>
                            <br>
                            <p style="height: 29.5px;">N N N N</p>
                            <input type="checkbox">
                            <br>
                            <select style="height: 29.5px;">
                                <option value="">Radio</option>
                            </select>
                            <br>
                            <br>
                        </section>
                    </div>

                    <div class="cards" style="bottom: 300px;">
                        <p class="cabecera">Datos Facturación</p>
                        <section class="left">
                            <br>
                            <p>Tipo de Envió: </p>
                            <p>Tipo de Facturación: </p>
                            <p>Departamento: </p>
                            <p>Ciudad: </p>
                            <p>Dirección Factura: </p>
                            <p>Email Factura: </p>
                            <p>Ciclo de Facturación: </p>
                            <p>Clausula de Pertenencia: </p>
                            <br>
                        </section>
                        <section class="right" style="margin-top: 30px;">
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">Eletrónica</option>
                            </select>
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">Detallada</option>
                            </select>
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">ATLÁNTICO</option>
                            </select>
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">BARRANQUILLA</option>
                            </select>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">Calle 85A #23 c 28</textarea>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">natf@email.com</textarea>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">64</textarea>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">NO</textarea>
                            <br>
                            <br>
                        </section>
                    </div>

                    <div class="cards" style="height: 230px; top: 360px; right: 525px;">
                        <p class="cabecera">Contacto</p>
                        <div class="con-table" style="margin-top: 30px;">
                            <br>
                            <table>
                                    <tr class="head-t">
                                        <td>Tipon Doc</td>
                                        <td>Número Doc</td>
                                        <td>Nombre</td>
                                        <td>Autorizado</td>
                                        <td>Instalador</td>
                                    </tr>
                                    <tr>
                                        <td>CC</td>
                                        <td>1000958632</td>
                                        <td>NATALIA FERNANDES</td>
                                        <td>SI</td>
                                        <td><input type="checkbox"></td>
                                    </tr>
                            </table>
                            <br>
                            <button style="background-color: var(--orange-etb); border: none; border-radius: 15px; color: #fff; height: 35px;">Nuevo contacto</button>
                        </div>
                    </div>

                    <div class="cards" style="height: 290px; top: 320px; right: 525px;">
                        <p class="cabecera">Adjuntos</p>
                        <div class="con-table" style="margin-top: 30px;">
                            <br>
                            <table>
                                    <tr class="head-t">
                                        <td>Nombre Archivo</td>
                                        <td>Descripción</td>
                                        <td>Tamaño</td>
                                    </tr>
                            </table>
                            <button style="background-color: var(--orange-etb); border: none; border-radius: 15px; color: #fff; height: 35px;">Adjuntar</button>
                            <br><br>
                            <p style="color: var(--orange-etb);">Observaciónes</p>
                        </div>
                    </div>

                    <div class="cards" style="height: 140px; bottom: 492px;">
                        <p class="cabecera">Envio Comunicaciones</p>
                        <section class="left">
                            <br>
                            <p>Envío Contrato * </p>
                            <p>Usuario Portal * </p>
                            <br>
                        </section>
                        <section class="right" style="margin-top: 30px;">
                            <br>
                            <select style="height: 29.5px;">
                                <option value="">Seleccione</option>
                            </select>
                            <textarea name="" id="" style="height: 29.5px; width: 170px;"></textarea><button style="background: var(--orange-etb); border: 2px solid var(--orange-etb); border-radius: 10px; position: relative; bottom: 10px;"><img style="height: 20px; width: 18px;" src="../../../images/images-suma/pencil.png" alt=""></button>
                            <br>
                            <br>
                        </section>
                    </div>

                    <div class="cards" style="height: 280px; bottom: 460px;">
                        <p class="cabecera">Bundle Seleccionado</p>
                        <div class="con-bundle">
                            <div class="bundle">
                                <div class="header-b">
                                    <p class="f-h-b">DUO 300MB HOG V7</p>
                                    <p style="bottom: 12px; position: relative;">$ 70900  <span>Mes</span></p>
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
                        </div>
                    </div>

                    <div class="cards" style="height: 175px; bottom: 138px; left: 535px;">
                        <p class="cabecera">SVAs</p>
                        <div class="con-table" style="margin-top: 30px;">
                            <br>
                            <table>
                                    <tr class="head-t">
                                        <td>Nombre SVAs</td>
                                        <td>Valor</td>
                                    </tr>
                                    <tr>
                                        <td>WIFI PLUS TIPO 1</td>
                                        <td>$0</td>
                                    </tr>
                            </table>
                            <br>
                        </div>
                    </div>
                    </div>

                    <div class="con-btn-paso-2" style="display: flex; position: relative; top: 50px;"> 
                        <button style="background-color: #20A4CB;" onclick="cancel();">CERRAR INTERACCIÓN</button>
                        <button onclick="btn_paso_5(),habladorText('En este apartado se realizara el agendamiento correspondiente para el tramite, en algunos casos como en este, no se debera realizar un agendamiento por lo que puedes continuar, presionando el boton Siguiente,')">SIGUIENTE >></button>
                    </div>
                </div>
        
                  <!-- paso 5 -->
                  <div class="paso" id="paso-5">
                    <div class="con-cards-portal">
                    <div class="cards" style="height: 580px;">
                        <p class="cabecera">Datos Cliente</p>
                        <section class="left">
                            <br>
                            <p>Tipo Documento: </p>
                            <p>Número Documento: </p>
                            <p>Nombres: </p>
                            <p>Apellidos: </p>
                            <p>Telefono Fijo: </p>
                            <p>Celular: </p>
                            <p>Celular2: </p>
                            <p>Departamento: </p>
                            <p>Ciudad: </p>
                            <p>Dirección de Instalación: </p>
                            <p>Estrato: </p>
                            <p>Zona/Central: </p>
                            <p>Molecula/Distrito: </p>
                            <p>Tecnología: </p>
                            <p>Email: </p>
                            <br>
                        </section>
                        <section class="right" style="margin-top: 30px;">
                            <br>
                            <p>CC</p>
                            <p>1000958632</p>
                            <p>NATALIA</p>
                            <p>FERNANDES</p>
                            <p>20354851</p>
                            <p>3145216985</p>
                            <br><br>
                            <p>Atlántico</p>
                            <p>Barranquilla</p>
                            <p>Calle 85A #23 c 28</p>
                            <p>6</p>
                            <p>El Prado</p>
                            <p>ASU8</p>
                            <p>FTTH</p>
                            <p>natf@email.com</p>
                        </section>
                    </div>

                    <div class="cards" style="height: 280px; right: 525px; top: 620px;">
                        <p class="cabecera">Otros Información</p>
                        <section class="left">
                            <br>
                            <p>Envío Contrato * </p>
                            <p>Usuario Portal * </p>
                            <p>Identificación Asesor * </p>
                            <p>Nombre Asesor </p>
                            <p>Enviar Correo Notificación </p>
                            <p>Por que medio se entero? * </p>
                            <br>
                        </section>
                        <section class="right" style="margin-top: 30px;">
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">DigitalSinFirma</textarea>
                            <textarea name="" id="" style="height: 29.5px;">nnicrod</textarea>
                            <textarea name="" id="" style="height: 29.5px;">103358826</textarea>
                            <br>
                            <p style="height: 29.5px;">N N N N</p>
                            <input type="checkbox">
                            <br>
                            <select style="height: 29.5px;">
                                <option value="">Radio</option>
                            </select>
                            <br>
                            <br>
                        </section>
                    </div>

                    <div class="cards" style="bottom: 300px;">
                        <p class="cabecera">Datos Facturación</p>
                        <section class="left">
                            <br>
                            <p>Tipo de Envió: </p>
                            <p>Tipo de Facturación: </p>
                            <p>Departamento: </p>
                            <p>Ciudad: </p>
                            <p>Dirección Factura: </p>
                            <p>Email Factura: </p>
                            <p>Ciclo de Facturación: </p>
                            <p>Clausula de Pertenencia: </p>
                            <br>
                        </section>
                        <section class="right" style="margin-top: 30px;">
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">Eletrónica</option>
                            </select>
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">Detallada</option>
                            </select>
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">ATLÁNTICO</option>
                            </select>
                            <br>
                            <select name="" id=""  style="height: 29.5px;" disabled>
                                <option value="">BARRANQUILLA</option>
                            </select>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">Calle 85A #23 c 28</textarea>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">natf@email.com</textarea>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">64</textarea>
                            <br>
                            <textarea name="" id="" style="height: 29.5px;">NO</textarea>
                            <br>
                            <br>
                        </section>
                    </div>

                    <div class="cards" style="height: 280px; top: 370px; right: 530px;">
                        <p class="cabecera">Bundle Seleccionado</p>
                        <div class="con-bundle">
                            <div class="bundle">
                                <div class="header-b">
                                    <p class="f-h-b">DUO 300MB HOG V7</p>
                                    <p style="bottom: 12px; position: relative;">$ 70900  <span>Mes</span></p>
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
                        </div>
                    </div>

                    <div class="line" style="position: relative; left: 545px; bottom: 650px;"></div>
                    <span style="position: relative; right: 85px; bottom: 630px;">ESTE TRAMITE NO TIENE AGENDAMIENTO</span>

                    </div>

                    <div class="con-btn-paso-2" style="display: flex; position: relative; top: 50px;"> 
                        <button style="background-color: #20A4CB;" onclick="cancel();">CERRAR INTERACCIÓN</button>
                        <button onclick="btn_modal_8(),habladorText('Aqui podras apreciar el resumen de la orden');">SIGUIENTE >></button>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ================================ MODALES ==================================================== -->

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
                                <td colspan="2">HBO PACK</td>
                                <td><img src="../../../images/images-suma/checkgreen.png" style="width: 25px; height: 25px;" alt=""></td>
                                <td><img src="../../../images/images-suma/xred.png" style="width: 25px; height: 25px;" alt=""></td>

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
                    <span><p>$ 104800</p></span>
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
            <p>Has finalizado con exito el escenario RETIRO (SVAS) del Simulador SUMA, recuerda que siempre esta a tu disposicion y cuentas con intentos ilimitados :)</p>
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
    <script src="../../../../Controller/suma/SVAS/portalSVASPartII2.js"></script>
    <script src="../../../../Controller/security/SVAS/anti-cheat-svas4.js"></script>

    <script>
        habladorText('Selecciona la casilla y acto seguido preciona en el boton Siguiente.')
    </script>

</body>
</html>