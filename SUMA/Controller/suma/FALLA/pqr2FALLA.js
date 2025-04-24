$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
    });
    setTimeout(() => {
    $( document ).ready(function() {
        $('#modal-loading').modal('hide')
        $('#modal-spqr').modal('toggle') 
    });
}, "4000");

function btn_pqr3() {
    location.href='portalFALLAPartIII.php';
} 