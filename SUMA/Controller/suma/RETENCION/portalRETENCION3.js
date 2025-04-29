document.addEventListener("DOMContentLoaded", function() {
    // Selecciona los elementos
    const motivoSelect = document.getElementById("mot");
    const submotivoSelect = document.getElementById("subm");
    
    // Función para hacer parpadear un elemento
    function parpadear(elemento) {
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
                elemento.style.borderWidth = "1px";
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
    }
    
    // Inicia el parpadeo para el select de motivos
    parpadear(motivoSelect);
    
    // Inicia el parpadeo para el select de submotivos
    parpadear(submotivoSelect);
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

function sub_2() {
    $('#sub8').css('display', 'flex');
    $('#SubMotivo').css('top', '8px');      
}

function btn_reto() {

    var textoDescripcion = `Virgin`;

    var textoIngresado = document.getElementById("virgin").value.trim();

    if (textoIngresado === textoDescripcion) {
        $('#modal-loading').modal('toggle');
        setTimeout(() => {
            habladorText('En la parte inferior se habra desplegado un paso a paso, en el cual deberas copiar y pegar lo referente a la descripcion en la casilla de observaciones, acto seguido presiona en el boton RECHAZAR');
            $('#ofertasModal').modal('toggle');
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
    var textoDescripcion = `Se brinda la información al cliente respecto a los beneficios y bondades
de su plan actual`;

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
    var textoDescripcion = `Ofrecer al cliente oferta de plan
competitiva (sin promoción)`;

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
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}

function recha_3() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente retenido con activación de beneficios
de descuento captura promocial`;

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
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }       
}

function recha_4() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente retenido con valores de la oferta de planta vigente`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description4").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_2').modal('toggle');
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
    var textoDescripcion = `Cliente obtiene 15% de descuento sobre su
plan contratado`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description5").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_3').modal('toggle');
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
    var textoDescripcion = `Cliente obtiene 20% de descuento sobre su
plan contratado`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description6").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_4').modal('toggle');
        $('#paso-6').css('display', 'none');
        $('#paso-7').css('display', 'block');
        $('#retab5').css('display', 'table-row');
        document.getElementById('pasoli-6').classList.add("done");
        document.getElementById('pasoli-7').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }  
}

function recha_7() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente obtiene 25% de descuento sobre su
plan contratado`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description7").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_5').modal('toggle');
        $('#paso-7').css('display', 'none');
        $('#paso-8').css('display', 'block');
        $('#retab6').css('display', 'table-row');
        document.getElementById('pasoli-7').classList.add("done");
        document.getElementById('pasoli-8').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }  
}

function recha_8() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente se le otrorga una tarifa preferencial ($60.000)`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description8").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#paso-8').css('display', 'none');
        $('#paso-9').css('display', 'block');
        $('#retab7').css('display', 'table-row');
        document.getElementById('pasoli-8').classList.add("done");
        document.getElementById('pasoli-9').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }  
}

function recha_9() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Ofrecer el paquete de menor valor o la
cancelación de alguno de los productos`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description9").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        habladorText('Aqui podras ver la oferta desglozada para este paso de la retencion.');
        $('#ofertasModal_6').modal('toggle');
        $('#paso-9').css('display', 'none');
        $('#paso-10').css('display', 'block');
        $('#retab8').css('display', 'table-row');
        document.getElementById('pasoli-9').classList.add("done");
        document.getElementById('pasoli-10').classList.add("active");
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }  
}

function recha_10() {

    // Obtener el texto original de la descripción (debe coincidir exactamente)
    var textoDescripcion = `Cliente obtiene 1 mes sin costo, más descuento
del 15% en la Oferta retención S`;

    // Obtener el contenido del textarea y eliminar espacios extras
    var textoIngresado = document.getElementById("description9").value.trim();

    // Comparar ambos textos
    if (textoIngresado === textoDescripcion) {
        $('#modal-fase1').modal('toggle');
    } else {
        // Opcional: mostrar un mensaje si no se cumple la condición
        habladorText('Por favor, ingrese la descripcion dada en la parte superior derecha de esta sección.');
    }  
}