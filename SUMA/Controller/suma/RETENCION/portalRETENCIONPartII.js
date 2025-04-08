$( document ).ready(function() {
    $('#mark1').css('position','static')
    $('#mark1').css('opacity','100')
});

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
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        document.getElementById('paso-3').style.display = 'none';
        document.getElementById('paso-4').style.display = 'grid';
        document.getElementById('pasoli-3').classList.remove("active");
        document.getElementById('pasoli-3').classList.add("done");
        document.getElementById('pasoli-4').classList.add("active");
    }, 4000);   
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

function btn_paso_7() {
    $('#modal-loading').modal('toggle');
    setTimeout(() => {
        $('#modal-loading').modal('hide');
        document.getElementById('paso-6').style.display = 'none';
        document.getElementById('paso-7').style.display = 'grid';
        document.getElementById('pasoli-6').classList.remove("active");
        document.getElementById('pasoli-6').classList.add("done");
        document.getElementById('pasoli-7').classList.add("active");
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
            document.getElementById('pasoli-7').classList.remove("active");
            document.getElementById('pasoli-7').classList.add("done");
            document.getElementById('pasoli-8').classList.add("active");
        });
      }, "4000");
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