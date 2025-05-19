$( document ).ready(function() {
    $('#modal-fase').modal('toggle')
});

function dates(){

    $('#modal-fase').modal('hide')
    $('#modal-dates').modal('toggle')

}

let search = document.getElementById('search');
search.addEventListener('click', () =>{
    console.log('si');
    let table_search = document.getElementById('table_search');
    table_search.style.display = 'block';
})

let estadoInputs = false;
function verificarUser() {

    var docType = document.getElementById('tip').value;
    var numDoc = document.getElementById('num_doc').value; 
    var numCox = document.getElementById('num_conex').value; 
    var numCue = document.getElementById('cuenta_fact').value; 


    if (docType !== '0' && numDoc.trim() !== '' || numCox.trim() !== '' || numCue.trim() !== '') {

        if (docType === '1' && numDoc === '1000652458' || numCox === '60120354851' || numCue === '1111') {

            $('#modal-loading').modal('toggle');

            setTimeout(() => {
                $('#modal-loading').modal('hide');
                $('#modal-dates').modal('toggle')
                habladorText('En este escenario no sera obligatoria esta validacion de ley, presiona en "NO REGISTRAR"')
            }, 4000); 

        } else {

            $('#modal-err').modal('show');
        }
    } else {

        $('#modal-err').modal('show');
    }
}

function dates2(){

    $('#modal-dates').modal('hide')
    document.getElementById('seccion').style.display = "grid";
    document.getElementById('table').style.display = "grid";
    document.getElementById('eyes').style.display = "grid";
    document.getElementById('age').style.display = "block";
    $('#modal-ley').modal('toggle') 

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

    $( document ).ready(function() {
        $('#modal-falla').modal('hide')
        $('#modal-loading').modal('toggle')
    });
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#modal-fase1').modal('toggle')
        });
      }, "4000");

}

function btn_report() {
    window.location.href = "./reportarFallaFTTC.php";
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

function btn_vis() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-pqr').modal('toggle')
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

function consul() {

    var con = true;

    if (con == true) {
        location.href='./consultarpqrFTTC.php'
    } else {
        alert("ERROR, ERROR")
    }
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




