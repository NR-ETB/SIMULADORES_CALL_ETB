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
            habladorText('En la parte inferior se habrá desplegado un paso a paso, en el cual encontraras los botones de RETIRAR para continuar con el paso a paso o ACEPTAR para finalizar el escenario, copia y pega el texto de la descripción en las observaciones, para poder utilizar los botones antes mencionados, RECUERDA QUE EN UNA GESTION REAL, SE DEBEN APLICAR LAS PLANTILLAS DE LA ESTRATEGIA A UTILIZAR.');
            $('#reto').css('display', 'block');
            $('#modal-loading').modal('hide');
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
        $('#paso-1').css('display', 'none');
        $('#paso-2').css('display', 'block');
        $('#retab').css('display', 'table-row');
        document.getElementById('pasoli-1').classList.add("done");
        document.getElementById('pasoli-2').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }       
}

function recha_11() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Se invocara el tramite de traslado para mejorar proceso de retención, y captar
información en no retenidos`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }   
}

function recha_2() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Se brinda información al cliente respecto a los beneficios y bondades de su
plan actual`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description2").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#paso-2').css('display', 'none');
        $('#paso-3').css('display', 'block');
        $('#retab2').css('display', 'table-row');
        document.getElementById('pasoli-2').classList.add("done");
        document.getElementById('pasoli-3').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }       
}

function recha_22() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Se brinda información al cliente respecto a los beneficios y bondades de su
plan actual`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description2").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }        
}

function recha_3() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Ofrecer al cliente oferta de planta
competitiva (sin promoción)`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description3").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#paso-3').css('display', 'none');
        $('#paso-4').css('display', 'block');
        $('#retab3').css('display', 'table-row');
        document.getElementById('pasoli-3').classList.add("done");
        document.getElementById('pasoli-4').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }       
}

function recha_33() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Ofrecer al cliente oferta de planta
competitiva (sin promoción)`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description3").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }        
}

function recha_4() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente retenido con valores de la oferta de plan vigente`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description4").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#paso-4').css('display', 'none');
        $('#paso-5').css('display', 'block');
        $('#retab4').css('display', 'table-row');
        document.getElementById('pasoli-4').classList.add("done");
        document.getElementById('pasoli-5').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }       
}

function recha_44() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente retenido con valores de la oferta de plan vigente`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description4").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }     
}

function recha_5() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente con serivicio terenido con el trámite de cesión de contrato Aplican
políticas actuales de generación de trámites`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description5").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#paso-5').css('display', 'none');
        $('#paso-6').css('display', 'block');
        $('#retab5').css('display', 'table-row');
        document.getElementById('pasoli-5').classList.add("done");
        document.getElementById('pasoli-6').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }       
}

function recha_55() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente con serivicio terenido con el trámite de cesión de contrato Aplican
políticas actuales de generación de trámites`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description5").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }       
}

function recha_6() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Suspensión a solicitud del cliente según resolución`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description6").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripción dada en la parte superior derecha de esta sección.');
    }
}
