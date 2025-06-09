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
                    <a href="#" class="item-bread">Traslado (TRAS)</a>
            </div>
            <div class="acon-main-pasos">
                <div class="con-pasos sw-main sw-theme-arrows" id="smartwizard">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="nav-item active" id="pasoli-1"><a class="nav-link">Paso 1<br><small>Datos Contacto</small></a></li>
                        <li class="nav-item" id="pasoli-2"><a class="nav-link">Paso 2<br><small>Direccion Nueva</small></a></li>
                        <li class="nav-item" id="pasoli-3"><a class="nav-link">Paso 3<br><small>Pre Oferta</small></a></li>
                        <li class="nav-item" id="pasoli-4"><a class="nav-link">Paso 4<br><small>Valoración Cliente</small></a></li>
                        <li class="nav-item" id="pasoli-5"><a class="nav-link">Paso 5<br><small>Validación Confronta</small></a></li>
                        <li class="nav-item" id="pasoli-6"><a class="nav-link">Paso 6<br><small>Confirmación de Plan</small></a></li>
                        <li class="nav-item" id="pasoli-7"><a class="nav-link">Paso 7<br><small>Datos Adicionales</small></a></li>
                        <li class="nav-item" id="pasoli-8"><a class="nav-link">Paso 8<br><small>Agendamiento</small></a></li>
                        <li class="nav-item" id="pasoli-9"><a class="nav-link">Paso 9<br><small>Finalizar</small></a></li>
                        <li class="nav-item nav-item-alert"><a class="nav-link">
                            <img src="../../../images/speaker.png" alt="parlante-audio-etb" class="img-audio" id="img-list-paso-a" onclick="alertAudio('au-list-rete', 'img-list-paso-a')" style="margin-left: 20px;">
                            <audio id="au-list-rete" controls class="audio" style="display: none;">
                                <source type="audio/wav" src="../../../../Model/audioSuma/reten/reten7.mp3">
                            </audio>
                        </a></li>   
                    </ul>
                </div>
                
                <!-- Paso 1 -->
                <div class="paso-1" id="paso-1" >

                        <div style="display: flex; margin: 80px 645px;">
                            <input type="checkbox" style="margin-right: 10px;"><p style="color: var(--orange-etb); margin-top: 17px;">El titular de la linea realizara el tramite</p>
                        </div>

                        <div class="con-btn-paso-2">
                            <div class="mar">
                                <button id="btn-paso-3" onclick="valid(),habladorText('Ahora da click al botón NUEVA DIRECCION');">SIGUIENTE >></button>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Paso 1 -->

                    <!-- Paso 2 -->
                    <div class="paso" id="paso-2" >

                    <div>
                        <div class="table-product" id="con-sopo-inter">
                            <div class="con-table2">
                                <table class="table-general table-sopor table-produc" style="margin: 50px 0 20px 80px; width: 90%;">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>Departamento</th>
                                            <th>Ciudad</th>
                                            <th>Dirección</th>
                                            <th>Estrato</th>
                                            <th>Tecnología</th>
                                            <th>Cobertura</th>
                                            <th>Zona</th>
                                            <th>Localidad</th>
                                            <th>Borrar</th>
                                            <th>Selección</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <tr class="row-bl">
                                            <td>BOGOTA</td>
                                            <td>BOGOTA D.C.</td>
                                            <td>KR 68C 168 95 DG 2 AP 1602</td>
                                            <td>6</td>
                                            <td>FTTH</td>
                                            <td>MOLECULA.FTO32</td>
                                            <td>TOBERIN</td>
                                            <td>USAQUEN</td>
                                            <td style="color: grey;">Existente</td>
                                            <td>⚪</td>
                                        </tr>
                                        <tr>
                                            <td>BOGOTA</td>
                                            <td>BOGOTA D.C.</td>
                                            <td>CL 94 52 77</td>
                                            <td>6</td>
                                            <td>FTTH</td>
                                            <td>MOLECULA.FTO31</td>
                                            <td>TOBERIN</td>
                                            <td>SUBA</td>
                                            <td id="flew5" style="color: grey; display: none;">Existente</td>
                                            <td id="flew6" style="color: #F36F31;">Borrar</td>
                                            <td id="flew7" style="display: 	none;">⚪</td>
                                            <td id="flew8">🟠</td>
                                        </tr>
                                        <tbody id="direction" style="text-align: center; display: none;">
                                            <tr class="row-bl">
                                                <td>BOGOTA</td>
                                                <td>BOGOTA D.C.</td>
                                                <td>CL 145 52 78</td>
                                                <td>3</td>
                                                <td>FTTH</td>
                                                <td>MOLECULA.FTO33</td>
                                                <td>TOBERIN</td>
                                                <td>USAQUEN</td>
                                                <td id="flew1" style="color: grey;">Existente</td>
                                                <td id="flew2" style="color: #F36F31; display: none;">Borrar</td>
                                                <td id="flew3" onclick="btn_flew();">⚪</td>
                                                <td id="flew4" style="color: grey; display: none;">🟠</td>
                                            </tr>
                                    </tbody>
                                </table>       
                                
                        </div>  

                        <img id="arrow_3" src="../../../images/images-suma/arrow2.png" alt="" style="position: relative; left: 1475px; margin-left: 15px; width: 40px; height: 40px; animation: shakeY 2s infinite; display: none;">

                        <div id="btn-comp" class="btn-flot" onclick="habladorText('Aquí podrás apreciar, la diferencia entre el plan actual del cliente y el Seleccionado');" style="width: 280px; z-index: 1030;">
                            COMPARACIÓN DE PLANES
                        </div>

                        <div id="btn-comp" class="btn-flot" onclick="habladorText('Aquí podrás apreciar, una sencilla comparación de los SVAs que al cliente se le han adicionado o retirado');" style="width: 280px; background-color: #20A4CB; margin-left: 400px;">
                            COMPARACIÓN DE SVAs
                        </div>

                        <div class="con-btn-paso-2" style="display: flex;">
                            <img id="arrow_1" src="../../../images/images-suma/arrow3.png" alt="" style="margin-left: 15px; width: 40px; height: 40px; animation: shake 2s infinite;">
                            <button onclick="new_dir(),habladorText('Ingresa el departamento BOGOTA, Selecciona la ciudad BOGOTA D.C y da click en la casilla de Dirección de Instalación');">Nueva Direccion</button>
                        </div>
                    </div>

                        <a onclick="btn_or();" style="color: var(--orange-etb); position: relative; bottom: 30px; left: 700px;"><u>Ver Resumen de Compra</u></a> 

                        <div class="con-btn-paso-2" style="display: flex; position: relative; bottom: 30px;"> 
                        <img id="arrow_2" src="../../../images/images-suma/arrow3.png" alt="" style="margin-left: 15px; width: 40px; height: 40px; animation: shake 2s infinite; display: none;">
                        <button id="btn_can" style="background-color: #20A4CB;">CERRAR INTERACCIÓN</button>
                        <button id="btn_can2" onclick="cancel(),habladorText('En este modal el ASESOR, debe de ingresar el motivo y detalles pertinentes del CIERRE DE LA INTERACCION, para continuar presiona en CONTINUARs');" style="background-color: #20A4CB; display: none;">CERRAR INTERACCIÓN</button>
                        <button>SIGUIENTE >></button>
                    </div>
                </div>
                    <!-- Paso 2 -->

                </div>
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
                            <button id="direccion" class="form-control" style="border: 1px solid #ccc; border: 1px solid #ccc; left: 0; width: 285px; background-color: #fff;" onclick="add_dir(),habladorText('En las casillas con bordes anaranjados, deberás ingresar, la dirección CALLE 145 52 78, luego de esto dar en ACEPTAR');"></button>
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-modal-ps4error" style="left: 0;" onclick="habladorText('Ahora podrás apreciar que se ha añadido nuestra nueva dirección, pero que esta no cuenta con cobertura, deberás seleccionarla, dando click en el botón blanco y luego deberás CERRAR LA INTERACCION, por medio del botón AZUL.');">ACEPTAR</button>
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
                <select id="mo" class="form-control" onchange="cancel2();">
                    <option value="0">Seleccione una Opcion</option>
                    <option value="0">Error de Herramienta</option>
                    <option value="0">Error Direccíon</option>
                    <option value="0">Contacto Fallido</option>
                    <option value="0">Cliente Abandonado</option>
                    <option value="1">Sin Cobertura</option>
                </select>
              </div>
      
              <!-- Submotivo de Cancelación -->
              <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Submotivo Cancelación <span style="color: red;">*</span></label>
                <select class="form-control">
                  <option></option>
                </select>
              </div>
      
              <!-- Descripción Cancelación -->
              <div class="mb-3">
                <label style="color: #F36F31; font-weight: bold;">Descripción Cancelación <span style="color: red;">*</span></label>
                <textarea class="form-control" rows="2"></textarea>
              </div>
            </div>
      
            <div class="modal-footer" style="display: flex; justify-content: space-between;">
                <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; left: 140px;">ACEPTAR</button>
                <button type="button" class="btn" style="background-color: #F36F31; color: white; font-weight: bold; margin-right: 140px; left: 0px;">CANCELAR</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal modal-success-sim" tabindex="-1" id="modal-can2">
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
                    <option value="">Sin Cobertura</option>
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
                <textarea class="form-control" rows="2"></textarea>
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
    <script src="../../../../Controller/suma/RETENCION/portalRETENCIONPartII.js"></script>
    <script src="../../../../Controller/security/RETENCION/anti-cheat-ret12.js"></script> 

    <script>
        habladorText('Continua con el paso a paso, siguiendo las indicaciones, selecciona la casilla y luego da click en SIGUIENTE, para continuar')
    </script>

</body>
</html>