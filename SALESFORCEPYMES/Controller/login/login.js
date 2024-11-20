let estadoInputs = false;
function ini_session(){
    if(document.getElementById('username').value == "calltecnico2"){
        if(document.getElementById('password').value == "tecnico2"){
                $( document ).ready(function() {
                    location.href='../menus/menuPymes.html';
                });
        }
    }else if(document.getElementById('username').value == "calltecnico"){
        if(document.getElementById('password').value == "tecnico"){
            $( document ).ready(function() {
                location.href='./verificationLogin.html';
            });
        }
    }else{
        alert('Usuario u Contraseña Incorrectos')
    }
} 

function verify() {
    var code = document.getElementById('code').value.trim(); // Usar .trim() para eliminar espacios al principio y al final
    console.log('Valor del código:', code); 

    if(code === "ABCD444") { 
        location.href = './login.html';
    } else {
        alert('Código Incorrecto');
    }
}

function gred() {
    let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
    width=0,height=0,left=-1020,top=-1000`;
    open('../../Model/documents/manSales.pdf', 'manual', params);
}

function enter() {
    let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
    width=0,height=0,left=-1020,top=-1000`;
    open('View/loginPymes/login.html', "dashboard", params);
}
