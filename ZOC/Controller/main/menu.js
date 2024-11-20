// Definir la variable f fuera de la función para que mantenga su estado
var ff = false;

function solgen() {
    // Buscar todas las filas ocultas dentro de la tabla con id 'twoo'
    var filasOcultas = document.querySelectorAll('#four');
    var filasOp = document.querySelectorAll('#onee');
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
        fi.style.background  = ff ? '#0070d2' : '#0070d2';
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
        fi.style.background  = fff ? '#0070d2' : '#0070d2';
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
