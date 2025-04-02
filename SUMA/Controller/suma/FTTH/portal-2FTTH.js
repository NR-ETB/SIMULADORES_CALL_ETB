function btn_visita() {
    $( document ).ready(function() {
        $('#modal-visita').modal('toggle')
    }); 
}

let search = document.getElementById('search');
search.addEventListener('click', () =>{
    console.log('si');
    let table_search = document.getElementById('table_search');
    table_search.style.display = 'block';
})

function btn_falla() {
    $( document ).ready(function() {
        $('#modal-falla').modal('toggle')
    });
}

function btn_of() {
    $( document ).ready(function() {
        $('#modal-falla').modal('hide')
    });
}

function btn_report() {
    $( document ).ready(function() {
        window.location.href = "./reportarFalla.php";
    });
}

let estadoInputs = false;
function verificarUser(){

    var men = document.getElementById('menu');

    if(document.getElementById('tip').value == "#" ){//&& document.getElementById('num_doc').value == 1000652458
            $( document ).ready(function() {
                $('#modal-loading').modal('toggle')
            });
            setTimeout(() => {
                $( document ).ready(function() {
                    $('#modal-loading').modal('hide')
                    document.getElementById('seccion').style.display = "grid";
                    document.getElementById('table').style.display = "grid";
                    document.getElementById('eyes').style.display = "grid";
                    document.getElementById('age').style.display = "block";
                });
              }, "4000");
    }else{
        $('#modal-err').modal('show');
    }
} 

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