$( document ).ready(function() {
    $('#fle').css('display','block') 
});

function mod() {
    $( document ).ready(function() {
        $('#m-four').css('display','none')  
        $('#me-four').css('display','block')   
        $('#back').css('display','none') 
    });
    setTimeout(() => {
        $( document ).ready(function() {
            $('#fle').css('display','none')
            $('#fle2').css('display','block')
            $('#me-four').css('display','none') 
            $('#back2').css('display','block')
            $('#comma').css('display','flex')
            $('#cent2').css('background-color','var(--b3gray-etb)') 
            $('#cent').css('background-color','var(--bblue-etb)') 
            $('#cent').css('cursor','pointer') 
            $('#cent').css('color','var(--withe-etb)') 
            $('#cent2').css('overflow-y','auto') 
        });
    }, "3000");      
}

function mod2() {

    var v = document.getElementById('te').value.trim();

    if (v === "show interfaces descriptions | match PIPECI1063870") {
        $('#fle2').css('display','none')
        $('#fle3').css('display','block')
        $('#te').prop('disabled', true);
        $('#comma2').css('display','block') 
        $('#comma3').css('display','flex')
        habladorText('Veras que con este comando busca y se conecta al servidor, ahora ingresa el comando ping 10.248.128.194 source 10.248.128.193 interface xe-8/2/1.11081')
    }else{
        alert("Unknown Command")
    }

}

function mod3() {

    var vv = document.getElementById('te2').value.trim();

    if (vv === "ping 10.248.128.194 source 10.248.128.193 interface xe-8/2/1.11081") {
        $('#fle3').css('display','none')
        $('#fle4').css('display','block')
        $('#te2').prop('disabled', true);
        $('#comma4').css('display','block') 
        $('#comma5').css('display','flex')
        habladorText('Dirigete a la parte superior izquierda de la interfaz, da click en el boton con icono de libro azul')
    }else{
        alert("Unknown Command")
    }

}

function mod4() {
    $('#fle4').css('display','none')
    $('#fle5').css('display','block')
    $('#cent').css('background-color','var(--b3gray-etb)') 
    $('#cent').css('color','var(--black-etb)') 
    $('#cent2').css('background-color','var(--withe-etb)')
    $('#back2').css('display','none')
    $('#terminal').css('display','none')
    $('#back').css('display','block')
    $('#m-six').css('display','block')  
}

function mod5() {
    $('#fle5').css('display','none')
    $('#fle6').css('display','block')
    $('#fle7').css('display','block')
    $('#mo-eight').css('display','block')
    $('#back').css('display','none')
}

function mod6() {
    $( document ).ready(function() {
        $('#fle6').css('display','none')
        $('#fle7').css('display','none')
        $('#mo-eight').css('display','none')
        $('#m-six').css('display','none')
        $('#me-four').css('display','block')   
        $('#back').css('display','none') 
    });
    setTimeout(() => {
        $( document ).ready(function() {
            $('#fle8').css('display','block')
            $('#me-four').css('display','none') 
            $('#m-six2').css('display','block')
            $('#back').css('display','block') 
        });
    }, "3000");      
}

function mod7() {
    $('#fle8').css('display','none')
    $('#fle9').css('display','block')
    $('#m-six2').css('display','none')
    $('#back').css('display','block')
    $('#back').css('top','0px')
    $('#comma6').css('display','block')
    $('#comma8').css('display','block')
    $('#comma9').css('display','flex')
}

function mod9() {

    var vvv = document.getElementById('te4').value.trim();

    if (vvv === "display vlan 2453") {
        $('#fle9').css('display','none')
        $('#fle10').css('display','block')
        $('#te4').prop('disabled', true);
        $('#comma10').css('display','block')
        $('#comma11').css('display','flex')
        habladorText('Por ultimo, salto red metro donde Se puede identificar las gigas operativas o caídas y tiempo de funcionamiento, ademas que podras acceder a la vlan, por medio del comando display vlan 2453')
    }else{
        alert("Unknown Command")
    }
}

function mod10() {

    var vvvv = document.getElementById('te5').value.trim();

    if (vvvv === "display current-configuration interface gigabitethernet") {
        $('#fle10').css('display','none')
        $('#fle11').css('display','block')
        $('#te5').prop('disabled', true);
        $('#comma12').css('display','block')
        $('#comma13').css('display','flex')
        habladorText('Estado de anillo, se identifica si esta en protection o idle ejecutando el comando establecido: display current-configuration interface gigabitethernet')
    }else{
        alert("Unknown Command")
    }
}

function mod11() {

    var vvvvv = document.getElementById('te6').value.trim();

    if (vvvvv === "display mac-address GigabitEthernet 1/1/13") {
        $('#fle11').css('display','none')
        $('#fle12').css('display','block')
        $('#te6').prop('disabled', true);
        $('#comma14').css('display','block')
        $('#comma15').css('display','flex')
        $('#jake').css('display','none')  
        $('#finn').css('display','block')
        habladorText('Se identifican servicios operativos por vlan para este caso “110 o 145”, por medio del comando: display mac-address GigabitEthernet 1/1/13')
    }else{
        alert("Unknown Command")
    }
}