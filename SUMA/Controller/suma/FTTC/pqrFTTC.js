$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
    });
    setTimeout(() => {
    $( document ).ready(function() {
        $('#modal-loading').modal('hide')
        $('#modal-spqr').modal('toggle') 
    });
}, "4000");

function toggleDisplay() {
    var select = document.getElementById("oest");
    var tdSelect = document.getElementById("ges");
    var tdSelect2 = document.getElementById("est");
    var tdDisplay = document.getElementById("ges2");
    var tdDisplay2 = document.getElementById("est2");
    var btn1 = document.getElementById("btn_cpqr");
    var btn2 = document.getElementById("btn_cpqr2");

    if (select.value === "1") {
        tdSelect.style.display = "none";
        tdSelect2.style.display = "none";
        tdDisplay.style.display = "table-cell";
        tdDisplay2.style.display = "table-cell";
        btn1.style.display = "none";
        btn2.style.display = "table-cell";
       } else {
        alert("vales monda")
    }
}

function error_pqr() {
    $('#modal-epqr').modal('toggle')    
}

function error_pqr2() {
    $('#modal-epqr').modal('toggle')    
}

function no_error_pqr() {
    location.href='consultarpqrFTTHPartII.php';  
}

function btn_pqr3() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
    $( document ).ready(function() {
        $('#modal-loading').modal('hide')
        $('#modal-fase1').modal('toggle')
    });
    }, "4000");

} 

function bus() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#bus1').css('display','none')
            $('#bus2').css('display','none')
            $('#bus3').css('display','none')
            $('#bus4').css('display','none')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}