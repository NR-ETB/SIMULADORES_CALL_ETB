$( document ).ready(function() {
    $('#modal-fase').modal('toggle')
});

function dates(){

    $('#modal-fase').modal('hide')
    $('#modal-dates').modal('toggle')

}

var s = false;

function btn_search() {
    if (!s) {
        console.log('si');
        let table_search = document.getElementById('tsearch');
        table_search.style.display = 'block'; 
        let l1 = document.getElementsByClassName('solicitante-search');
        s = true;

        // Iterar sobre cada elemento encontrado
        for (var i = 0; i < l1.length; i++) {
            // Cambiar el color de fondo de cada elemento
            l1[i].style.width = '374px';      
        }

    }else{
        console.log('no');
        let table_search = document.getElementById('tsearch');
        table_search.style.display = 'none'; 
        let l1 = document.getElementsByClassName('solicitante-search');
        s = false;

        // Iterar sobre cada elemento encontrado
        for (var i = 0; i < l1.length; i++) {
            // Cambiar el color de fondo de cada elemento
            l1[i].style.width = '376px'; 
        }

    }
}

let estadoInputs = false;
function verificarUser() {

    var docType = document.getElementById('tip').value;
    var numDoc = document.getElementById('num_doc').value; 
    var numCox = document.getElementById('num_conex').value; 
    var numCue = document.getElementById('cuenta_fact').value; 


    if (docType !== '0' && numDoc.trim() !== '' || numCox.trim() !== '' || numCue.trim() !== '') {

        if (docType === '3' && numDoc === '1000110440' || numCox === '6012078614' || numCue === '3333') {

            $('#modal-loading').modal('toggle');

            setTimeout(() => {
                $('#modal-loading').modal('hide');
                document.getElementById('seccion').style.display = "grid";
                document.getElementById('table').style.display = "grid";
                document.getElementById('eyes').style.display = "grid";
                document.getElementById('age').style.display = "block";
                $('#modal-ley').modal('toggle') 
                habladorText('En este escenario no sera obligatoria esta validacion de ley, presiona en "NO REGISTRAR"')
            }, 4000); 

        } else {

            $('#modal-err').modal('show');
        }
    } else {

        $('#modal-err').modal('show');
    }
}

const reload = document.getElementById("btn-reload");

reload.addEventListener("click", (_) => {
  location.reload();
});

function btn_clear(){
    
    $( document ).ready(function() {
        $('#modal-loading').modal('toggle')
    });
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            document.getElementById('seccion').style.display = "none";
            document.getElementById('table').style.display = "none";
            document.getElementById('eyes').style.display = "none";
            document.getElementById('age').style.display = "none";
        });
      }, "4000");

}

function btn_falla() {
        $('#modal-falla').modal('toggle')
}

function btn_of() {
        $('#modal-falla').modal('hide')
}

function btn_report() {
    window.location.href = "./reportarFallaVISITA.php";
}

function btn_mas() {
    $('#modal-loading').modal('toggle')
setTimeout(() => {
    $( document ).ready(function() {
        $('#modal-masivo').modal('toggle')
        $('#modal-loading').modal('hide')
    });
  }, "4000");
}

function btn_visit() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-visita2').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function btn_vis() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-visita').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function pro() {

    var input = document.getElementById('inputValor');
    var p = document.getElementById("prod").value;

    if (p == 1) {
      input.value = 'INTERNET';
    } else {
      input.value = '';
    }

}

var stats = false;
function tabac() {

    if (!stats) {

        // Obtener todos los elementos td de la tabla
        var tds = document.querySelectorAll('.table-general tbody td');

        // Determinar el número de columnas que deseas resaltar
        var numColumnasDeseadas = 16; // Por ejemplo, resaltar los primeros 3 td

        // Aplicar estilo al fondo de los primeros td
        for (var i = 0; i < tds.length; i++) {
            // Si el índice es menor que el número de columnas que deseas destacar, aplica el estilo
            if (i < numColumnasDeseadas) {
                tds[i].style.backgroundColor = "#ffaa70"; // Color de fondo para los primeros td
            }
        }

        stats = false;
        
    }else{

         // Obtener todos los elementos td de la tabla
         var tds = document.querySelectorAll('.table-general tbody td');

         // Determinar el número de columnas que deseas resaltar
         var numColumnasDeseadas = 16; // Por ejemplo, resaltar los primeros 3 td
        
        // Aplicar estilo al fondo de los primeros td
        for (var i = 0; i < tds.length; i++) {
            // Si el índice es menor que el número de columnas que deseas destacar, aplica el estilo
            if (i < numColumnasDeseadas) {
                tds[i].style.backgroundColor = "#fff"; // Color de fondo para los primeros td
            }
        }

        stats = true;

    }

}

function tabac2() {

    if (!stats) {

        $( document ).ready(function() {
            document.getElementById('df').style.display = "grid";
        });  
        
        stats = true;
        
    }else{

        $( document ).ready(function() {
            document.getElementById('df').style.display = "none";
        });

        stats = false;
    
    }

}

var abi2Tds; // Variable global para almacenar los td

function tabac3() {
    // Seleccionar los td dentro del elemento con id "abi2" si aún no se han seleccionado
    if (!abi2Tds) {
        abi2Tds = document.querySelectorAll('#abi2 td');
    }
    
    // Cambiar el color de los td dentro del elemento con id "abi2"
    for (var j = 0; j < abi2Tds.length; j++) {
        abi2Tds[j].style.backgroundColor = "#ffaa70"; // Cambia el color a verde, puedes modificarlo según lo necesites
    }
}

var df2Shown = false;

function tabac4() {
    if (!df2Shown) {
        var df2 = document.getElementById('df2');
        df2.style.display = "table-row";
        df2Shown = true;
        
        // Llama a la función para cambiar los colores
        tabac3();
    } else {
        // Si ya se mostraron los elementos df3, revertir los cambios
        for (var j = 0; j < abi2Tds.length; j++) {
            abi2Tds[j].style.backgroundColor = ''; // Revertir el color a su valor por defecto
        }
        df2Shown = false;
        var df2 = document.getElementById('df2');
        df2.style.display = "none";
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

function consul() {

    var con = true;

    if (con == true) {
        location.href='./consultarpqrVISITA.php'
    } else {
        alert("ERROR, ERROR")
    }
}

function datos() {
    $('#modal-soluic3').modal('toggle')
    $('#modal-soluic3').css('z-index','1060')
    $('#modal-visita2').modal('hide')
}

function verificarDT(){    
    $( document ).ready(function() {
        $('#modal-ace').modal('toggle')
        $('#modal-soluic3').css('z-index','100')
        $('#fila-datos').css('background-color','rgb(255, 170, 112)')
    });
}

function btn_sig2(){

    var soliNoRel = document.getElementById('sol-no-rel');
    var soliRel = document.getElementById('sol-rel');
    var d = document.getElementById('tsearch');
    var l1 = document.getElementsByClassName('solicitante-search');

    $( document ).ready(function() { 
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
            $( document ).ready(function() {
                $('#modal-loading').modal('hide')
                $('#modal-ace').modal('hide')
                $('#modal-soluic3').modal('hide')
                $('#modal-visita2').modal('toggle')
                soliNoRel.style.display = 'none';
                soliRel.style.display = 'block';
                soliRel.selected = true;
                d.style.display = 'none';
            });
                // Iterar sobre cada elemento encontrado
                for (var i = 0; i < l1.length; i++) {
                    // Cambiar el color de fondo de cada elemento
                    l1[i].style.backgroundColor = '#c0c0c0';
                
                    // Deshabilitar cada elemento
                    l1[i].disabled = true;
                }
          }, "4000"); 
    });
}

function btn_solucion5() {
    $( document ).ready(function() {
        $('#modal-loading').modal('toggle')
        $('#modal-soluic3').css('z-index','100')
        setTimeout(() => {
            $('#modal-loading').modal('hide')
            $('#modal-soluic3').css('display', 'none')
            $('#modal-visita2').modal('toggle')
            $('#modal-visita2').css('display', 'block')
    }, "4000");

    });
}

function btn_solucion3() {

    $('#modal-loading').modal('toggle')
    $('#modal-visita2').css('z-index','100')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#modal-visita2').modal('hide')
            $('#fal1').css('display','none')
            $('#fal2').css('display','block')
            $('#fal3').css('display','none')
        });
      }, "4000"); 

}

function btn_solucion4() {

    $('#modal-loading').modal('toggle')
    $('#modal-falla').css('z-index','100')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#modal-falla').modal('hide')
            $('#modal-fase1').modal('toggle')
        });
      }, "4000"); 

}

function sig() {
    $('#ayu11').css('display','none') 
    $('#ayu12').css('display','none') 
    $('#ayu13').css('display','none') 
    $('#ayu14').css('display','none') 
    $('#ayu15').css('display','none') 
    $('#ayu16').css('display','none')
    $('#ayu17').css('display','none')  
    $('#ayu21').css('display','table-row') 
    $('#ayu22').css('display','table-row') 
    $('#ayu23').css('display','table-row') 
    $('#ayu24').css('display','table-row') 
    $('#ayu25').css('display','table-row') 
    $('#ayu26').css('display','table-row')  
    $('#ayu27').css('display','table-row')  
    $('#ayu33').css('display','none') 
    $('#ayu4').css('display','block') 
    $('#ayu55').css('display','none') 
    $('#ayu6').css('display','block')  
}

function ant() {
    $('#ayu11').css('display','table-row') 
    $('#ayu12').css('display','table-row') 
    $('#ayu13').css('display','table-row') 
    $('#ayu14').css('display','table-row') 
    $('#ayu15').css('display','table-row') 
    $('#ayu16').css('display','table-row') 
    $('#ayu17').css('display','table-row') 
    $('#ayu21').css('display','none') 
    $('#ayu22').css('display','none') 
    $('#ayu23').css('display','none') 
    $('#ayu24').css('display','none') 
    $('#ayu25').css('display','none') 
    $('#ayu26').css('display','none')   
    $('#ayu27').css('display','none') 
    $('#ayu33').css('display','block') 
    $('#ayu4').css('display','none') 
    $('#ayu55').css('display','block') 
    $('#ayu6').css('display','none') 
}

function cam() {
    $('#cambi').css('display','none')
    $('#ocul2').css('display','grid')
    $('#ocul3').css('display','grid')
    $('#ocul4').css('display','grid')
    $('#ocul5').css('display','grid')
    $('#table1').css('margin','0')
    $('#table2').css('top','120px')
    $('#changes1').css('background-color','#868686') 
    $('#changes2').css('background-color','#c3c3c3')   
}

function cam2() {
    $('#cambi').css('display','block')
    $('#ocul2').css('display','none')
    $('#ocul3').css('display','none')
    $('#ocul4').css('display','none')
    $('#ocul5').css('display','none')
    $('#table1').css('margin','80px 0 0 0')
    $('#table2').css('top','180px')
    $('#changes2').css('background-color','#868686')  
    $('#changes1').css('background-color','#c3c3c3')  
}

function cic() {
    $('#modal-cic').modal('toggle')
    $('#modal-produc').css('z-index','0')
}

function cic2() {
    $('#modal-cic').modal('hide')
    $('#modal-produc').css('z-index','1060')
}





