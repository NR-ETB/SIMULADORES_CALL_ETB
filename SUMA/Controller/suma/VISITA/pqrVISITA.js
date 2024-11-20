$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
    });
    setTimeout(() => {
    $( document ).ready(function() {
        $('#modal-loading').modal('hide')
    });
}, "4000");


function toggleDisplay() {
    var select = document.getElementById("oest");
    var tdSelect = document.getElementById("ges");
    var tdSelect2 = document.getElementById("est");
    var tdDisplay = document.getElementById("ges2");
    var tdDisplay2 = document.getElementById("est2");

    if (select.value === "1") {
        tdSelect.style.display = "none";
        tdSelect2.style.display = "none";
        tdDisplay.style.display = "table-cell";
        tdDisplay2.style.display = "table-cell";
       } else {
        alert("vales monda")
    }
}

function toggleDisplay2() {
    var select = document.getElementById("oest2");
    var tdSelect = document.getElementById("ges3");
    var tdSelect2 = document.getElementById("est3");
    var tdDisplay = document.getElementById("ges4");
    var tdDisplay2 = document.getElementById("est4");
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
        alert("Gestion No Completada")
    }
}

function btn_fa() {
    $('#modal-soluic4').modal('toggle')
}

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var today = new Date();
    var monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var tomorrow = new Date(today); // Copia la fecha de hoy
    tomorrow.setDate(tomorrow.getDate() + 1); // Suma un día
    var totomorrow = new Date(today); // Copia la fecha de hoy
    totomorrow.setDate(totomorrow.getDate() + 2); // Suma dos días
    var currentMonth = today.getMonth();
    var currentYear = today.getFullYear();

    renderCalendar(currentMonth, currentYear);

    function renderCalendar(month, year) {
      var daysInMonth = new Date(year, month + 1, 0).getDate();
      var firstDayOfMonth = new Date(year, month, 1).getDay();

      var table = '<table>';
      table += '<div style="display: flex; align-items: center;">' +
      '<button onclick="bef();" style="background-color: transparent; border: none;">' +
      '<img style="height: 25px; width: 25px;" src="../../../images/images-suma/calendarbtn2.png" alt="">' +
      '</button>' +
      '<p style="margin: 0; padding: 0; margin-left: 5px; margin-bottom: 15px;">' + monthNames[month] + " " + currentYear + '</p>' +
      '<button onclick="aft();" style="background-color: transparent; border: none; margin-left: auto;">' +
      '<img style="height: 25px; width: 25px;" src="../../../images/images-suma/calendarbtn.png" alt="">' +
      '</button>' +
      '</div>';
      table += '<thead><tr><th>Do</th><th>Lu</th><th>Ma</th><th>Mi</th><th>Ju</th><th>Vi</th><th>Sa</th></tr></thead>';
      table += '<tbody>';

      var date = 1;
      for (var i = 0; i < 6; i++) {
        table += '<tr>';
        for (var j = 0; j < 7; j++) {
          if (i === 0 && j < firstDayOfMonth) {
            table += '<td></td>';
          } else if (date > daysInMonth) {
            table += '<td></td>';
          } else {
            var currentDate = new Date(year, month, date);
            var cellClass = currentDate.toDateString() === today.toDateString() ? 'today' : '';
            var cellClass2 = currentDate.toDateString() === tomorrow.toDateString() ? 'tomorrow' : '';
            var cellClass3 = currentDate.toDateString() === totomorrow.toDateString() ? 'totomorrow' : '';
            // Verifica si el día actual es sábado o domingo
            if (j === 6 || j === 0) {
              table += '<td onclick="fech(this)">' + date + '</td>'; // No aplica clase para sábados (6) o domingos (0)
              // Verifica si el día actual es lunes (1) a jueves (4)
            } else if(j === 1 || j === 2 || j === 3 || j === 4 || j === 5) {
              if (cellClass || cellClass2 || cellClass3) {
                table += '<td  onclick="fech(this)" class="' + cellClass + ' ' + cellClass2 + ' ' + cellClass3 + '">' + date + '</td>';
              } else {
                table += '<td onclick="fech(this)">' + date + '</td>';
              }
            }            
            date++;
          }
        }
        table += '</tr>';
      }

      table += '</tbody></table>';

      calendarEl.innerHTML = table;
    }

    window.bef = function() {
        currentMonth--; // Disminuye el valor del mes actual
        if (currentMonth < 0) { // Si el mes es menor que cero, retrocede al año anterior y establece el mes a diciembre
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear); // Renderiza el calendario con el nuevo mes 
    }

    window.aft = function() {
        currentMonth++; // Aumenta el valor del mes actual
        if (currentMonth > 11) { // Si el mes es mayor que once, avanza al año siguiente y establece el mes a enero
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear); // Renderiza el calendario con el nuevo mes
    }

});

function fech(element){

    var ven = document.getElementById('ven');
    var ven1 = document.getElementById('ven1');
    var ven2 = document.getElementById('ven2');
    var ven3 = document.getElementById('ven3');

    if (element.classList.contains('today')) {
        $(document).ready(function() {
            ven.style.display = 'none';
            ven1.style.display = 'inline';
            ven1.selected = true;
            ven2.style.display = 'none';
            ven3.style.display = 'none';
        });
    }else if(element.classList.contains('tomorrow')){
        $(document).ready(function() {
            ven.style.display = 'none';
            ven1.style.display = 'none';
            ven2.style.display = 'inline';
            ven2.selected = true;
            ven3.style.display = 'none';
        });
    }else if(element.classList.contains('totomorrow')){
        $(document).ready(function() {
            ven.style.display = 'none';
            ven1.style.display = 'none';
            ven2.style.display = 'none';
            ven3.style.display = 'inline';
            ven3.selected = true;
        });
    }else{
        console.log("Dia no Disponible");
    }
}
// Llamar a la función para actualizar las horas cuando sea necesario
actualizarHoras();

function agen() {
    $( document ).ready(function() {
    $('#modal-soluic4').css('z-index','1000')
    $('#modal-info2').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-info2').modal('hide')
            $('#modal-info4').modal('toggle')
        });
    }, "4000"); 
    
})

}

function agen3() {
    $( document ).ready(function() {
    $('#modal-info5').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            location.href = './portalVISITAPartII.php'
        });
    }, "4000"); 
    
})
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

