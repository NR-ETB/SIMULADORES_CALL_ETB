$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
    });
    setTimeout(() => {
    $( document ).ready(function() {
        $('#modal-loading').modal('hide')
    });
}, "4000");

function pro() {

    var input = document.getElementById('inputValor');
    var p = document.getElementById("prod").value;

    if (p == 1) {
      input.value = 'PAQUETE';
    } else {
      input.value = '';
    }

}

var isVisible = false;

function btn_datos3() {
  // Si el elemento está visible, lo ocultamos
  if (isVisible) {
      $('#table-datos').css('display', 'none');
      isVisible = false;
      $('#btn-solucion2').css('top', '630px');
  } else {
      // Si no está visible, lo mostramos
      $('#table-datos').css('display', 'block');
      isVisible = true;
      $('#btn-solucion2').css('top', '870px');
  }
}

function datos() {
  $('#modal-soluic3').modal('toggle')
  $('#modal-soluic3').css('z-index','1060')
}

function verificarDT(){    
  $( document ).ready(function() {
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
      $('#modal-ace').modal('toggle')
      $('#modal-soluic3').css('z-index','100')
  });
}

function btn_sig2(){

  $( document ).ready(function() { 
      $('#modal-loading').modal('toggle')
      setTimeout(() => {
          $( document ).ready(function() {
              $('#modal-loading').modal('hide')
              $('#modal-ace').modal('hide')
              $('#modal-soluic3').modal('hide')
              $('#table-datos').css('display','none')
              $('#cun-rel').css('display','none')
              $('#cun-rel2').css('display','block')
              $('#cun-rel2').prop('selected', true);
          });
        }, "4000"); 
  });
}

function tabac() {
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
}

function btn_pqr2() {
  // Obtener el valor seleccionado del select
  var selectedValue = document.getElementById("sub").value;

  // Verificar si el valor seleccionado es "TIENDAS"
  if (selectedValue === "3") {
      // Redirigir a la próxima página
      alert("Es posible que los cambios no se guarden.");
      location.href = 'pqrFALLA.php';
  } else {
      console.log("No se han seleccionado todos los campos obligatorios");
  }
}



