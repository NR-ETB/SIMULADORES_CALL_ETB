$( document ).ready(function() {
    $('#modal-err').modal('toggle')
});

function cancel() {
    $('#modal-can').modal('toggle')     
}

function cancel2() {

    let v = document.getElementById('mo').value;

    if (v === "1") {
        $('#modal-loading').modal('toggle');
        setTimeout(() => {
            $('#modal-loading').modal('hide');
            $('#modal-can').modal('toggle');
            $('#modal-can2').modal('toggle');
            habladorText('Ahora deberás ingresar una descripción, para la cancelación en este caso será PRUEBA SIMULADOR SUMA, luego da click en ACEPTAR para FINALIZAR')
        }, 2000);
    }else{
        habladorText('Selecciona el motivo VALIDACIÓN CLIENTE - CIERRE POR DEFECTO, para CONTINUAR')
    }

}

function btn_end() {

    $('#modal-loading').modal('toggle')
    $('#modal-can2').modal('hide')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#modal-fase1').modal('toggle');
        });
    }, "4000");
  
}
