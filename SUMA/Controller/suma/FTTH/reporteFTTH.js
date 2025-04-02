$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
});
setTimeout(() => {
    $( document ).ready(function() {  
        $('#modal-loading').modal('hide')
        alert("DataTables warning: table id=tableHC - Cannot reinitialise DataTable.\n" + " For more information about this error, please see https://datatables.net/tn/3")
    });
  }, "4000");

$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
});
setTimeout(() => {
    $( document ).ready(function() {  
        $('#modal-loading').modal('hide')
        $('#modal-exito-solucionado4').modal('toggle')
    });
}, "4000");

function port2(){
    $( document ).ready(function() {
        $('#modal-loading').modal('toggle')
        $('#modal-exito-solucionado4').css('z-index','100')
    });
    setTimeout(() => {
        $( document ).ready(function() {  
            $('#modal-loading').modal('hide')
            location.href='./portalFTTHPartII.php'
        });
      }, "4000");
}