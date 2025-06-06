let idAudioRepro = 0;

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
    $('#alert-flotante').removeClass("etb-flotant-active");
    $('#alert-flotante2').removeClass("etb-flotant-active");
}
function hablador(array, textE){
    // clearInterval(efectuarTexto);
    $('#text-msg-hab').empty();
    $('#alert-flotante').addClass("etb-flotant-active");

    document.getElementById('mensaje-parlante').style.display = "block";
    $('#mensaje-parlante').addClass('msg-waite');
    efectuarTexto = setTimeout(() => {
        $('#mensaje-parlante').removeClass('msg-waite');
        let textoFinal = dividirText(audios[array][textE])

        var typed = new Typed('#text-msg-hab', {
            strings: textoFinal,
            typeSpeed: 30,
        });
    }, 700);
}

function habladorText(text){
    $('#text-msg-hab').empty();
    $('#alert-flotante').addClass("etb-flotant-active");
    document.getElementById('mensaje-parlante').style.display = "block";
    $('#mensaje-parlante').addClass('msg-waite');

    setTimeout(() => {
        $('#mensaje-parlante').removeClass('msg-waite');
        let textoFinal = dividirText(text)
        console.log(textoFinal);

        var typed = new Typed('#text-msg-hab', {
            strings: textoFinal,
            typeSpeed: 120,
        });
    }, 700);
}

function habladorText2(text){
    $('#text-msg-hab2').empty();
    $('#alert-flotante2').addClass("etb-flotant-active");
    document.getElementById('mensaje-parlante2').style.display = "block";
    $('#mensaje-parlante2').addClass('msg-waite');

    setTimeout(() => {
        $('#mensaje-parlante2').removeClass('msg-waite');
        let textoFinal = dividirText2(text)
        console.log(textoFinal);

        var typed = new Typed('#text-msg-hab2', {
            strings: textoFinal,
            typeSpeed: 1,
        });
    }, 700);

}

function cambioParlanteE(idimg){
    document.getElementById(idimg).src = "../../images/icons/speaker.png";
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
        if(contador >= 150){
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


