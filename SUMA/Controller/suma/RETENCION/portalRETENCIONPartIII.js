document.addEventListener("DOMContentLoaded", function() {
    // Selecciona los elementos
    const motivoSelect = document.getElementById("mot");
    const submotivoSelect = document.getElementById("subm");
    
    // Variables para almacenar los intervalos
    let intervaloMotivo;
    let intervaloSubmotivo;
    
    // Función para hacer parpadear un elemento
    function parpadear(elemento, tipoElemento) {
        // Color naranja
        const colorNaranja = "#F26922";
        // Color original (transparente o el color por defecto)
        const colorOriginal = "";
        
        // Número de parpadeos
        let contador = 0;
        const totalParpadeos = 50;
        
        // Configura el intervalo para el parpadeo
        const intervalo = setInterval(function() {
            // Alterna entre naranja y el color original
            if (contador % 2 === 0) {
                elemento.style.borderColor = colorNaranja;
                elemento.style.borderWidth = "1.5px";
                elemento.style.borderStyle = "solid";
            } else {
                elemento.style.borderColor = colorOriginal;
                elemento.style.borderWidth = "";
                elemento.style.borderStyle = "";
            }
            
            contador++;
            
            // Detiene el parpadeo después de un número específico de cambios
            if (contador >= totalParpadeos * 2) {
                clearInterval(intervalo);
                // Asegura que el borde vuelva a su estado original
                elemento.style.borderColor = colorOriginal;
                elemento.style.borderWidth = "";
                elemento.style.borderStyle = "";
            }
        }, 500); // Cambia cada 500ms (medio segundo)
        
        // Guarda la referencia al intervalo
        if (tipoElemento === "motivo") {
            intervaloMotivo = intervalo;
        } else if (tipoElemento === "submotivo") {
            intervaloSubmotivo = intervalo;
        }
        
        return intervalo;
    }
    
    // Función para detener el parpadeo y restaurar los bordes originales
    function detenerParpadeo(elemento, intervalo) {
        if (intervalo) {
            clearInterval(intervalo);
        }
        // Restaura el estilo original
        elemento.style.borderColor = "";
        elemento.style.borderWidth = "";
        elemento.style.borderStyle = "";
    }
    
    // Inicia el parpadeo para el select de motivos
    intervaloMotivo = parpadear(motivoSelect, "motivo");
    
    // Inicia el parpadeo para el select de submotivos
    intervaloSubmotivo = parpadear(submotivoSelect, "submotivo");
    
    // Agrega listener al cambio de selección
    motivoSelect.addEventListener("change", function() {
        // Detiene el parpadeo del motivo
        detenerParpadeo(motivoSelect, intervaloMotivo);
        // Detiene el parpadeo del submotivo
        detenerParpadeo(submotivoSelect, intervaloSubmotivo);
    });
    
    // También puedes agregar un listener para el submotivo si es necesario
    submotivoSelect.addEventListener("change", function() {
        // Detiene el parpadeo del submotivo
        detenerParpadeo(submotivoSelect, intervaloSubmotivo);
    });
});

function submot() {
       $('#mot').first().change(function() {
        var valor = $(this).val(); // Obtiene el valor seleccionado
        $('[id^=sub]').hide(); // Oculta todos los divs con id que empiezan con "sub"
        $('#sub' + valor).css('display', 'flex'); // Muestra el div correspondiente
    });
}

function pqr() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-pqr').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function ret() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-ret').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function tram() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-tram').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function sup() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-sup').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function prod() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-prod').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function bun() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-bun').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function fat() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-fat').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function prom() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-prom').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function est() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-est').modal('toggle')
            $('#modal-loading').modal('hide')
        });
      }, "4000");
}

function btn_reto() {
    // Obtener los elementos select por su ID
    var selectMotivo = document.getElementById('mot').value;
    var selectSubmotivo = document.getElementById('fall').value;

    // Si ambos selectores tienen la opción '1' seleccionada, proceder
    if (selectMotivo === "4" && selectSubmotivo === "1") {
        $('#modal-loading').modal('toggle');
        setTimeout(() => {
            habladorText('En la parte inferior se habra desplegado un paso a paso, en el cual deberas copiar y pegar lo referente a la descripcion en la casilla de observaciones, acto seguido presiona en el boton ACEPTAR');
            $('#reto').css('display', 'block');
            $('#modal-loading').modal('hide');
            $('#arrow_2').css('display', 'none');
        }, 4000);
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, seleccione "Problemas Técnicos" en Motivo y "Falla todos los servicios" en SubMotivo antes de continuar.');
    }
}

function recha_1() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Se invocara el tramite de traslado para mejorar proceso de retención, y captar
información en no retenidos`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        location.href='./portalRETENCIONPartII.php'
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}