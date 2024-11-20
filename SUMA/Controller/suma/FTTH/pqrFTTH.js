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
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

function bus() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

function bus() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

function bus() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

function bus2() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#abi3').css('display','none')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

function bus3() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#abi3').css('display','none')
            $('#abi4').css('display','none')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

function bus4() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#abi3').css('display','none')
            $('#abi4').css('display','none')
            $('#abi5').css('display','none')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

function bus5() {

    var b = document.getElementById('buss').value;

    if (b === "MDM-PQR-38440789") {
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#abi3').css('display','none')
            $('#abi4').css('display','none')
            $('#abi5').css('display','none')
            $('#abi6').css('display','none')
        });
        }, "4000");    
    }else{
        console.log("PQR NO ENCONTRADA")
    }

}

var abi3Tds; // Variable global para almacenar los td

function tabac5() {
    // Seleccionar los td dentro del elemento con id "abi3" si aún no se han seleccionado
    if (!abi3Tds) {
        abi3Tds = document.querySelectorAll('#abi3 td');
    }
    
    // Cambiar el color de los td dentro del elemento con id "abi2"
    for (var j = 0; j < abi3Tds.length; j++) {
        abi3Tds[j].style.backgroundColor = "#ffaa70"; // Cambia el color a verde, puedes modificarlo según lo necesites
    }
}

var df3Shown = false;
function tabac6() {
    if (!df3Shown) {
        var df3 = document.getElementById('df3');
        df3.style.display = "table-row";
        df3Shown = true;
        
        // Llama a la función para cambiar los colores
        tabac5();
    } else {
        // Si ya se mostraron los elementos df3, revertir los cambios
        for (var j = 0; j < abi3Tds.length; j++) {
            abi3Tds[j].style.backgroundColor = ''; // Revertir el color a su valor por defecto
        }
        df3Shown = false;
        var df3 = document.getElementById('df3');
        df3.style.display = "none";
    }
}

var abi4Tds; // Variable global para almacenar los td

function tabac7() {
    // Seleccionar los td dentro del elemento con id "abi3" si aún no se han seleccionado
    if (!abi4Tds) {
        abi4Tds = document.querySelectorAll('#abi4 td');
    }
    
    // Cambiar el color de los td dentro del elemento con id "abi2"
    for (var j = 0; j < abi4Tds.length; j++) {
        abi4Tds[j].style.backgroundColor = "#ffaa70"; // Cambia el color a verde, puedes modificarlo según lo necesites
    }
}

var df4Shown = false;
function tabac8() {
    if (!df4Shown) {
        var df4 = document.getElementById('df4');
        df4.style.display = "table-row";
        df4Shown = true;
        
        // Llama a la función para cambiar los colores
        tabac7();
    } else {
        // Si ya se mostraron los elementos df4, revertir los cambios
        for (var j = 0; j < abi4Tds.length; j++) {
            abi4Tds[j].style.backgroundColor = ''; // Revertir el color a su valor por defecto
        }
        df4Shown = false;
        var df4 = document.getElementById('df4');
        df4.style.display = "none";
    }
}

var df5Shown = false;
function tabac9() {
    if (!df5Shown) {
        var df5 = document.getElementById('df5');
        df5.style.display = "table-row";
        df5Shown = true;
        
        // Llama a la función para cambiar los colores
        tabac10();
    } else {
        // Si ya se mostraron los elementos df5, revertir los cambios
        for (var j = 0; j < abi5Tds.length; j++) {
            abi5Tds[j].style.backgroundColor = ''; // Revertir el color a su valor por defecto
        }
        df5Shown = false;
        var df5 = document.getElementById('df5');
        df5.style.display = "none";
    }
}

var abi5Tds; // Variable global para almacenar los td

function tabac10() {
    // Seleccionar los td dentro del elemento con id "abi3" si aún no se han seleccionado
    if (!abi5Tds) {
        abi5Tds = document.querySelectorAll('#abi5 td');
    }
    
    // Cambiar el color de los td dentro del elemento con id "abi2"
    for (var j = 0; j < abi5Tds.length; j++) {
        abi5Tds[j].style.backgroundColor = "#ffaa70"; // Cambia el color a verde, puedes modificarlo según lo necesites
    }
}

var df6Shown = false;
function tabac11() {
    if (!df6Shown) {
        var df6 = document.getElementById('df6');
        df6.style.display = "table-row";
        df6Shown = true;
        
        // Llama a la función para cambiar los colores
        tabac12();
    } else {
        // Si ya se mostraron los elementos df6, revertir los cambios
        for (var j = 0; j < abi6Tds.length; j++) {
            abi6Tds[j].style.backgroundColor = ''; // Revertir el color a su valor por defecto
        }
        df6Shown = false;
        var df6 = document.getElementById('df6');
        df6.style.display = "none";
    }
}

var abi6Tds; // Variable global para almacenar los td

function tabac12() {
    // Seleccionar los td dentro del elemento con id "abi3" si aún no se han seleccionado
    if (!abi6Tds) {
        abi6Tds = document.querySelectorAll('#abi6 td');
    }
    
    // Cambiar el color de los td dentro del elemento con id "abi2"
    for (var j = 0; j < abi6Tds.length; j++) {
        abi6Tds[j].style.backgroundColor = "#ffaa70"; // Cambia el color a verde, puedes modificarlo según lo necesites
    }
}

var df7Shown = false;

function tabac13() {
    if (!df7Shown) {
        var df7 = document.getElementById('df7');
        df7.style.display = "table-row";
        df7Shown = true;
        
        // Llama a la función para cambiar los colores
        tabac14();
    } else {
        // Si ya se mostraron los elementos df7, revertir los cambios
        for (var j = 0; j < abi7Tds.length; j++) {
            abi7Tds[j].style.backgroundColor = ''; // Revertir el color a su valor por defecto
        }
        df7Shown = false;
        var df7 = document.getElementById('df7');
        df7.style.display = "none";
    }
}

var abi7Tds; // Variable global para almacenar los td

function tabac14() {
    // Seleccionar los td dentro del elemento con id "abi3" si aún no se han seleccionado
    if (!abi7Tds) {
        abi7Tds = document.querySelectorAll('#abi7 td');
    }
    
    // Cambiar el color de los td dentro del elemento con id "abi2"
    for (var j = 0; j < abi7Tds.length; j++) {
        abi7Tds[j].style.backgroundColor = "#ffaa70"; // Cambia el color a verde, puedes modificarlo según lo necesites
    }
}