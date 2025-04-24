$( document ).ready(function() {
    $('#modal-err').modal('toggle')
});

function cancel() {
    $('#modal-can').modal('toggle')     
}

function btn_end() {

    $('#modal-loading').modal('toggle')
    $('#modal-can').modal('hide')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#modal-fase1').modal('toggle');
        });
    }, "4000");
  
}
