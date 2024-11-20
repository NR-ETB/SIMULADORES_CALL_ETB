$( document ).ready(function() {
    $('#mark1').css('position','static')
    $('#mark1').css('opacity','100')
});;

function valid() {
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        document.getElementById('paso-1').style.display = 'none';
        document.getElementById('paso-2').style.display = 'grid';
        document.getElementById('con-venta-SVA').style.display = 'block';
        document.getElementById('pasoli-1').classList.remove("active");
        document.getElementById('pasoli-1').classList.add("done");
        document.getElementById('pasoli-2').classList.add("active");
    }, 4000);
}

function btn_paso_3() {
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        document.getElementById('paso-2').style.display = 'none';
        document.getElementById('paso-3').style.display = 'grid';
        document.getElementById('pasoli-2').classList.remove("active");
        document.getElementById('pasoli-2').classList.add("done");
        document.getElementById('pasoli-3').classList.add("active");
        document.getElementById('pasoli-1').classList.remove("active");
        document.getElementById('pasoli-1').classList.add("done");
    }, 4000);
}

function btn_paso_4() {

    var textarea = document.getElementById('fech');
    
    if (textarea.value === '12/08/2024') {
        $('#modal-loading').modal('toggle');
        setTimeout(() => {
            $('#modal-loading').modal('hide');
            document.getElementById('paso-3').style.display = 'none';
            document.getElementById('paso-4').style.display = 'grid';
            document.getElementById('pasoli-3').classList.remove("active");
            document.getElementById('pasoli-3').classList.add("done");
            document.getElementById('pasoli-4').classList.add("active");
            habladorText('Para continuar presiona Siguiente.');
        }, 4000);
    }else{
        console.log('Fecha Desconocida o Incorrecta')
    }

}

function btn_paso_5() {
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        document.getElementById('paso-4').style.display = 'none';
        document.getElementById('paso-5').style.display = 'grid';
        document.getElementById('pasoli-4').classList.remove("active");
        document.getElementById('pasoli-4').classList.add("done");
        document.getElementById('pasoli-5').classList.add("active");
    }, 4000);   
}

function btn_paso_6() {
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        document.getElementById('paso-5').style.display = 'none';
        document.getElementById('paso-6').style.display = 'grid';
        document.getElementById('pasoli-5').classList.remove("active");
        document.getElementById('pasoli-5').classList.add("done");
        document.getElementById('pasoli-6').classList.add("active");
    }, 4000);   
}

function btn_modal_8() {
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        $('#paso8').modal('toggle');
    }, 4000); 
}

function btn_fase() {
    $('#modal-loading').modal('toggle')
    $('#paso8').modal('hide');
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#modal-fase1').modal('toggle')
            document.getElementById('pasoli-6').classList.remove("active");
            document.getElementById('pasoli-6').classList.add("done");
            document.getElementById('pasoli-7').classList.add("active");
        });
      }, "4000");
}

let clickCount = 0;

function sig() {
    clickCount++;
    
    if (clickCount === 1) {
        // Primer clic
        $('#bundle1').css('opacity', '50%');
        $('#bundle2').css('opacity', '100%'); // Asegúrate de usar '100%' en lugar de '100'
        $('#b1').prop('checked', false);
        $('#b2').prop('checked', true);
    } else if (clickCount === 2) {
        // Segundo clic
        $('#bundle3').css('opacity', '100'); // Si necesitas cambiar el opacity del bundle1, ajusta esto
        $('#bundle2').css('display', 'none'); // Oculta el bundle2
        $('#bundle3').css('display', 'block'); // Muestra el bundle3
        $('#b3').prop('checked', true);
        $('#b2').prop('checked', false);
        $('#b1').prop('checked', false);

        // Resetear el contador para que la función vuelva a su estado inicial en el siguiente clic
        clickCount = 0;
    }
}

function ant() {
    $('#bundle1').css('opacity','100');
    $('#bundle2').css('opacity','50%');
    $('#bundle3').css('opacity','50%');
    $('#b1').prop('checked', true);  
    $('#b2').prop('checked', false);
    $('#b3').prop('checked', false);
}

function play1() {
    $('#bundle1').css('display','none'); 
    $('#bundle2').css('display','none'); 
    $('#bundle3').css('display','none'); 
    $('#bundle4').css('display','block'); 
    $('#bundle4').css('opacity','100');
    $('#bundle4').css('bottom','273px');
    $('#sa').css('display','none'); 
}

function play2() {
    $('#bundle1').css('display','block'); 
    $('#bundle2').css('display','block'); 
    $('#bundle3').css('display','none');
    $('#bundle4').css('display','none');  
    $('#bundle1').css('opacity','100');
    $('#bundle2').css('opacity','50%');
    $('#sa').css('display','none');
    $('#b1').prop('checked', true); 
}

function play3() {
    $('#bundle1').css('display','none'); 
    $('#bundle2').css('display','none'); 
    $('#bundle3').css('display','block');
    $('#bundle4').css('display','none'); 
    $('#bundle3').css('opacity','100'); 
    $('#bundle3').css('bottom','273px');
    $('#sa').css('display','none'); 
}

function cancel(){
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        $('#cancel').modal('toggle');
    }, 4000); 
}

function sicancel() {
    location.href='./portalSVAS.php';
}

function nocancel() {
    $('#cancel').modal('hide');
}

function btn_or() {

    $('#modal-loading').modal('toggle');
    $('#modal-or').modal('toggle');
    $('#modal-or').css('z-index','0');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        $('#modal-or').css('z-index','1060');
    }, 4000);

}

function btn_comp() {
    $('#tab-comp').modal('toggle');
}






