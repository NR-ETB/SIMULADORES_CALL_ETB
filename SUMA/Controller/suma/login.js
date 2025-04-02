let estadoInputs = false;

function verificarUser(){
    if(document.getElementById('username').value == "escueladigital"){
        if(document.getElementById('password').value == "digital"){
            
            $( document ).ready(function() {
                $('#modal-loading').modal('toggle')
            });
            setTimeout(() => {
                $( document ).ready(function() {
                    $('#modal-loading').modal('hide')
                    let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
                    width=0,height=0,left=-1020,top=-1000`;
                    open('View/suma/menu/menuSUMA.html', "dashboard", params);
                });
            }, "4000");
        }
    }else{
        $('#modal-err').modal('show')
    }
} 

function gred() {
    let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
    width=0,height=0,left=-1020,top=-1000`;
    open('Model/documents/manSuma.pdf', 'manual', params);
}

document.getElementById('btn-sub-login').addEventListener('click', event=>{
    verificarUser()
})
window.addEventListener("keydown", function (event) {
    if(event.key == "Enter"){
        verificarUser()
    }
  },false);

document.getElementById('password').addEventListener('change', event=>{
    if(document.getElementById('password').value != ''){
        if(document.getElementById('username').value != ''){
            estadoInputs = true;
        }else{
            estadoInputs = false;
        }
    }else{
        estadoInputs = false;
    }
    btnlogin()
})
document.getElementById('username').addEventListener('change', event=>{
    if(document.getElementById('username').value != ''){
        if(document.getElementById('password').value != ''){
            estadoInputs = true;
        }else{
            estadoInputs = false;
        }
    }else{
        estadoInputs = false;
    }
    btnlogin()
})

// Definir la variable f fuera de la función para que mantenga su estado
var f = false;

function solfttc() {
    // Buscar todas las filas ocultas dentro de la tabla con id 'twoo'
    var filasOcultas = document.querySelectorAll('#twoo');
    var filasOp = document.querySelectorAll('#onee');
    var filasEs = document.querySelectorAll('#es1');
    var filasEs2 = document.querySelectorAll('#es2');
    var filasEs3 = document.querySelectorAll('#es3');
    var filasEs6 = document.querySelectorAll('#es4');
    var filasEs4 = document.querySelectorAll('#esno1');
    var filasEs5 = document.querySelectorAll('#esno3');
    var filasEs7 = document.querySelectorAll('#esno4');
    var filaSou = document.querySelectorAll('#es11');
    var filaSou2 = document.querySelectorAll('#es12');
    
    // Recorrer cada fila oculta y cambiar su estilo según el estado de f
    filasOcultas.forEach(function(fila) {
        fila.style.display = f ? 'none' : 'table-row';
    });

    filasOp.forEach(function(fil) {
        fil.style.opacity = f ? '1' : '0.35';
    });

    filasEs2.forEach(function(fil) {
        fil.style.display = f ? '' : 'none';
    });

    filasEs3.forEach(function(fil) {
        fil.style.display = f ? '' : 'none';
    });

    filasEs4.forEach(function(fil) {
        fil.style.display = f ? 'none' : 'table-row';
    });

    filasEs5.forEach(function(fil) {
        fil.style.display = f ? 'none' : 'table-row';
    });

    filasEs6.forEach(function(fil) {
        fil.style.display = f ? '' : 'none';
    });

    filasEs7.forEach(function(fil) {
        fil.style.display = f ? 'none' : 'table-row';
    });

    filasEs.forEach(function(fi) {
        fi.style.background  = f ? '#f36f31' : '#008aa6';
        fi.style.opacity = f ? '1' : '0.85';
    });

    filaSou.forEach(function(fif) {
        fif.style.display = f ? 'inline-block' : 'none';
    });

    filaSou2.forEach(function(fif) {
        fif.style.display = f ? 'none' : 'inline-block';
    });

    f = !f; // Alternar el estado de f entre true y false
}

// Definir la variable f fuera de la función para que mantenga su estado
var ff = false;

function solgen() {
    // Buscar todas las filas ocultas dentro de la tabla con id 'twoo'
    var filasOcultas = document.querySelectorAll('#four');
    var filasOp = document.querySelectorAll('#onee');
    var filasOp = document.querySelectorAll('#five');
    var filasEs = document.querySelectorAll('#es2');
    var filasEs2 = document.querySelectorAll('#es1');
    var filasEs3 = document.querySelectorAll('#es3');
    var filasEs6 = document.querySelectorAll('#es4');
    var filasEs4 = document.querySelectorAll('#esno2');
    var filasEs5 = document.querySelectorAll('#esno3');
    var filasEs7 = document.querySelectorAll('#esno4');
    var filaSou = document.querySelectorAll('#es13');
    var filaSou2 = document.querySelectorAll('#es14');
    
    // Recorrer cada fila oculta y cambiar su estilo según el estado de f
    filasOcultas.forEach(function(fila) {
        fila.style.display = ff ? 'none' : 'table-row';
    });

    filasOp.forEach(function(fil) {
        fil.style.opacity = ff ? '1' : '0.35';
    });

    filasEs.forEach(function(fi) {
        fi.style.background  = ff ? '#f36f31' : '#008aa6';
        fi.style.opacity = ff ? '1' : '0.85';
    });

    filasEs2.forEach(function(fil) {
        fil.style.display = ff ? '' : 'none';
    });

    filasEs3.forEach(function(fil) {
        fil.style.display = ff ? '' : 'none';
    });

    filasEs4.forEach(function(fil) {
        fil.style.display = ff ? 'none' : 'table-row';
    });

    filasEs5.forEach(function(fil) {
        fil.style.display = ff ? 'none' : 'table-row';
    });

    filasEs6.forEach(function(fil) {
        fil.style.display = ff ? '' : 'none';
    });

    filasEs7.forEach(function(fil) {
        fil.style.display = ff ? 'none' : 'table-row';
    });


    filaSou.forEach(function(fif) {
        fif.style.display = ff ? 'inline-block' : 'none';
    });

    filaSou2.forEach(function(fif) {
        fif.style.display = ff ? 'none' : 'inline-block';
    });

    ff = !ff; // Alternar el estado de f entre true y false
}

// Definir la variable f fuera de la función para que mantenga su estado
var fff = false;

function solftth() {
    // Buscar todas las filas ocultas dentro de la tabla con id 'twoo'
    var filasOcultas = document.querySelectorAll('#three');
    var filasOp = document.querySelectorAll('#four');
    var filasOp = document.querySelectorAll('#five');
    var filasOp = document.querySelectorAll('#onee');
    var filasEs = document.querySelectorAll('#es3');
    var filasEs2 = document.querySelectorAll('#es2');
    var filasEs3 = document.querySelectorAll('#es1');
    var filasEs6 = document.querySelectorAll('#es4');
    var filasEs4 = document.querySelectorAll('#esno1');
    var filasEs5 = document.querySelectorAll('#esno2');
    var filasEs7 = document.querySelectorAll('#esno4');
    var filaSou = document.querySelectorAll('#es15');
    var filaSou2 = document.querySelectorAll('#es16');
    
    // Recorrer cada fila oculta y cambiar su estilo según el estado de f
    filasOcultas.forEach(function(fila) {
        fila.style.display = fff ? 'none' : 'table-row';
    });

    filasOp.forEach(function(fil) {
        fil.style.opacity = fff ? '1' : '0.35';
    });

    filasEs.forEach(function(fi) {
        fi.style.background  = fff ? '#f36f31' : '#008aa6';
        fi.style.opacity = fff ? '1' : '0.85';
    });

    filasEs2.forEach(function(fil) {
        fil.style.display = fff ? '' : 'none';
    });

    filasEs3.forEach(function(fil) {
        fil.style.display = fff ? '' : 'none';
    });

    filasEs4.forEach(function(fil) {
        fil.style.display = fff ? 'none' : 'table-row';
    });

    filasEs5.forEach(function(fil) {
        fil.style.display = fff ? 'none' : 'table-row';
    });

    filasEs6.forEach(function(fil) {
        fil.style.display = fff ? '' : 'none';
    });

    filasEs7.forEach(function(fil) {
        fil.style.display = fff ? 'none' : 'table-row';
    });

    filaSou.forEach(function(fif) {
        fif.style.display = fff ? 'inline-block' : 'none';
    });

    filaSou2.forEach(function(fif) {
        fif.style.display = fff ? 'none' : 'inline-block';
    });

    fff = !fff; // Alternar el estado de f entre true y false
}

// Definir la variable f fuera de la función para que mantenga su estado
var ffff = false;

function solsvas() {
    // Buscar todas las filas ocultas dentro de la tabla con id 'twoo'
    var filasOcultas = document.querySelectorAll('#five');
    var filasOp = document.querySelectorAll('#four');
    var filasOp = document.querySelectorAll('#onee');
    var filasOp = document.querySelectorAll('#two');
    var filasOp = document.querySelectorAll('#three');
    var filasEs = document.querySelectorAll('#es4');
    var filasEs2 = document.querySelectorAll('#es2');
    var filasEs3 = document.querySelectorAll('#es1');
    var filasEs4 = document.querySelectorAll('#esno1');
    var filasEs5 = document.querySelectorAll('#esno2');
    var filasEs7 = document.querySelectorAll('#esno3');
    var filasEs6 = document.querySelectorAll('#es3');
    var filaSou = document.querySelectorAll('#es17');
    var filaSou2 = document.querySelectorAll('#es18');
    
    // Recorrer cada fila oculta y cambiar su estilo según el estado de f
    filasOcultas.forEach(function(fila) {
        fila.style.display = ffff ? 'none' : 'table-row';
    });

    filasOp.forEach(function(fil) {
        fil.style.opacity = ffff ? '1' : '0.35';
    });

    filasEs.forEach(function(fi) {
        fi.style.background  = ffff ? '#f36f31' : '#008aa6';
        fi.style.opacity = ffff ? '1' : '0.85';
    });

    filasEs2.forEach(function(fil) {
        fil.style.display = ffff ? '' : 'none';
    });

    filasEs3.forEach(function(fil) {
        fil.style.display = ffff ? '' : 'none';
    });

    filasEs4.forEach(function(fil) {
        fil.style.display = ffff ? 'none' : 'table-row';
    });

    filasEs5.forEach(function(fil) {
        fil.style.display = ffff ? 'none' : 'table-row';
    });

    filasEs6.forEach(function(fil) {
        fil.style.display = ffff ? '' : 'none';
    });

    filasEs7.forEach(function(fil) {
        fil.style.display = ffff ? 'none' : 'table-row';
    });

    filaSou.forEach(function(fif) {
        fif.style.display = ffff ? 'inline-block' : 'none';
    });

    filaSou2.forEach(function(fif) {
        fif.style.display = ffff ? 'none' : 'inline-block';
    });

    ffff = !ffff; // Alternar el estado de f entre true y false
}
