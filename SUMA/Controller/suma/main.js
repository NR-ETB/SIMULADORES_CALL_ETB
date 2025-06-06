let idAudioRepro = 0;
let audios = [
    ["En este espacio debemos ingresar el usuario asignado y la contraseña correspondiente","a"], // Login 0
    ['En soporte de primer nivel, podremos realizar soporte en línea, lo cual ejecuta actividades, evitando el escalamiento a otras áreas. Tengamos en cuenta que un semáforo en rojo significa debemos ejecutar consultas y acciones según el producto, sí, se encuentra color verde, significa que los servicios están normalizados', 
    'Aquí encontrarás los datos del cliente como teléfono, nombre del cliente, estado de la cuenta de facturación y estado de cuenta de servicio', 
    'Aquí se encuentra la información del inventario: Equipos Instalados, Tecnología, Central, etc. A su vez, él tiene la posibilidad de ejecutar ciertas acciones en la parte inferior', 
    'Se identifica de color rojo con el icono de peligro, al dar click sobre este, podremos obtener información sobre los equipos NAP en el perímetro, con el objetivo de identificar si existe una falla masiva no reportada', 
    'Se identifica de color azul, al dar click sobre este puede visualizar algunas imágenes sobre el equipo instalado', 
    'Se identifica de color naranja, en este se encuentra acciones en el menú que se desplegará en la parte inferior del botón, y se efectuarán dando click sobre estas opciones. Algunas de las acciones son "Reset de Modem", "Reinicio de fábrica", "Reaprovisionar servicios", los cuales refrescarán los semáforos de infraestructura de acceso', 
    'Aquí se encuentra la información de la línea telefónica, en donde se encontrará los parámetros, los estados y el servicio con el que cuenta el cliente, A su vez, él tiene la posibilidad de ejecutar ciertas acciones en la parte inferior', 
    'Línea telefónica cuenta con algunas consultas tales como ‘Validad Conectividad’ y ‘transferencia inmediata’, las cuales brindan información acerca de la calidad del servicio', 
    'Se identifica de color naranja, en este se encuentra acciones en el menú que se desplegará en la parte inferior del botón, y se efectuarán dando click sobre estas opciones. Algunas de las acciones son "Normalizar los servicios", "Reset el # de teléfono configurado en el Modem", etc.', 
    'Aquí se encuentra la información sobre el servicio de televisión, en donde se encontrará los parámetros, los estados y el servicio con el que cuenta el cliente, A su vez, él tiene la posibilidad de ejecutar ciertas acciones en la parte inferior', 
    'Cuenta con algunas acciones como "Normalizar el estado susbcriber ID", "Reset de la clave parental" y reaprovisionar los servicios de televisión, esto refrescará y normalizará los servicios.',
    'Aquí se encuentra la información sobre el servicio de Internet, en donde se encontrará los parámetros, los estados y el servicio con el que cuenta el cliente, A su vez, él Técnico tiene la posibilidad de ejecutar ciertas acciones y consultas que se encuentran en la parte inferior.',
    'El módulo Internet cuenta con algunas consultas tales como “Nombre red WIFI” y “Estado de red WIFI”, etc.',
    'Cuenta con algunas acciones como "Normalizar usuario de Navegación", "Normalizar velocidades" etc.',
    'Aquí se encuentra la información sobre la ONT, en donde se encontrará los parámetros, los estados y el servicio con el que cuenta el cliente, A su vez, él tiene la posibilidad de ejecutar ciertas acciones y consultas que se encuentran en la parte inferior.',
    'Ajustes WIFI ONT, cuenta con algunas consultas tales como “Equipos conectados” y “ALEPO”, etc.',
    'Cuenta con algunas acciones como "Cambiar tipo de encriptación, "Cambiar estado WIFI" etc.'
    ], // ? Soporte Eficiente 1
    ['Se muestran los datos del cliente', 
    'Se muestra la información referente al producto contratado',
    'Se muestra la información sobre el soporte que se va a brindar',
    'Se muestra la información referente a la factura del servicio',
    'Se muestra la información de la pqr si está creada y si no, se muestra un formulario para crear la pqr',
    'Se da click en la lupa para ver los solicitantes disponibles',
    'Se verifica todos los datos del solicitante y luego se da click en editar',
    'Se verifica todos los datos y se actualiza cualquier dato necesario, se autoriza el manejo de los datos y se da click en guardar',
    'Se da click al botón después de completar todo el formulario y tener el solicitante para crear la pqr',
    'Aquí se encuentra la información de la pqr que se acabó de crear'
    ]
]

let audioR = false;
function alertAudio(idAudio, idimg, array, textE){

    idAudio = document.getElementById(idAudio);

    if(!audioR){
        idAudio.play();
        idAudio.currentTime = 0;
        idAudioRepro = idAudio;
        audioR = !audioR;

        cambioParlanteE(idimg);
        $(idAudio).one('ended', desaparecerHablador);
    }else{
        // alert('pausar audio')
        idAudioRepro.pause();
        idAudioRepro.currentTime = 0;
        idAudioRepro = idAudio;
        idAudio.play()
        cambioParlanteE(idimg)
        $(idAudio).one('ended', desaparecerHablador)
    }
    hablador(array, textE)

}
function desaparecerHablador(){
    setTimeout(() => {
        $('#alert-flotante').removeClass("etb-flotant-active");
    }, 2000);
}
function ocultarHablador(){
    $('#alert-flotante').removeClass("etb-flotant-active").hide();
    $('#alert-flotante2').removeClass("etb-flotant-active").hide();
    $('#alert-flotante3').removeClass("etb-flotant-active").hide();
    $('#text-msg-hab').html(''); // Borra completamente el contenido

    if (window.typedInstance) {
        window.typedInstance.destroy();
    }
}
/*
function hablador(array, textE) {
    // clearInterval(efectuarTexto); // (Si estaba en uso, se descomenta para detener un intervalo previo)
    
    // $('#text-msg-hab').empty(); // Borra el contenido previo del elemento con id "text-msg-hab"
    // $('#alert-flotante').addClass("etb-flotant-active"); // Agrega la clase para activar el hablador

    // document.getElementById('mensaje-parlante').style.display = "block"; // Muestra el elemento "mensaje-parlante"
    // $('#mensaje-parlante').addClass('msg-waite'); // Agrega la clase para mostrar animación de espera

    /*
    // Temporizador para simular una espera antes de mostrar el texto
    efectuarTexto = setTimeout(() => {
        $('#mensaje-parlante').removeClass('msg-waite'); // Elimina la animación de espera
        let textoFinal = dividirText(audios[array][textE]); // Divide el texto del audio seleccionado

        var typed = new Typed('#text-msg-hab', {
            strings: textoFinal, // Texto a mostrar
            typeSpeed: 30, // Velocidad de escritura
        });
    }, 700);
    */
//}

function habladorText(text) {

    if (window.typedInstance) {
        window.typedInstance.destroy();
    }
    // Muestra el hablador
    $('#alert-flotante').addClass("etb-flotant-active").show();
    document.getElementById('mensaje-parlante').style.display = "block";
    $('#mensaje-parlante').addClass('msg-waite');
    
    setTimeout(() => {
        $('#mensaje-parlante').removeClass('msg-waite');
        let textoFinal = dividirText(text);
        console.log(textoFinal);
        
        // Guarda la instancia de Typed para poder destruirla después
        window.typedInstance = new Typed('#text-msg-hab', {
            strings: textoFinal,
            typeSpeed: 120,
        });
    }, 700);
}

function habladorText2(text) {
   // Muestra el hablador
    $('#alert-flotante2').addClass("etb-flotant-active").show();
    document.getElementById('mensaje-parlante2').style.display = "block";
    $('#mensaje-parlante2').addClass('msg-waite');

    setTimeout(() => {
        $('#mensaje-parlante2').removeClass('msg-waite');
        let textoFinal = dividirText2(text);
        console.log(textoFinal);

        // Guarda la referencia a la instancia de Typed para poder destruirla después
        window.typedInstance2 = new Typed('#text-msg-hab2', {
            strings: textoFinal,
            typeSpeed: 1,
        });
    }, 700);
}

function habladorText3(text) {

    if (window.typedInstance) {
        window.typedInstance.destroy();
    }
    // Muestra el hablador
    $('#alert-flotante3').addClass("etb-flotant-active").show();
    document.getElementById('mensaje-parlante3').style.display = "block";
    $('#mensaje-parlante3').addClass('msg-waite');
    
    setTimeout(() => {
        $('#mensaje-parlante3').removeClass('msg-waite');
        let textoFinal = dividirText3(text);
        console.log(textoFinal);
        
        // Guarda la instancia de Typed para poder destruirla después
        window.typedInstance = new Typed('#text-msg-hab3', {
            strings: textoFinal,
            typeSpeed: 120,
        });
    }, 700);
}

function cambioParlanteE(idimg){
    document.getElementById(idimg).src = "../../../images/speaker2.png";
    document.getElementById(idimg).style.animation = 'none';
}

function dividirText(textoInicial){
    let lengthText = textoInicial.length;
    let texto = textoInicial;
    let contador = 1;
    let textoFinal = [];
    let posicion = 0;
    let tempText = '';

    for(let i = 0; i < lengthText; i++){
        if(contador >= 250){
            if(texto.charAt(i) != ' '){
                tempText = tempText + texto.charAt(i);
            }else{
                tempText = tempText + texto.charAt(i);
                textoFinal[posicion] = tempText;
                
                posicion = posicion + 1;
                contador = 0; 
                tempText = '';
            }
        }else if(i == (lengthText - 1)){
            
            tempText = tempText + texto.charAt(i);
            textoFinal[posicion] = tempText;

            posicion = posicion + 1;
            contador = 0; 
            tempText = '';

        }else{
            tempText = tempText + texto.charAt(i);
        }

        contador = contador + 1;
    }   

    return textoFinal;
}

function dividirText2(textoInicial){
    let lengthText = textoInicial.length;
    let texto = textoInicial;
    let contador = 1;
    let textoFinal = [];
    let posicion = 0;
    let tempText = '';

    for(let i = 0; i < lengthText; i++){
        if(contador >= 1200){
            if(texto.charAt(i) != ' '){
                tempText = tempText + texto.charAt(i);
            }else{
                tempText = tempText + texto.charAt(i);
                textoFinal[posicion] = tempText;
                
                posicion = posicion + 1;
                contador = 0; 
                tempText = '';
            }
        }else if(i == (lengthText - 1)){
            
            tempText = tempText + texto.charAt(i);
            textoFinal[posicion] = tempText;

            posicion = posicion + 1;
            contador = 0; 
            tempText = '';

        }else{
            tempText = tempText + texto.charAt(i);
        }

        contador = contador + 1;
    }   

    return textoFinal;
}

function dividirText3(textoInicial){
    let lengthText = textoInicial.length;
    let texto = textoInicial;
    let contador = 1;
    let textoFinal = [];
    let posicion = 0;
    let tempText = '';

    for(let i = 0; i < lengthText; i++){
        if(contador >= 100){
            if(texto.charAt(i) != ' '){
                tempText = tempText + texto.charAt(i);
            }else{
                tempText = tempText + texto.charAt(i);
                textoFinal[posicion] = tempText;
                
                posicion = posicion + 1;
                contador = 0; 
                tempText = '';
            }
        }else if(i == (lengthText - 1)){
            
            tempText = tempText + texto.charAt(i);
            textoFinal[posicion] = tempText;

            posicion = posicion + 1;
            contador = 0; 
            tempText = '';

        }else{
            tempText = tempText + texto.charAt(i);
        }

        contador = contador + 1;
    }   

    return textoFinal;
}

function verificacionlenght(textarea){
    if(textarea.value.length >= 1 && textarea.value != '' && textarea.value != ' '){
        return true;
    }else{
        return false;
    }
}
function verificacionlenghtCondi(textarea, minimo, maximo){
    if(textarea.value.length >= minimo && textarea.value != '' && textarea.value != ' ' && textarea.value.length < maximo){
        return true;
    }else{
        return false;
    }
}
var sidebarActive = false; // Variable para mantener el estado de la barra lateral

function sidebar() {
    if (!sidebarActive) { // Si la barra lateral no está activa
        // Activar la barra lateral
        $('#ull').css('display','block');
        $('#btn-sid').css('opacity','100');
        $('#ite1').css('margin-top','220px');
        $('#item2').css('margin-top','220px');
        $('#ite3').css('margin-top','220px');
        $('#ite4').css('margin-top','220px');
        $('#ite5').css('margin-top','220px');
        $('#ite6').css('margin-top','220px');
        sidebarActive = true; // Cambiar el estado a activo
    } else {
        // Desactivar la barra lateral
        $('#ull').css('display','none');
        $('#btn-sid').css('opacity','0');
        $('#ite1').css('margin-top','0');
        $('#item2').css('margin-top','0');
        $('#ite3').css('margin-top','0');
        $('#ite4').css('margin-top','0');
        $('#ite5').css('margin-top','0');
        $('#ite6').css('margin-top','0');
        sidebarActive = false; // Cambiar el estado a inactivo
    }
}

function sidebar2() {
    if (!sidebarActive) { // Si la barra lateral no está activa
        // Activar la barra lateral
        $('#ull2').css('display','block');
        $('#btn-sid2').css('opacity','100');
        $('#mark1').css('display','none');
        $('#mark2').css('display','none');
        sidebarActive = true; // Cambiar el estado a activo
    } else {
        // Desactivar la barra lateral
        $('#ull2').css('display','none');
        $('#btn-sid2').css('opacity','0');
        $('#mark1').css('display','block');
        $('#mark2').css('display','block');
        sidebarActive = false; // Cambiar el estado a inactivo
    }
}

function sidebar3(){
    if (!sidebarActive) { // Si la barra lateral no está activa
        // Activar la barra lateral
        $('#ull3').css('display','block');
        $('#btn-sid3').css('opacity','100');
        $('#ite11').css('margin-top','300px');
        $('#ite1').css('margin-top','300px');
        $('#item2').css('margin-top','300px');
        $('#ite3').css('margin-top','300px');
        $('#ite4').css('margin-top','300px');
        $('#ite5').css('margin-top','300px');
        $('#ite6').css('margin-top','300px');
        $('#mark1').css('display','none');
        $('#mark2').css('display','none');
        sidebarActive = true; // Cambiar el estado a activo
    } else {
        // Desactivar la barra lateral
        $('#ull3').css('display','none');
        $('#btn-sid3').css('opacity','0');
        $('#ite11').css('margin-top','0');
        $('#ite1').css('margin-top','0');
        $('#item2').css('margin-top','0');
        $('#ite3').css('margin-top','0');
        $('#ite4').css('margin-top','0');
        $('#ite5').css('margin-top','0');
        $('#ite6').css('margin-top','0');
        $('#mark1').css('display','block');
        $('#mark2').css('display','block');
        sidebarActive = false; // Cambiar el estado a inactivo
    }
}

function cftth() {
    location.href='./consultarpqrFTTH.php'
}
function cfttc() {
    location.href='./consultarpqrFTTC.php'
}
function cfalla() {
    location.href='./consultarpqrFALLA.php'
}

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var today = new Date();
    var monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var tomorrow = new Date(today); // Copia la fecha de hoy
    tomorrow.setDate(tomorrow.getDate() + 1); // Suma un día
    var totomorrow = new Date(today); // Copia la fecha de hoy
    totomorrow.setDate(totomorrow.getDate() + 2); // Suma dos días
    var currentMonth = today.getMonth();
    var currentYear = today.getFullYear();

    renderCalendar(currentMonth, currentYear);

    function renderCalendar(month, year) {
      var daysInMonth = new Date(year, month + 1, 0).getDate();
      var firstDayOfMonth = new Date(year, month, 1).getDay();

      var table = '<table>';
      table += '<div style="display: inline-flex;"> <button onclick="bef();" style="background-color: transparent; border: none;"><img style="height: 25px; width: 25px;" src="../../../images/images-suma/calendarbtn2.png" alt=""></button> <p>' + monthNames[month]+ " " + currentYear+'</p> <button onclick="aft();" style="background-color: transparent; border: none;"><img style="height: 25px; width: 25px;  position: relative; left: 138px;" src="../../../images/images-suma/calendarbtn.png" alt=""></button> </div>';
      table += '<thead><tr><th>Do</th><th>Lu</th><th>Ma</th><th>Mi</th><th>Ju</th><th>Vi</th><th>Sa</th></tr></thead>';
      table += '<tbody>';

      var date = 1;
      for (var i = 0; i < 6; i++) {
        table += '<tr>';
        for (var j = 0; j < 7; j++) {
          if (i === 0 && j < firstDayOfMonth) {
            table += '<td></td>';
          } else if (date > daysInMonth) {
            table += '<td></td>';
          } else {
            var currentDate = new Date(year, month, date);
            var cellClass = currentDate.toDateString() === today.toDateString() ? 'today' : '';
            var cellClass2 = currentDate.toDateString() === tomorrow.toDateString() ? 'tomorrow' : '';
            var cellClass3 = currentDate.toDateString() === totomorrow.toDateString() ? 'totomorrow' : '';
            // Verifica si el día actual es sábado o domingo
            if (j === 6 || j === 0) {
              table += '<td onclick="fech(this)">' + date + '</td>'; // No aplica clase para sábados (6) o domingos (0)
              // Verifica si el día actual es lunes (1) a jueves (4)
            } else if(j === 1 || j === 2 || j === 3 || j === 4 || j === 5) {
              if (cellClass || cellClass2 || cellClass3) {
                table += '<td  onclick="fech(this)" class="' + cellClass + ' ' + cellClass2 + ' ' + cellClass3 + '">' + date + '</td>';
              } else {
                table += '<td onclick="fech(this)">' + date + '</td>';
              }
            }            
            date++;
          }
        }
        table += '</tr>';
      }

      table += '</tbody></table>';

      calendarEl.innerHTML = table;
    }

    window.bef = function() {
        currentMonth--; // Disminuye el valor del mes actual
        if (currentMonth < 0) { // Si el mes es menor que cero, retrocede al año anterior y establece el mes a diciembre
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear); // Renderiza el calendario con el nuevo mes 
    }

    window.aft = function() {
        currentMonth++; // Aumenta el valor del mes actual
        if (currentMonth > 11) { // Si el mes es mayor que once, avanza al año siguiente y establece el mes a enero
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear); // Renderiza el calendario con el nuevo mes
    }

});

function detail() {

    $('#modal-produc').modal('toggle') 

}

function detail2() {

    $('#modal-produc').modal('toggle') 

}

function ley() {
    $('#modal-ley').modal('hide')
    $('#modal-ley2').modal('toggle')  
}

function ley2() {
    $('#modal-ley2').modal('hide')  
    $('#modal-ley3').modal('toggle')   
}

function ley3() {
    $('#modal-ley3').modal('hide')
}

function autori() {
    $('#modal-leyfase2').modal('toggle')      
}

function lf1() {
    $('#df-11').css('display','block')
    $('#df-21').css('display','none')
    $('#df-31').css('display','none')
    $('#df-41').css('display','none')
}

function lf2() {
    $('#df-11').css('display','none')
    $('#df-21').css('display','block')
    $('#df-31').css('display','none')
    $('#df-41').css('display','none')
}

function lf3() {
    $('#df-11').css('display','none')
    $('#df-21').css('display','none')
    $('#df-31').css('display','block')
    $('#df-41').css('display','none')
}

function lf4() {
    $('#df-11').css('display','none')
    $('#df-21').css('display','none')
    $('#df-31').css('display','none')
    $('#df-41').css('display','block')
}

function menu_1() {
    $('#menu1').css('display','none')
    $('#menu2').css('display','block')    
    $('#rett').css('display','block')    
}

function menu_2() {
    $('#menu1').css('display','none')
    $('#menu3').css('display','block')
    $('#rett').css('display','block')            
}

function menu_3() {
    $('#menu2').css('display','none')
    $('#menu3').css('display','none')
    $('#menu1').css('display','block')
    $('#rett').css('display','none')            
}

function u() {
    // Obtener el contenedor actual que está visible
    var contenedorActual = document.querySelector('div[id^="paso-"]:not([style*="display: none"])');
    if (!contenedorActual) {
        console.error('No se encontró el contenedor actual visible.');
        return;
    }

    // Obtener el número del paso actual desde el ID del contenedor
    var numeroPasoActual = parseInt(contenedorActual.id.replace('paso-', ''), 10);
    if (isNaN(numeroPasoActual) || numeroPasoActual <= 1) {
        console.warn('No hay un paso anterior disponible.');
        return;
    }

    // Construir el ID del contenedor anterior
    var idPasoAnterior = 'paso-' + (numeroPasoActual - 1);
    var contenedorAnterior = document.getElementById(idPasoAnterior);
    if (!contenedorAnterior) {
        console.error('No se encontró el contenedor anterior.');
        return;
    }

    // Ocultar el contenedor actual y mostrar el anterior
    contenedorActual.style.display = 'none';
    contenedorAnterior.style.display = 'block';

    // Gestionar la clase 'active' en los elementos 'pasoli-'
    var idPasoSoliActual = 'pasoli-' + numeroPasoActual;
    var idPasoSoliAnterior = 'pasoli-' + (numeroPasoActual - 1);

    var pasoSoliActual = document.getElementById(idPasoSoliActual);
    var pasoSoliAnterior = document.getElementById(idPasoSoliAnterior);

    if (pasoSoliActual) {
        pasoSoliActual.classList.remove('active');
    } else {
        console.warn(`No se encontró el elemento con ID ${idPasoSoliActual}.`);
    }

    if (pasoSoliAnterior) {
        pasoSoliAnterior.classList.add('active');
        pasoSoliAnterior.classList.remove('done');
    } else {
        console.warn(`No se encontró el elemento con ID ${idPasoSoliAnterior}.`);
    }
}