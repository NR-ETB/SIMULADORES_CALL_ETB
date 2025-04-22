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
    if (selectMotivo === "1" && selectSubmotivo === "1") {
        $('#modal-loading').modal('toggle');
        setTimeout(() => {
            $('#ofertasModal').modal('toggle');
            $('#reto').css('display', 'block');
            habladorText('En la parte inferior se habra desplegado un paso a paso, en el cual deberas copiar y pegar lo referente a la descripcion en la casilla de observaciones, acto seguido presiona en el boton RECHAZAR');
            $('#modal-loading').modal('hide');
        }, 4000);
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, seleccione "Problemas Técnicos" en Motivo y "Falla todos los servicios" en SubMotivo antes de continuar.');
    }
}

function btn_reto2() {
    // Obtener los elementos select por su ID
    var selectMotivo = document.getElementById('mot').value;
    var selectSubmotivo = document.getElementById('fall').value;

    // Si ambos selectores tienen la opción '1' seleccionada, proceder
    if (selectMotivo === "1" && selectSubmotivo === "1") {
        $('#modal-loading').modal('toggle');
        setTimeout(() => {
            $('#ofertasModal').modal('toggle');
            $('#reto').css('display', 'block');
            habladorText('En la parte inferior se habra desplegado un paso a paso, en el cual encontraras el boton de RETIRAR, da click para continuar');
            $('#modal-loading').modal('hide');
        }, 4000);
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, seleccione "Problemas Técnicos" en Motivo y "Falla todos los servicios" en SubMotivo antes de continuar.');
    }
}

function recha_1() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente retenido solucionado en linea fallas técnicas en sus
servicios`;

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
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}

function recha_2() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Generar visita técnica que al hacer soporte técnico
continuá la falla del servicio`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description2").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_2').modal('toggle');
        $('#paso-2').css('display', 'none');
        $('#paso-3').css('display', 'block');
        $('#retab2').css('display', 'table-row');
        document.getElementById('pasoli-2').classList.add("done");
        document.getElementById('pasoli-3').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}

function recha_3() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente obtiene 15% de descuento sobre
su plan contratado`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description3").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_3').modal('toggle');
        $('#paso-3').css('display', 'none');
        $('#paso-4').css('display', 'block');
        $('#retab3').css('display', 'table-row');
        document.getElementById('pasoli-3').classList.add("done");
        document.getElementById('pasoli-4').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}

function recha_4() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente obtiene 20% de descuento sobre
su plan contratado`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description4").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_4').modal('toggle');
        $('#paso-4').css('display', 'none');
        $('#paso-5').css('display', 'block');
        $('#retab4').css('display', 'table-row');
        document.getElementById('pasoli-4').classList.add("done");
        document.getElementById('pasoli-5').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}

function recha_5() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente obtiene 25% de descuento sobre
su plan contratado`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description5").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_5').modal('toggle');
        $('#paso-5').css('display', 'none');
        $('#paso-6').css('display', 'block');
        $('#retab5').css('display', 'table-row');
        document.getElementById('pasoli-5').classList.add("done");
        document.getElementById('pasoli-6').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}

function recha_6() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente se le otrorga una tarifa preferencial ($60.000)`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description6").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_6').modal('toggle');
        $('#paso-6').css('display', 'none');
        $('#paso-7').css('display', 'block');
        $('#retab6').css('display', 'table-row');
        document.getElementById('pasoli-6').classList.add("done");
        document.getElementById('pasoli-7').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }  

}

function recha_7() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente obtiene 1 mes sin costo, más descuento
del 15% en la Oferta retención S`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description7").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }  

}
