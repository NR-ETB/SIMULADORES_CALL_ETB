function btn_save() {

    let v1 = document.getElementById('name').value;
    let v2 = document.getElementById('number').value;
    let v3 = document.getElementById('tname').value;
    let v4 = document.getElementById('ident').value;
    let v5 = document.getElementById('email').value;

    console.log('Nombre:', v1);
    console.log('Número:', v2);
    console.log('Apellido:', v3);
    console.log('Identificación:', v4);
    console.log('Email:', v5);

    if (v1 == "Roberto" && v2 == 6012698426 && v3 == "Espineta" && v4 == 1000698412 && v5 == "respi@email.com") {
        $('#PartI').css('display', 'none');
        $('#PartII').css('display', 'block');   
        $('#sec16').css('margin-left', '244px'); 
        $('#alert-flotante2').css('display', 'none');
        habladorText('Los datos ingresados en campos y los datos seleccionados, se veran reflejados, asi como el ausnto y descripción agregada, cambe recalcar que este caso quedaria ya en ESTADO RESUELTO, por lo que la tipificación y gestion fue realizada exitosamente, para salir de esta vista, dirigete al apartado superior y presiona en la X para cerrar la pestaña.')
    } else {
        console.log('Datos Incorrectos o Invalidados');
    }
}

function btn_save2() {

    let v1 = document.getElementById('name').value;
    let v2 = document.getElementById('number').value;
    let v3 = document.getElementById('tname').value;
    let v4 = document.getElementById('ident').value;
    let v5 = document.getElementById('email').value;

    console.log('Nombre:', v1);
    console.log('Número:', v2);
    console.log('Apellido:', v3);
    console.log('Identificación:', v4);
    console.log('Email:', v5);

    if (v1 == "Victoria" && v2 == 6012648519 && v3 == "Mendoza" && v4 == 1000110522 && v5 == "anna@email.com") {
        $('#PartI').css('display', 'none');
        $('#PartII').css('display', 'block');
        $('#sec16').css('margin-left', '244px'); 
        $('#alert-flotante2').css('display', 'none');
    } else {
        console.log('Datos Incorrectos o Invalidados');
    }
}

function btn_save3() {

    let v1 = document.getElementById('name').value;
    let v2 = document.getElementById('number').value;
    let v3 = document.getElementById('tname').value;
    let v4 = document.getElementById('ident').value;
    let v5 = document.getElementById('email').value;

    console.log('Nombre:', v1);
    console.log('Número:', v2);
    console.log('Apellido:', v3);
    console.log('Identificación:', v4);
    console.log('Email:', v5);

    if (v1 == "Gabriela" && v2 == 6012456793 && v3 == "Cabrera" && v4 == 1000486253 && v5 == "gaca@email.com") {
        $('#PartI').css('display', 'none');
        $('#PartII').css('display', 'block');
        $('#sec16').css('margin-left', '244px'); 
        $('#alert-flotante2').css('display', 'none');
    } else {
        console.log('Datos Incorrectos o Invalidados');
    }
}

function btn_save4() {

    let v1 = document.getElementById('name').value;
    let v2 = document.getElementById('number').value;
    let v3 = document.getElementById('tname').value;
    let v4 = document.getElementById('ident').value;
    let v5 = document.getElementById('email').value;

    console.log('Nombre:', v1);
    console.log('Número:', v2);
    console.log('Apellido:', v3);
    console.log('Identificación:', v4);
    console.log('Email:', v5);

    if (v1 == "Gabriel" && v2 == 6012156974 && v3 == "Gonzales" && v4 == 1000486253 && v5 == "gab@email.com") {
        $('#PartI').css('display', 'none');
        $('#PartII').css('display', 'block');
        $('#sec16').css('margin-left', '244px'); 
        $('#alert-flotante2').css('display', 'none');
    } else {
        console.log('Datos Incorrectos o Invalidados');
    }
}

function exit() {
    location.href='./profilePymesPartII.html'
}

function close1() {
    console.log('Si agarra')
    $('#tip').css('display', 'none');  
    $('#overlay').css('display', 'none');  
}

function close2() {
    $('#tip2').css('display', 'none');  
    $('#overlay').css('display', 'none');  
}

function close3() {
    $('#tip3').css('display', 'none');  
}

function new_tip() {
    $('#tip').css('display', 'block');   
    $('#overlay').css('display', 'block'); 
    $('body').css('height', '1px');   
}

function tipi() {
    $('#tip').css('display', 'none');  
    $('#tip2').css('display', 'block');  
    $('body').css('height', '1px');
}

function details() {
    $('#tip3').css('display', 'block');   
}

function mod() {
    location.href='./finalPymes.html'
}

function new_note() {
    $('#tip4').css('display', 'block');   
}

function close4() {
    $('#tip4').css('display', 'none');  
}