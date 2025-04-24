<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/pqr.css">
    <link rel="stylesheet" href="../../../css/mainSuma.css">
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
                    <span>VIVIAN ALVARADO</span>
                </div>
                <div>
                    <label for="">Cedula de Ciudadania</label>
                    <span>1000748526</span>
                </div>
                <div>
                    <label for="">Id PQR</label>
                    <span style="color: #000;">MDM-PQR-3939230</span>
                </div>
            </div>

            <div class="usuario" style="margin-bottom: 100px; margin-left: 35px;">
                <div>
                    <label for="">Linea:</label>
                    <span style="color: #000;">6013195421013</span>
                </div>
                <div>
                    <label for="">Cuenta de Facturacion:</label>
                    <span style="color: #000;">22222222222 </span>
                </div>
                <div>
                    <label for="">ID Servicio:</label>
                    <span style="color: #000;">CS-449854</span>
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
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio_com/gcs11.mp3">
                                </audio>
                            </span>

                            
                            <select name="solicitante" id="search-soli" readonly="readonly" class="solicitante-search" style="background-color: #c0c0c0; width: 735px; margin-bottom: 20px;">
                                <option id="cun-rel" value="0"></option>
                                <option id="cun-rel2" value="1" style="display: none;">VIVIAN ALVARADO</option>
                            </select>
                            <button type="button" onclick="btn_datos3();" id="search"><i class="fa-solid fa-magnifying-glass"></i></button>

                            <script>

                            document.addEventListener("DOMContentLoaded", function() {
                                // Arreglo con la información del formulario
                                let datosFormulario = [{
                                    tipoDocumento: "CE",
                                    numeroDocumento: "1000652458",
                                    nombres: "VIVIAN",
                                    apellidos: "ALVARADO",
                                    telefonoFijo: "2045786",
                                    celular: "6013195421013",
                                    email: "vivi@email.com",
                                    direccion: "Calle 4D #45 a 28",
                                    autorizacionDatos: "Si"
                                }];

                                // Función para actualizar la tabla con los datos del formulario
                                function actualizarTabla() {
                                    // Seleccionar la fila donde se mostrarán los datos del formulario
                                    const fila = document.querySelector("#table-datos #fila-datos");

                                    // Seleccionar solo las celdas de datos (td) en la fila
                                    const celdas = fila.querySelectorAll("td");

                                    // Asignar valores a las celdas de la fila
                                    celdas[0].textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos; // Solicitante
                                    celdas[1].textContent = datosFormulario[0].numeroDocumento; // Numero Documento
                                    celdas[2].textContent = datosFormulario[0].tipoDocumento; // Tipo Documento
                                    celdas[3].textContent = datosFormulario[0].telefonoFijo; // Telefono Solicitante
                                    celdas[4].textContent = datosFormulario[0].celular; // Celular
                                    celdas[5].textContent = datosFormulario[0].email; // Email
                                    celdas[6].textContent = datosFormulario[0].direccion; // Direccion
                                }

                                // Actualizar la tabla con los datos iniciales del formulario
                                actualizarTabla();
                                    // Función para manejar el evento de cambio en los campos del formulario
                                    function manejarCambio(event) {
                                        const campo = event.target; // Campo que ha cambiado
                                        const valor = campo.value; // Nuevo valor del campo

                                        // Actualizar los datos del formulario según el campo que ha cambiado
                                        switch (campo.id) {
                                            case "nombres":
                                                datosFormulario[0].nombres = valor;
                                                break;
                                            case "apellidos":
                                                datosFormulario[0].apellidos = valor;
                                                break;
                                            case "telefonoFijo":
                                                datosFormulario[0].telefonoFijo = valor;
                                                break;
                                            case "celular":
                                                datosFormulario[0].celular = valor;
                                                break;
                                            case "email":
                                                datosFormulario[0].email = valor;
                                                break;
                                        }

                                        // Actualizar la tabla con los nuevos datos del formulario
                                        actualizarTabla();
                                    }

                                    // Obtener los campos del formulario
                                    const nombresInput = document.getElementById("nombres");
                                    const apellidosInput = document.getElementById("apellidos");
                                    const telefonoFijoInput = document.getElementById("telefonoFijo");
                                    const celularInput = document.getElementById("celular");
                                    const emailInput = document.getElementById("email");

                                    // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                                    nombresInput.addEventListener("change", manejarCambio);
                                    apellidosInput.addEventListener("change", manejarCambio);
                                    telefonoFijoInput.addEventListener("change", manejarCambio);
                                    celularInput.addEventListener("change", manejarCambio);
                                    emailInput.addEventListener("change", manejarCambio);

                                    // Actualizar la tabla con los datos iniciales del formulario
                                    actualizarTabla();
                                });

                            </script>

                            <div class="table-solui2" id="table-datos" style="display: none;">
                                <table class="table-general table-sopor" id="loop2" style="width: 200px;">
                                    <tr>
                                        <th>Solicitante</th>
                                        <th>Numero Documento</th>
                                        <th>Tipo Documento</th>
                                        <th>Telefono Solicitante</th>
                                        <th>Celular</th>
                                        <th>Email</th>
                                        <th>Direccion</th>
                                        <th>Acción</th>
                                    </tr>
                                    <tr class="row-bl" id="fila-datos" onclick="tabac();">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td onclick="datos();" id="datos" style="color: #FF5E00; cursor: pointer;">Editar</td>
                                    </tr>
                                </table>
                                <button class="btn_clasic" id="btn-solucion3" onclick="datos2();">Crear Contacto</button>
                            </div>  

                            <label for="">Descripcion</label>
                            <textarea name="descripcion" id="" cols="30" rows="3" style="margin-bottom: 20px; border-color: #f26821;" disabled>Falla masiva en uno o varios servicios del sector predeterminado.
                            </textarea>

                            <label for="">Clase<span style="margin-left: 725px; color: #ff5c5c;">*</span></label>

                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="1">PETICIÓN</option>
                                </select>
                            </span>

                            <label for="">Motivo<span style="margin-left: 718px; color: #ff5c5c;">*</span></label>
                            <span>
                                <select name="motivo" id="" style="margin-bottom: 20px;">
                                    <option value="1">INFORMACION Y/O DOCUMENTACION</option>
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
                                    <option value="1">DIGITAL</option>
                                </select>
                            </span>

                            <label for="">Subcanal<span style="margin-left: 695px; color: #ff5c5c;">*</span></label>
                            <span>
                                <select name="sub" id="sub" style="margin-bottom: 20px; border-color: #f26821;">
                                    <option value="0">Seleccione...</option>
                                    <option value="1">RED CADE</option>
                                    <option value="2">REGIONALES</option>
                                    <option value="3">TELEFONICO</option>
                                    <option value="4">AREA DE APOYO</option>
                                </select>
                            </span>

                            <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                                <label for="btn-adj">Adjunto Solucion</label>
                                <input type="file" name="btn-adj" id="" style="display: none;">
                            </div>
                            
                            <label for="">Descripcion<span style="margin-left: 1480px; color: #ff5c5c;">*</span></label>
                            <textarea name="" id="" style="margin-bottom: 20px; border-color: #f26821; width: 1572px; height: 100px;"></textarea>
                            
                            <div style="border: 2px solid #f26821; border-radius: 10px; width: 1572px; height: 300px; margin-bottom: 20px;">

                                <label for="" style="margin-top: 60px; display: flex; margin-left: 200px;">¿Requiere Ajuste?<span style="margin-left: 160px; color: #ff5c5c;">*</span></label>
                                <span>
                                    <select name="clase" id="" style="margin-bottom: 20px; width: 300px; height: 45px; display: flex; margin-left: 200px;">
                                        <option value="0">Seleccione...</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </span>

                                <label for="" style="display: flex; position: relative; left: 1000px; bottom: 100px;">¿Requiere Pedido?<span style="margin-left: 155px; color: #ff5c5c;">*</span></label>
                                <span>
                                    <select name="motivo" id="" style="width: 300px; height: 45px; display: flex; position: relative; left: 1000px; bottom: 100px;">
                                        <option value="0">Seleccione...</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </span>

                                <label for="" style="margin-top: 60px; display: flex; margin-left: 200px; position: relative; bottom: 100px;">¿Requiere Instancia Administrativa?<span style="margin-left: 15px; color: #ff5c5c;">*</span></label>
                                <span>
                                    <select name="motivo" id="" style="margin-bottom: 20px; width: 300px; height: 45px; display: flex; margin-left: 200px; bottom: 100px;">
                                        <option value="1">SI</option>
                                    </select>
                                </span>

                            </div>

                            <label for="">Codigo Back</label>
                            <span>
                                <select name="causal" id="" style="margin-bottom: 20px;">
                                    <option value="1">Seleccione...</option>
                                </select>
                            </span>

                        </form>

                        <form style="position: relative; left: 800px; bottom: 1275px;">

                            <label for="">Causal</label>
                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="1">INFORMACION</option>
                                </select>
                            </span>

                            <label for="">Sintomas</label>
                            <span>
                                <select name="clase" id="" style="margin-bottom: 20px;">
                                    <option value="1">FALLA MASIVA</option>
                                </select>
                            </span>

                            <label for="">Accion a Seguir</label>
                            <textarea name="descripcion" id="" cols="30" rows="3" style="margin-bottom: 20px; border-color: #f26821;">Ingresar la peticion, de la falla tecnica para ver si existe o no falla masiva y reclasificar la peticion.
                            </textarea>

                            <label for="">CUN</label>
                                <span>
                                <img src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante" onclick="alertAudio('au_solicitante', 'img_solicitante', 2, 5)">
                                <audio id="au_solicitante" controls class="audio" style="display: none;">
                                    <source type="audio/wav" src="../../../../Model/audioSuma/audio_com/gcs12.mp3">
                                </audio>
                            </span>

                            <select name="solicitante" id="search-soli" readonly="readonly" class="solicitante-search" style="background-color: #c0c0c0; width: 735px; margin-bottom: 20px;">
                                <option id="cun-rel" value="1">4347230001002018</option>
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
                                    <option value="0">LINEA TELEFONICA</option>
                                </select>
                            </span>

                            <label for="">Punto<span style="margin-left: 730px; color: #ff5c5c;">*</span></label>
                            <span>
                                <select name="motivo" id="" style="margin-bottom: 20px;">
                                    <option value="1">CALL CENTER</option>
                                </select>
                            </span>

                            <label for="">Originada Por</label>
                            <span><input type="text" name="relacion" id="inputValor" value="" style="margin-bottom: 105px; width: 489px;" disabled ></span>
                            <span class="select-relacion">
                                <select name="producto" id="prod" onchange="pro();">
                                    <option value="0">NINGUNO</option>
                                </select>
                            </span>

                            <input value="Crear" onclick="btn_pqr2();" class="crear-pqr">
                            <img style="position: relative; top: 385px;" src="../../../images/speaker2.png" alt="parlante-audio-etb" class="img-audio" id="img_solicitante_fn" onclick="alertAudio('au_solicitante_fn', 'img_solicitante_fn', 2, 8)">       
                            <audio id="au_solicitante_fn" controls class="audio" style="display: none;">
                                <source type="audio/wav" src="../../../../Model/audioSuma/audio_com/gcs13.mp3">
                            </audio>

                        </form>

                    </div>
                </div>

                <div class="modal fade" id="modal-soluic3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Contenido del modal -->
                            <div class="modal-body">

                                <script>

                                    document.addEventListener("DOMContentLoaded", function() {

                                        // Arreglo con la información del formulario
                                        let datosFormulario = [{
                                            tipoDocumento: "CE",
                                            numeroDocumento: "1000652458",
                                            nombres: "VIVIAN",
                                            apellidos: "ALVARADO",
                                            telefonoFijo: "2045786",
                                            celular: "6013195421013",
                                            email: "vivi@email.com",
                                            direccion: "Calle 4D #45 a 28",
                                            autorizacionDatos: "Si"
                                        }];

                                        const tipoDocumentoInput = document.getElementById("tipoDocumento");
                                        const numeroDocumentoInput = document.getElementById("numeroDocumento");
                                        const nombresInput = document.getElementById("nombres");
                                        const apellidosInput = document.getElementById("apellidos");
                                        const telefonoFijoInput = document.getElementById("telefonoFijo");
                                        const celularInput = document.getElementById("celular");
                                        const emailInput = document.getElementById("email");
                                        const direccionInput = document.getElementById("direccion");
                                        const autorizacionDatosSelect = document.getElementById("autorizacionDatos");

                                        // Imprimir datos para verificar
                                        console.log("Tipo de Documento:", datosFormulario[0].tipoDocumento);
                                        console.log("Número de Documento:", datosFormulario[0].numeroDocumento);
                                        console.log("Nombres:", datosFormulario[0].nombres);
                                        console.log("Apellidos:", datosFormulario[0].apellidos);
                                        console.log("Teléfono Fijo:", datosFormulario[0].telefonoFijo);
                                        console.log("Celular:", datosFormulario[0].celular);
                                        console.log("Email:", datosFormulario[0].email);
                                        console.log("Dirección:", datosFormulario[0].direccion);
                                        console.log("Autorización de Datos:", datosFormulario[0].autorizacionDatos);

                                        // Asignar valores a los campos del formulario
                                        tipoDocumentoInput.value = datosFormulario[0].tipoDocumento;
                                        numeroDocumentoInput.value = datosFormulario[0].numeroDocumento;
                                        nombresInput.value = datosFormulario[0].nombres;
                                        apellidosInput.value = datosFormulario[0].apellidos;
                                        telefonoFijoInput.value = datosFormulario[0].telefonoFijo;
                                        celularInput.value = datosFormulario[0].celular;
                                        emailInput.value = datosFormulario[0].email;
                                        direccionInput.value = datosFormulario[0].direccion;
                                        autorizacionDatosSelect.value = datosFormulario[0].autorizacionDatos;

                                        });
                

                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Arreglo con la información del formulario
                                        let datosFormulario = [{
                                            numeroDocumento: "1000652458",
                                            nombres: "VIVIAN",
                                            apellidos: "ALVARADO"
                                        }];

                                        // Función para actualizar los elementos <p> con los datos del formulario
                                        function actualizarDatosEnDiv() {
                                            // Seleccionar los párrafos donde se mostrarán los datos del formulario
                                            const nomCliP = document.getElementById("nomCli3");
                                            const docCliP = document.getElementById("docCli3");

                                            // Asignar valores a los párrafos
                                            nomCliP.textContent = datosFormulario[0].nombres + " " + datosFormulario[0].apellidos;
                                            docCliP.textContent = datosFormulario[0].numeroDocumento;
                                        }

                                        // Función para manejar el evento de cambio en los campos del formulario
                                        function manejarCambio(event) {
                                            const campo = event.target; // Campo que ha cambiado
                                            const valor = campo.value; // Nuevo valor del campo

                                            // Actualizar los datos del formulario según el campo que ha cambiado
                                            switch (campo.id) {
                                                case "nombres":
                                                    datosFormulario[0].nombres = valor;
                                                    break;
                                                case "apellidos":
                                                    datosFormulario[0].apellidos = valor;
                                                    break;
                                                case "numeroDocumento":
                                                    datosFormulario[0].numeroDocumento = valor;
                                                    break;
                                            }

                                            // Actualizar los elementos <p> con los nuevos datos del formulario
                                            actualizarDatosEnDiv();
                                        }

                                        // Obtener los campos del formulario
                                        const nombresInput = document.getElementById("nombres");
                                        const apellidosInput = document.getElementById("apellidos");
                                        const numeroDocumentoInput = document.getElementById("numeroDocumento");

                                        // Escuchar el evento de cambio en los campos del formulario y llamar a la función de manejo
                                        nombresInput.addEventListener("input", manejarCambio);
                                        apellidosInput.addEventListener("input", manejarCambio);
                                        numeroDocumentoInput.addEventListener("input", manejarCambio);

                                        // Actualizar los elementos <p> con los datos iniciales del formulario
                                        actualizarDatosEnDiv();
                                    });

                                </script>

                                <div class="info-u">
                                        <label for="">Cliente</label>
                                        <label for="">Número de Documento</label>   
                                        <p id="nomCli3"></p>
                                        <p id="docCli3"></p>
                                </div>
                    
                                <form>
                                    <input type="number" value="" style="display: none;" name="clientdocu">
                        
                                    <div class="info-u info-repor" style="display: none;">
                                        <label for="">Solución</label>
                                    <textarea name="text-solu" id="" cols="30" rows="10" style="grid-column: 1/4;"></textarea>
                                    
                                    <div class="con-btn-adj" style="grid-column: 4/5; grid-row: 1/3;">
                                        <label for="btn-adj">Adjunto Solucion</label>
                                        <input type="file" name="btn-adj" id="" style="display: none;">
                                    </div>
                                    
                                    <label for="" style="grid-column: 1/3;">Medio de notificación</label>
                                    <select name="optagenda" id="age" style="grid-row: 4/5; grid-column: 1/3;">
                                        <option value="0">SELECCIONE UNA OPCION...</option>
                                        <option value="1">CORREO ELECTRONICO</option>
                                        <option value="2">CORREO ORDINARIO</option>
                                        <option value="3">PRESENCIAL</option>
                                        <option value="4">TELEFONICO</option>
                                        <option value="5">VERBAL / CALL CENTER</option>
                                        <option value="6">VIRTUAL</option>
                                        <option value="7">WHATSAPP</option>
                                    </select>
                        
                                    <label for="" style="grid-column: 3/5;">Email / Dirección/ Teléfono</label>
                                    <textarea name="val_agenda" id="val_agenda" style="grid-column: 3/5;"></textarea>
                                </div>
                                </form>
                    
                                <div class="info-u info-repor">
                                    
                                <ul>

                                    <form action="">

                                        <label for="tipoDocumento" class="label-2">Tipo de Documento</label>
                                        <textarea id="tipoDocumento" cols="30" rows="1" style="background-color: #c0c0c0" disabled></textarea>
                                    
                                        <label for="numeroDocumento" class="label-2">Numero de Documento</label>
                                        <textarea id="numeroDocumento" cols="30" rows="1" style="background-color: #c0c0c0" disabled></textarea>
                                    
                                        <label for="nombres" class="label-2">Nombres</label>
                                        <textarea id="nombres" cols="30" rows="1"></textarea>
                                    
                                        <label for="apellidos" class="label-2">Apellidos</label>
                                        <textarea id="apellidos" cols="30" rows="1"></textarea>
                                    
                                        <label for="telefonoFijo" class="label-2">Telefono Fijo</label>
                                        <textarea id="telefonoFijo" cols="30" rows="1"></textarea>
                                    
                                        <label for="celular" class="label-2">Celular</label>
                                        <textarea id="celular" cols="30" rows="1"></textarea>
                                    
                                        <label for="email" class="label-2">Email</label>
                                        <textarea id="email" cols="30" rows="1"></textarea>
                                    
                                        <label for="direccion" class="label-2">Direccion</label>
                                        <textarea id="direccion" cols="30" rows="1" style="background-color: #c0c0c0" disabled></textarea>
                                    
                                        <label for="autorizacionDatos" class="label-2">Autorizar el manejo 
                                        <br> de datos personales</label> 
                                        <select id="autorizacionDatos" style="background-color: #c0c0c0">
                                            <option value="1" selected>Si</option>
                                        </select>


                                    </form>
                    
                                <div class="table-solui2" id="table-datos" style="display: none;">
                                    <table class="table-general table-sopor" id="loop2" style="width: 400px;">
                                            <tr>
                                                <th>Solicitante</th>
                                                <th>Numero Documento</th>
                                                <th>Tipo Documento</th>
                                                <th>Telefono Solicitante</th>
                                                <th>Celular</th>
                                                <th>Email</th>
                                                <th>Direccion</th>
                                                <th>Acción</th>
                                            </tr>
                                            <tr class="row-bl">
                                                <td>ARMANDO PAREDES</td>
                                                <td>1000652458</td>
                                                <td>CE</td>
                                                <td>20354851</td>
                                                <td>3145216985</td>
                                                <td>arpa@email.com</td>
                                                <td>Calle 3A #41 c 36</td>
                                                <td id="datos" style="color: #FF5E00; cursor: pointer;">Editar</td>
                                            </tr>
                                    </table>
                                    <button class="btn_clasic" id="btn-solucion3">Crear Contacto</button>
                                </div>
                    
                            </div>
                                <button style="background-color: #FF5E00;" class="btn_clasic" id="btn-solucion4" onclick="verificarDT();">Guardar</button>
                                <button class="btn_clasic" id="btn-solucion5" onclick="btn_solucion5()">Cancelar</button>
                            </div>
                        </div>
                    </div>
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

    <div class="modal modal-success-sim" tabindex="-1" id="modal-ace" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INFORMACIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p>Contacto guardado con exito</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="btn_sig2()">ACEPTAR</button>
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
    <script src="../../../../Controller/suma/FALLA/cpqrFALLA.js"></script>
    <script src="../../../../Controller/security/FALLA/anti-cheat-falla3.js"></script>

</body>
</html>