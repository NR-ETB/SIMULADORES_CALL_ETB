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
                    <a href="#" class="item-bread">Home</a>
                    <a href="#" class="item-bread" style="display: none;">Consulta</a>
                    <a href="#" class="item-bread">Tramites</a>
                    <a href="#" class="item-bread">RETENCIÓN (RETE)</a>
            </div>
            <div class="acon-main-pasos">
                <div class="con-pasos sw-main sw-theme-arrows" id="smartwizard">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="nav-item active" id="pasoli-1"><a class="nav-link">Paso 1<br><small>Validación Cliente</small></a></li>
                        <li class="nav-item" id="pasoli-2"><a class="nav-link">Paso 2<br><small>Selección Retención</small></a></li>
                        <li class="nav-item" id="pasoli-3"><a class="nav-link">Paso 3<br><small>Datos Adicionales</small></a></li>
                        <li class="nav-item" id="pasoli-4"><a class="nav-link">Paso 4<br><small>Finalizar</small></a></li>
                        <li class="nav-item nav-item-alert"><a class="nav-link">
                            <img src="../../../images/speaker.png" alt="parlante-audio-etb" class="img-audio" id="img-list-paso-a" onclick="alertAudio('au-list-paso-a', 'img-list-paso-a')" style="margin-left: 20px;">
                            <audio id="au-list-paso-a" controls class="audio" style="display: none;">
                                <source type="audio/wav" src="../../../../Model/audioSuma/audio_com/gcs24.mp3">
                            </audio>
                        </a></li>   
                    </ul>
                </div>
                
                <!-- Paso 1 -->
                <div class="paso-1" id="paso-1" >

                        <div style="text-align: center; background-color: #F36F31;">
                            <p style="color: #fff;">Se ha enviado código OTP Lisim al numero registrado por el cliente</p>
                        </div>

                        <div style="margin-left: 570px;">
                            <h2>Validacion de Identidad Cliente</h2>
                        </div>

                        <div style="margin-left: 440px; display: flex; color: #F36F31;">
                            <p>Se ha enviado codigo OTP al cliente, por favor ingréselo aqui para validar *</p>
                            <input type="text" style="margin-left: 10px; height: 30px;">
                        </div>

                        <div style="margin-left: 660px; display: flex;">
                            <button style="background-color: #20A4CB; color: #fff; height: 30px;">validar OTP</button>
                            <div style="display: flex; margin-left: 40px;">
                                <img style="width: 25px; height: 25px;" src="../../../images/cloack.png" alt=""><p>Tiempo restante: 1:49</p>
                            </div>
                        </div>

                        <div style="margin: 0 0 75px 500px; display: flex; color: #F36F31;">
                            <p>Automatizar tratamiento de datos personales</p>
                            <select style="margin-left: 10px; height: 30px; width: 200px;" disabled>
                                <option value="">Si</option>
                            </select>
                        </div>

                        <a onclick="btn_or();" style="color: var(--orange-etb); position: relative; bottom: 30px; left: 700px;"><u>Ver Resumen de Compra</u></a> 

                        <div class="con-btn-paso-2" style="display: flex; position: relative; bottom: 30px;"> 
                        <button id="btn_can2" onclick="cancel(),habladorText('En este modal el ASESOR, debe de ingresar el motivo y detalles pertinentes del CIERRE DE LA INTERACCION, para continuar presiona en CONTINUAR');" style="background-color: #20A4CB;">CERRAR INTERACCIÓN</button>
                        <button>SIGUIENTE >></button>
                    </div>
                </div>
                    <!-- Paso 1 -->
        </div>
    </div>
    <!-- ================================ MODALES ==================================================== -->
    <div class="alert-flotante" id="alert-flotante">
        <div class="etb-flotant etb-flotant-login" id="etb-flotant">
            <img src="../../../images/ETB.svg" alt="">
        </div>
        <div class="mensaje-parlante msg-parl-log" id="mensaje-parlante" style="width: 500px;">
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

    <div class="modal modal-success-sim" tabindex="-1" id="modal-err">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <p>El usuario no se encuentra registrado en la central de riesgos por favor verifique la información (número de documento, teléfono, fehca de expedición del documento)</p>
                </div>
                <div class="modal-footer" style="right: 280px; position: relative;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error">ACEPTAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-can">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
            <h5 class="modal-title">MOTIVO DE CANCELACIÓN</h5>
            </div>
            <div class="modal-body">
            <!-- Motivo de Cancelación -->
            <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Motivo Cancelación <span style="color: red;">*</span></label>
                <select class="form-control" disabled>
                <option>VALIDACIÓN CLIENTE - CIERRE POR DEFECTO</option>
                </select>
            </div>
    
            <!-- Submotivo de Cancelación -->
            <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Submotivo Cancelación <span style="color: red;">*</span></label>
                <select class="form-control" disabled>
                <option>PENDIENTE FASE LISIM - VALIDA</option>
                </select>
            </div>
    
            <!-- Descripción Cancelación -->
            <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Descripción Cancelación <span style="color: red;">*</span></label>
                <textarea class="form-control" rows="2">PRUEBA DEL SIMULADOR SUMA</textarea>
            </div>
            </div>
    
            <div class="modal-footer" style="display: flex; justify-content: space-between;">
                <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; left: 140px;" onclick="btn_end();">ACEPTAR</button>
                <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; margin-right: 140px; left: 0px;">CANCELAR</button>
            </div>
        </div>
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-dir">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">NUEVA DIRECCIÓN INTALACION</h5>
                </div>
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="departamento" style="color: #F36F31; font-weight: bold;">Departamento *</label>
                            <select id="departamento" class="form-select" style="border: 1px solid #ccc;">
                                <option selected>Seleccione...</option>
                                <option>BOGOTA</option>
                                <option>CUNDINAMARCA</option>
                                <option>META</option>
                            </select>
                        </div>
                
                        <div class="mb-3">
                            <label for="ciudad" style="color: #F36F31; font-weight: bold;">Ciudad *</label>
                            <select id="ciudad" class="form-select" style="border: 1px solid #ccc;">
                                <option selected>Seleccione...</option>
                                <option>BOGOTA D.C</option>
                            </select>
                        </div>
                
                        <div class="mb-3">
                            <label for="direccion" style="color: #F36F31; font-weight: bold;">Dirección de Instalación</label>
                            <button id="direccion" class="form-control" style="border: 1px solid #ccc; border: 1px solid #ccc; left: 0; width: 285px; background-color: #fff;" onclick="add_dir(),habladorText('En las casillas con bordes anaranjados, deberas ingresar, la direccion CALLE 145 52 78, luego de esto dar en ACEPTAR');"></button>
                        </div>
                </div>                
                <div class="modal-footer" style="display: flex;">
                    <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; left: 0;">ADICIONAR</button>
                    <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; left: 0;" data-bs-dismiss="modal" id="btn-modal-ps4error">CANCELAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-addir">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="width: 1000px;">
                <div class="modal-header">
                    <h5 class="modal-title">BIENVENIDO AL VALIDADOR DE DIRECCIONES DE ETB</h5>
                </div>
                <div class="modal-body modal-xl" style="width: 1000px;">
                    <!-- Primera fila -->
                    <div class="row mb-2" style="margin-top: 25px;">
                        <div class="col"><select style="width: 50px; border: 2px solid #F36F31;" name="" id="auto" class="form-control" >
                            <option value="0"></option>
                            <option value="0">Autopista</option>
                            <option value="0">Avenida</option>
                            <option value="0">Avenida Calle</option>
                            <option value="0">Avenida Carrera</option>
                            <option value="0">Bulevar</option>
                            <option value="1">Calle</option>
                            <option value="0">Carrera</option>
                            <option value="0">Carretera</option>
                            <option value="0">Circular</option>
                            <option value="0">Circunvalar</option>
                            <option value="0">Cuentas Corridas</option>
                            <option value="0">Diagonal</option>
                            <option value="0">Pasaje</option>
                            <option value="0">Paseo</option>
                            <option value="0">Peatonal</option>
                            <option value="0">Transversal</option>
                            <option value="0">Troncal</option>
                            <option value="0">Variante</option>
                            <option value="0">Vía</option>
                        </select></div>
                        <div class="col"><input style="border: 2px solid #F36F31;" type="text" class="form-control" placeholder="" required></div>
                        <div class="col"><select name="" class="form-control" >
                            <option value="0"></option>
                            <option value="0">A</option>
                            <option value="0">B</option>
                            <option value="0">C</option>
                            <option value="0">D</option>
                            <option value="0">E</option>
                            <option value="0">F</option>
                            <option value="0">G</option>
                            <option value="0">H</option>
                            <option value="0">I</option>
                            <option value="0">J</option>
                            <option value="0">K</option>
                            <option value="0">L</option>
                            <option value="0">M</option>
                            <option value="0">N</option>
                            <option value="0">O</option>
                            <option value="0">P</option>
                            <option value="0">Q</option>
                            <option value="0">R</option>
                            <option value="0">S</option>
                            <option value="0">T</option>
                            <option value="0">U</option>
                            <option value="0">V</option>
                            <option value="0">W</option>
                            <option value="0">X</option>
                            <option value="0">Y</option>
                            <option value="0">Z</option>
                        </select></div>
                        <div class="col"><p>BIS</p></div>
                        <div class="col"><select style="width: 50px;" name="" id="" class="form-control" >
                            <option value="0"></option>
                        </select></div>
                        <div class="col"><select style="width: 50px;" name="" id="" class="form-control" >
                            <option value="0"></option>
                        </select></div>
                        <div class="col"><p>NO</p></div>
                        <div class="col"><input style="border: 2px solid #F36F31;" type="text" class="form-control" placeholder="" required></div>
                        <div class="col"><select class="form-control" >
                            <option value="0"></option>
                            <option value="0">A</option>
                            <option value="0">B</option>
                            <option value="0">C</option>
                            <option value="0">D</option>
                            <option value="0">E</option>
                            <option value="0">F</option>
                            <option value="0">G</option>
                            <option value="0">H</option>
                            <option value="0">I</option>
                            <option value="0">J</option>
                            <option value="0">K</option>
                            <option value="0">L</option>
                            <option value="0">M</option>
                            <option value="0">N</option>
                            <option value="0">O</option>
                            <option value="0">P</option>
                            <option value="0">Q</option>
                            <option value="0">R</option>
                            <option value="0">S</option>
                            <option value="0">T</option>
                            <option value="0">U</option>
                            <option value="0">V</option>
                            <option value="0">W</option>
                            <option value="0">X</option>
                            <option value="0">Y</option>
                            <option value="0">Z</option>
                        </select></div>
                        <div class="col"><p>BIS</p></div>
                        <div class="col"><select style="width: 50px;" name="" id="" class="form-control" >
                            <option value="0"></option>
                        </select></div>
                        <div class="col"><p>-</p></div>
                        <div class="col"><input style="border: 2px solid #F36F31;" type="text" class="form-control" placeholder="" required></div>
                        <div class="col"><select style="width: 50px;" name="" id="" class="form-control" >
                            <option value="0"></option>
                        </select></div>
                    </div>
                
                    <!-- Segunda fila -->
                    <div class="row mb-2" style="margin-top: 45px;">
                        <div class="col"><input type="text" class="form-control" placeholder=""></div>
                        <div class="col"><input type="text" class="form-control" placeholder="Barrio"></div>
                        <div class="col"><input type="text" class="form-control" placeholder=""></div>
                        <div class="col"><input type="text" class="form-control" placeholder="Urbanización"></div>
                    </div>
                
                    <!-- Tercera fila -->
                    <div class="row mb-2" style="margin-top: 45px;">
                        <div class="col"><input type="text" class="form-control" placeholder=""></div>
                        <div class="col"><input type="text" class="form-control" placeholder="Manzana o Interior"></div>
                        <div class="col"><input type="text" class="form-control" placeholder=""></div>
                        <div class="col"><select class="form-control"><option>Predio</option></select></div>
                        <div class="col"><input type="text" class="form-control" placeholder=""></div>
                    </div>
                
                    <!-- Checkbox -->
                    <div class="mb-3" style="margin-top: 45px;">
                        <label style="color: #005b96; font-weight: 500;">
                            <input type="checkbox" class="form-check-input me-2" disabled> No pude parametrizar mi dirección
                        </label>
                    </div>
                
                    <!-- Dirección final -->
                    <div class="mb-3" style="margin-top: 45px;">
                        <input type="text" class="form-control" placeholder="Dirección" disabled>
                    </div>
                </div>
                              
                <div class="modal-footer" style="display: flex; margin: 85px 400px 0 0;">
                    <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; left: 0;" onclick="add_err();">ACEPTAR</button>
                    <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; left: 0;" data-bs-dismiss="modal" id="btn-modal-ps4error">MAPA</button>
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
                        <p>098 - La validación de cobertura de la dirección FTTC arroja tipo de distancia XX, no es posible continuar</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="left: 0;" onclick="habladorText('Ahora podras apreciar que se ha añadido nuestra nueva dioorreccion, pero que esta no cuenta con covertura, deberas seleccionarla, dando click en el boton blanco y luego deberas CERRAR LA INTERACCION, por medio del boton AZUL.');">ACEPTAR</button>
                    </div>
                </div>
            </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-can">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
              <h5 class="modal-title">MOTIVO DE CANCELACIÓN</h5>
            </div>
            <div class="modal-body">
              <!-- Motivo de Cancelación -->
              <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Motivo Cancelación <span style="color: red;">*</span></label>
                <select class="form-control">
                  <option>Sin Cobertura</option>
                </select>
              </div>
      
              <!-- Submotivo de Cancelación -->
              <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Submotivo Cancelación <span style="color: red;">*</span></label>
                <select class="form-control">
                  <option>Sin cobertura ETB</option>
                </select>
              </div>
      
              <!-- Lugar Sin Cobertura -->
              <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Lugar Sin Cobertura <span style="color: red;">*</span></label>
                <input type="text" class="form-control" value="BOGOTÁ D.C.">
              </div>
      
              <!-- Dirección De Traslado -->
              <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Dirección De Traslado <span style="color: red;">*</span></label>
                <input type="text" class="form-control" value="CL 145 52 78">
              </div>
      
              <!-- Descripción Cancelación -->
              <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Descripción Cancelación <span style="color: red;">*</span></label>
                <textarea class="form-control" rows="2">No hay Cobertura</textarea>
              </div>
            </div>
      
            <div class="modal-footer" style="display: flex; justify-content: space-between;">
                <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; left: 140px;" onclick="location.href='./cretRETENCIONPartII.php'">ACEPTAR</button>
                <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; margin-right: 140px; left: 0px;">CANCELAR</button>
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

    <div class="modal" tabindex="-1" id="modal-fase1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">ESCUELA ETB</h5>
            </div>
            <div class="modal-body">
            <p>Has finalizado con exito el escenario de CREACION DE RETENCION (RETIRAR) del Simulador SUMA, recuerda que siempre esta a tu disposicion y cuentas con intentos ilimitados :)</p>
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
                                    <p style="margin: 5px 5px 20px 5px;">Parece que estas realizando el simulador por fuera de la ESCUELA ETB, te recomendamos hacerlo por medio de la plataforma, 
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
    <script src="../../../../Controller/suma/RETENCION/portalRETENCIONPartVI.js"></script>
    <script src="../../../../Controller/security/RETENCION/anti-cheat-ret7.js"></script> 

    <script>
        habladorText('En este apartado deberas realizar la validación de identidad del cliente en cuestion, esto lo haras por medio del codigo OTP Lisim, el cual sera enviado al numero registrado del cliente, en esta oportunidad no ondaremos demaciado en este, para continuar da click en el boton CERRAR INTERACCIÓN')
    </script>

</body>
</html>