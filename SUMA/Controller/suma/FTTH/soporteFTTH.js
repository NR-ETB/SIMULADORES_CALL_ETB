$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
});
setTimeout(() => {
    $( document ).ready(function() {  
        $('#modal-loading').modal('hide')
    });
  }, "4000");



bd = [];

bd.datos = {
    ssid: 'ETB',
    password: '12345678',
    estado: 'Inactivo',
    sesionActiva: false,
    encriptacion: '',
    servSecundarios: false,
    tv: {
        estado: 'Suspendido'
    }
}
let identificadorLogs = 1;

bd.log = [];
// EstructuraLog = {
//     fechaInicio: '08, 06, 2020',
//     fechaFin: '08, 06, 2020',
//     comando: 'ACC_BTN_REAPROVIONAR_SERVICIOS',
//     descripcion: 'Reaprovisionar Servicios',
//     tipoComando: 'Estado Plataforma',
//     Respuesta: 'Response: OK',
// }


let estadoConsulta = false;
let estadoEquipos = false;
let estadoReaproInfra = false;
let estadoReaproTv = false;
let estadoReaproInternet = false;
let estadoReaproLineaTele = false;
let estadoReaproOnt = false;
let estadoConsultaIn = false;
let estadoConsultaOnt = false;
let estadoConsultaInfra = false;
let estadoPqr = false;
let estadoLog = false;
let sidebarSoporte = document.querySelector('.sidebar-soporte');
let estadodrownprueba = false;
var contentMainS = document.getElementById('content-s-main');

function close_vecino() {
    $('#modal-consulta-vecinos').css('display','none'); 
    $('#modal-loading').modal('hide'); 
    $('#modal-loading').css('z-index','893748');
}

document.getElementById('btn-consul-equipos').addEventListener('click', event=>{

    if(estadoEquipos == false){
        estadoEquipos = false;
        $('#modal-consulta-equipos').modal('show');
        contentMainS.style['overflow-y'] = "auto";


    }else{

        let scrollActual = parseInt(contentMainS.scrollTop);
        scrollActual = scrollActual - 210;

        contentMainS.style['overflow-y'] = "hidden";
        $('#modal-consulta-equipos').addClass('deshide');

        estadoEquipos = true;
        document.getElementById('modal-consulta-equipos').style.top = `${scrollActual}px`;
    }
})

document.getElementById('btn-consul-equipos2').addEventListener('click', event=>{

    if(estadoEquipos == false){
        estadoEquipos = false;
        $('#modal-consulta-equipos2').modal('show');
        contentMainS.style['overflow-y'] = "auto";


    }else{

        let scrollActual = parseInt(contentMainS.scrollTop);
        scrollActual = scrollActual - 210;

        contentMainS.style['overflow-y'] = "hidden";
        $('#modal-consulta-equipos2').addClass('deshide');

        estadoEquipos = true;
        document.getElementById('modal-consulta-equipos2').style.top = `${scrollActual}px`;
    }
})

document.getElementById('btn-consul-equipos3').addEventListener('click', event=>{

    if(estadoEquipos == false){
        estadoEquipos = false;
        $('#modal-consulta-equipos3').modal('show');
        contentMainS.style['overflow-y'] = "auto";


    }else{

        let scrollActual = parseInt(contentMainS.scrollTop);
        scrollActual = scrollActual - 210;

        contentMainS.style['overflow-y'] = "hidden";
        $('#modal-consulta-equipos3').addClass('deshide');

        estadoEquipos = true;
        document.getElementById('modal-consulta-equipos3').style.top = `${scrollActual}px`;
    }
})

function action_interne() {

    if(estadoReaproInternet){
        $('#dropdrown-act-internet').removeClass('deshide');
        estadoReaproInternet = false;
    }else{
        $('#dropdrown-act-internet').addClass('deshide');
        estadoReaproInternet = true;
        
    }
}
function action_fra() {
    if(estadoReaproInfra){
        $('#dropdrown-act-infr').removeClass('deshide');
        estadoReaproInfra = false;
    }else{
        $('#dropdrown-act-infr').addClass('deshide');
        estadoReaproInfra = true;
        
    }
}
function action_tv() {

    if(estadoReaproTv){
        $('#dropdrown-act-tv').removeClass('deshide');
        estadoReaproTv = false;
    }else{
        $('#dropdrown-act-tv').addClass('deshide');
        estadoReaproTv = true;
        
    }
}
function action_linea_t() {

    if(estadoReaproLineaTele){
        $('#dropdrown-act-linea-t').removeClass('deshide');
        estadoReaproLineaTele = false;
    }else{
        $('#dropdrown-act-linea-t').addClass('deshide');
        estadoReaproLineaTele = true;
        
    }
}
function action_linea_t2() {

    if(estadoReaproLineaTele){
        $('#dropdrown-act-linea-t2').removeClass('deshide');
        estadoReaproLineaTele = false;
    }else{
        $('#dropdrown-act-linea-t2').addClass('deshide');
        estadoReaproLineaTele = true;
        
    }
}
function btn_consul_internet() {

    if(estadoConsultaIn){
        $('#dropdrown-act-consulta-interne').removeClass('deshide');
        estadoConsultaIn = false;
    }else{
        $('#dropdrown-act-consulta-interne').addClass('deshide');
        estadoConsultaIn = true;
    }
}
function btn_consul_infra() {

    if(estadoConsultaInfra){
        $('#dropdrown-act-consulta2').removeClass('deshide');
        estadoConsultaInfra = false;
    }else{
        $('#dropdrown-act-consulta2').addClass('deshide');
        estadoConsultaInfra = true;
    }
}
function btn_consul_ont() {
    if(estadoConsultaOnt){
        $('#dropdrown-act-consulta-ont').removeClass('deshide');
        estadoConsultaOnt = false;
    }else{
        $('#dropdrown-act-consulta-ont').addClass('deshide');
        estadoConsultaOnt = true;
    }   
}
function action_ont() {
    if(estadoReaproOnt){
        $('#dropdrown-act-ont').removeClass('deshide');
        estadoReaproOnt = false;
    }else{
        $('#dropdrown-act-ont').addClass('deshide');
        estadoReaproOnt = true;
    }
}
function action_ont2() {
    if(estadoReaproOnt){
        $('#dropdrown-act-ont2').removeClass('deshide');
        estadoReaproOnt = false;
    }else{
        $('#dropdrown-act-ont2').addClass('deshide');
        estadoReaproOnt = true;
    }
}

function modalExitoSoporte(textTitulo, contenidoText, tituloMain){
    if(tituloMain){
        $('#tittle-main-exit').empty();
    }else{
        $('#tittle-main-exit').empty();
        document.getElementById('tittle-main-exit').appendChild(document.createTextNode('ACC_BTN_'));
    }
    $('#titulo-alerta-corr').empty();
    document.getElementById('titulo-alerta-corr').appendChild(document.createTextNode(textTitulo))
    if(contenidoText == false){
        $('#contenido-alerta-cor').empty();
        document.getElementById('contenido-alerta-cor').appendChild(document.createTextNode('Se procederá a refrescar los semáforos'))
    }else{
        $('#contenido-alerta-cor').empty();
        document.getElementById('contenido-alerta-cor').appendChild(document.createTextNode(contenidoText))
    }
        $(document).ready(function() {
        $('#modal-reapro-serv').modal('toggle')
    });
    var today = new Date();
 
    // obtener la fecha y la hora
    var now = today.toLocaleString();
    // Logs
    tempLog = {
        id: identificadorLogs,
        fechaInicio: now,
        fechaFin: now,
        comando: `ACC_BTN_${textTitulo}`,
        descripcion: textTitulo,
        tipoComando: 'Estado Plataforma',
        Respuesta: 'Response: OK',
    }
    identificadorLogs = identificadorLogs + 1;
    bd.log.push(tempLog);
    $('#tbody-logs').empty();
    bd.log.forEach(element=>{
        tr = document.createElement('tr');
        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaInicio']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaFin']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['comando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['descripcion']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['tipoComando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['Respuesta']))
        tr.appendChild(td);
        
        document.getElementById('tbody-logs').appendChild(tr);
    })
}

function modalExitoSoporte(textTitulo, contenidoText, tituloMain){
    if(tituloMain){
        $('#tittle-main-exit').empty();
    }else{
        $('#tittle-main-exit').empty();
        document.getElementById('tittle-main-exit').appendChild(document.createTextNode('ACC_BTN_'));
    }
    $('#titulo-alerta-corr').empty();
    document.getElementById('titulo-alerta-corr').appendChild(document.createTextNode(textTitulo))
    if(contenidoText == false){
        $('#contenido-alerta-cor').empty();
        document.getElementById('contenido-alerta-cor').appendChild(document.createTextNode('Se procederá a refrescar los semáforos'))
    }else{
        $('#contenido-alerta-cor').empty();
        document.getElementById('contenido-alerta-cor').appendChild(document.createTextNode(contenidoText))
    }
        $(document).ready(function() {
        $('#modal-reapro-serv').modal('toggle')
    });
    var today = new Date();
 
    // obtener la fecha y la hora
    var now = today.toLocaleString();
    // Logs
    tempLog = {
        id: identificadorLogs,
        fechaInicio: now,
        fechaFin: now,
        comando: `ACC_BTN_${textTitulo}`,
        descripcion: textTitulo,
        tipoComando: 'Estado Plataforma',
        Respuesta: 'Response: OK',
    }
    identificadorLogs = identificadorLogs + 1;
    bd.log.push(tempLog);
    $('#tbody-logs').empty();
    bd.log.forEach(element=>{
        tr = document.createElement('tr');
        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaInicio']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaFin']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['comando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['descripcion']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['tipoComando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['Respuesta']))
        tr.appendChild(td);
        
        document.getElementById('tbody-logs').appendChild(tr);
    })
}

document.getElementById('btn-transferencia').addEventListener('click', event =>{
    modalExitoSoporte('TRANSFERENCIA INMEDIATA', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('DIMPU'))
    label.appendChild(document.createElement('br'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('tel: +5760155579455'));

    document.getElementById('contenido-alerta-cor').appendChild(label);
    document.getElementById('contenido-alerta-cor').appendChild(p);

})

document.getElementById('btn-consul-ping').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_PING', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-una-colums');

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('SuccessCount'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('5'));
    divModal.appendChild(label);
    divModal.appendChild(p);


    label = document.createElement('label');
    label.appendChild(document.createTextNode('FailureCount'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('0'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('MinimumResponseTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('5'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('MaximumResponseTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('11'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('AverageResponseTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('8'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    document.getElementById('contenido-alerta-cor').appendChild(divModal);


})

document.getElementById('btn-validar-serv').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_PING', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-two-colums');

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('SuccessCount'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('5'));
    divModal.appendChild(label);
    divModal.appendChild(p);


    label = document.createElement('label');
    label.appendChild(document.createTextNode('FailureCount'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('0'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('MinimumResponseTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('3'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('MaximumResponseTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('11'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('AverageResponseTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('7'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    document.getElementById('contenido-alerta-cor').appendChild(divModal);


})

document.getElementById('btn-consul-ping_lan').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('PING LAN CLIENTE LAN CLIENTE'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('URL o IP: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    input = document.createElement('input');
    input.type = "text";
    input.value = "https://www.google.com/";
    // input.placeholder = "4 Digitos";
    input.setAttribute('id', 'ip')
    document.getElementById('con-modal-ont-sopo').appendChild(input)


    $('.btn-ont-sopo').addClass('btn-ping-search');
    let btn = document.querySelector('.btn-ping-search');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        $('#modal-serv-ont-act').modal('hide')
            modalExitoSoporte('ACC_BTN_CAMBIO_ESTADO_REDWIFI', true, true);
            document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
            let divModal = document.createElement('div');
            $(divModal).addClass('con-two-colums');
        
            let label = document.createElement('label');
            label.appendChild(document.createTextNode('SuccessCount'))
            label.style.color = "#F36F31";
            label.style.fontWeight = "bold";
            let p = document.createElement('p');
            p.style.fontWeight = "600";
            p.style.color = "#46b8da";
            p.appendChild(document.createTextNode('5'));
            divModal.appendChild(label);
            divModal.appendChild(p);
        
        
            label = document.createElement('label');
            label.appendChild(document.createTextNode('FailureCount'))
            label.style.color = "#F36F31";
            label.style.fontWeight = "bold";
            p = document.createElement('p');
            p.style.fontWeight = "600";
            p.style.color = "#46b8da";
            p.appendChild(document.createTextNode('0'));
            divModal.appendChild(label);
            divModal.appendChild(p);
        
            label = document.createElement('label');
            label.appendChild(document.createTextNode('MinimumResponseTime'))
            label.style.color = "#F36F31";
            label.style.fontWeight = "bold";
            p = document.createElement('p');
            p.style.fontWeight = "600";
            p.style.color = "#46b8da";
            p.appendChild(document.createTextNode('3'));
            divModal.appendChild(label);
            divModal.appendChild(p);
        
            label = document.createElement('label');
            label.appendChild(document.createTextNode('MaximumResponseTime'))
            label.style.color = "#F36F31";
            label.style.fontWeight = "bold";
            p = document.createElement('p');
            p.style.fontWeight = "600";
            p.style.color = "#46b8da";
            p.appendChild(document.createTextNode('11'));
            divModal.appendChild(label);
            divModal.appendChild(p);
        
            label = document.createElement('label');
            label.appendChild(document.createTextNode('AverageResponseTime'))
            label.style.color = "#F36F31";
            label.style.fontWeight = "bold";
            p = document.createElement('p');
            p.style.fontWeight = "600";
            p.style.color = "#46b8da";
            p.appendChild(document.createTextNode('7'));
            divModal.appendChild(label);
            divModal.appendChild(p);
        
            document.getElementById('contenido-alerta-cor').appendChild(divModal);
    })
})

document.getElementById('btn-lan').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_LAN', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-two-colums');

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('DHCP Lease'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('86400'));
    divModal.appendChild(label);
    divModal.appendChild(p);


    label = document.createElement('label');
    label.appendChild(document.createTextNode('DHCP Enabled'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('Encendido'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('Router_IP_Address '))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('192.168.0.1'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('Router Subnet Mask'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('255.255.255.0'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('DHCP_Min_Address'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('192.168.0.3'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('DHCP_Max_Address'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('192.168.0.253'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    document.getElementById('contenido-alerta-cor').appendChild(divModal);
})

document.getElementById('btn-wan').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_WAN', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-two-colums');

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('WAN_Enabled'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('Encendido'));
    divModal.appendChild(label);
    divModal.appendChild(p);


    label = document.createElement('label');
    label.appendChild(document.createTextNode('IP'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('186.30.45.252'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('Usuario PPPOE'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('SR-35962439'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('Estado Conexion'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('Connected'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('DNS'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('200.75.51.132,200.75.51.133'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    document.getElementById('contenido-alerta-cor').appendChild(divModal);
})

document.getElementById('btn-equipos-con').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_WAN', true, true);   
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-uno-colums');
    
    let divEquipo = document.createElement('div');
    $(divEquipo).addClass('con-equipo');
    let p = document.createElement('p');
    p.appendChild(document.createTextNode('192.168.0.3'))
    divEquipo.appendChild(p)
    let img = document.createElement('img');
    img.src = "./assets/img/laptop.svg";
    divEquipo.appendChild(img)
    p = document.createElement('p');
    p.appendChild(document.createTextNode('Samsung'))
    divEquipo.appendChild(p)
    
    divModal.appendChild(divEquipo);
    document.getElementById('contenido-alerta-cor').appendChild(divModal);
})

document.getElementById('btn-alepo').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_PING', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-two-colums');

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('SessionExpiryTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('2022-08-13 23:22:08.0'));
    divModal.appendChild(label);
    divModal.appendChild(p);


    label = document.createElement('label');
    label.appendChild(document.createTextNode('StartDateTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('2022-08-12 10:21:58.0'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('UserID'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('1-KC03IGK'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('InterimSessionTime'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('86400'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('UserIP'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('186.30.173.146'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    label = document.createElement('label');
    label.appendChild(document.createTextNode('NASIdentifier'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode('BOCUJUM96001'));
    divModal.appendChild(label);
    divModal.appendChild(p);

    document.getElementById('contenido-alerta-cor').appendChild(divModal);


})

document.getElementById('change-name-ont').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });
    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Cambiar Nombre'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Nombre de RED WIFI (SSID): '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 1 a 32 caracteres";
    input.setAttribute('id', 'namessid')
    document.getElementById('con-modal-ont-sopo').appendChild(input)
    $('.btn-ont-sopo').addClass('btn-change-name');
    let btn = document.querySelector('.btn-change-name');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        canssid = verificacionlenght(document.getElementById('namessid'));
        if(canssid){
            $( document ).ready(function() {
                $('#modal-serv-ont-act').modal('hide')
                modalExitoSoporte('WIFI (Red)', true, true);
                // document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
                bd.datos.ssid = document.getElementById('namessid').value;
                $('#Nombre-red-ont-so').empty();
                document.getElementById('Nombre-red-ont-so').appendChild(document.createTextNode(bd.datos.ssid));
            });
        }else{
            alert('Complete todos los campos');
            // $( document ).ready(function() {
            //     $('#modal-verif').modal('toggle')
            // });
        }
    })
})

document.getElementById('change-name-wifi').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });
    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('CONSULTA WIFI RED'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Nombre de RED WIFI (SSID): '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 1 a 32 caracteres";
    input.setAttribute('id', 'namessid')
    document.getElementById('con-modal-ont-sopo').appendChild(input)
    $('.btn-ont-sopo').addClass('btn-change-name');
    let btn = document.querySelector('.btn-change-name');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        canssid = verificacionlenght(document.getElementById('namessid'));
        if(canssid){
            $( document ).ready(function() {
                $('#modal-serv-ont-act').modal('hide')
                modalExitoSoporte('WIFI (Red)', true, true);
                document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
                bd.datos.ssid = document.getElementById('namessid').value;
                $('#Nombre-red-ont-so').empty();
                document.getElementById('Nombre-red-ont-so').appendChild(document.createTextNode(bd.datos.ssid));
            });
        }else{
            alert('Complete todos los campos');
            // $( document ).ready(function() {
            //     $('#modal-verif').modal('toggle')
            // });
        }
    })
})

document.getElementById('change-pass-ont').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Cambiar Contraseña'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Clave WIFI: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 8 a 63 caracteres";
    input.setAttribute('id', 'pass')
    document.getElementById('con-modal-ont-sopo').appendChild(input)


    $('.btn-ont-sopo').addClass('btn-change-pass');
    let btn = document.querySelector('.btn-change-pass');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        canssid = verificacionlenghtCondi(document.getElementById('pass'), 8, 63);
        if(canssid){
            $( document ).ready(function() {
                $('#modal-serv-ont-act').modal('hide')
                modalExitoSoporte('WIFI (clave)', true, true);
                document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
                bd.datos.password = document.getElementById('pass').value;
            });
        }else{
            alert('Complete todos los campos');
            // $( document ).ready(function() {
            //     $('#modal-verif').modal('toggle')
            // });
        }
    })
})

document.getElementById('change-pass-wifi').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Cambiar Contraseña'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Clave WIFI: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 8 a 63 caracteres";
    input.setAttribute('id', 'namessid')
    document.getElementById('con-modal-ont-sopo').appendChild(input)


    $('.btn-ont-sopo').addClass('btn-change-pass');
    let btn = document.querySelector('.btn-change-pass');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        canssid = verificacionlenghtCondi(document.getElementById('namessid'), 8, 63);
        if(canssid){
            $( document ).ready(function() {
                $('#modal-serv-ont-act').modal('hide')
                modalExitoSoporte('WIFI (clave)', true, true);
                document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
                bd.datos.password = document.getElementById('namessid').value;
            });
        }else{
            alert('Complete todos los campos');
        }
    })
})

document.getElementById('change-all-ont').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Cambiar Nombre y Contraseña'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Nombre de Red (SSID): '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 1 a 32 caracteres";
    input.setAttribute('id', 'namessid')
    document.getElementById('con-modal-ont-sopo').appendChild(input)

    label = document.createElement('label');
    label.appendChild(document.createTextNode('Clave WIFI: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 8 a 63 caracteres";
    input.setAttribute('id', 'passw')
    document.getElementById('con-modal-ont-sopo').appendChild(input)


    $('.btn-ont-sopo').addClass('btn-change-name');
    let btn = document.querySelector('.btn-change-name');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        canssid = verificacionlenght(document.getElementById('namessid'));
        canpass = verificacionlenghtCondi(document.getElementById('passw'), 8, 63);
        if(canssid && canpass){
            $( document ).ready(function() {
                $('#modal-serv-ont-act').modal('hide')
                modalExitoSoporte('Cambiar nombre y contraseña', true, true);
                bd.datos.ssid = document.getElementById('namessid').value;
                bd.datos.password = document.getElementById('passw').value;
                $('#Nombre-red-ont-so').empty();
                document.getElementById('Nombre-red-ont-so').appendChild(document.createTextNode(bd.datos.ssid));
                // document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
            });
        }else{
            alert('Complete todos los campos');
            // $( document ).ready(function() {
            //     $('#modal-verif').modal('toggle')
            // });
        }
    })
})

document.getElementById('change-all-wifi').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Cambiar Nombre y Contraseña'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Nombre de Red (SSID): '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 1 a 32 caracteres";
    input.setAttribute('id', 'namessid')
    document.getElementById('con-modal-ont-sopo').appendChild(input)

    label = document.createElement('label');
    label.appendChild(document.createTextNode('Clave WIFI: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 8 a 63 caracteres";
    input.setAttribute('id', 'passssid')
    document.getElementById('con-modal-ont-sopo').appendChild(input)


    $('.btn-ont-sopo').addClass('btn-change-name');
    let btn = document.querySelector('.btn-change-name');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        canssid = verificacionlenght(document.getElementById('namessid'));
        canpass = verificacionlenghtCondi(document.getElementById('passssid'), 8, 63);
        if(canssid && canpass){
            $( document ).ready(function() {
                $('#modal-serv-ont-act').modal('hide')
                modalExitoSoporte('Cambiar nombre y contraseña', true, true);
                bd.datos.ssid = document.getElementById('namessid').value;
                bd.datos.password = document.getElementById('passssid').value;
                $('#Nombre-red-ont-so').empty();
                document.getElementById('Nombre-red-ont-so').appendChild(document.createTextNode(bd.datos.ssid));
                // document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
            });
        }else{
            alert('Complete todos los campos');
            // $( document ).ready(function() {
            //     $('#modal-verif').modal('toggle')
            // });
        }
    })
})

document.getElementById('change-norm-wifi2').addEventListener('click', event=>{

    $(document).ready(function() {
        $('#modal-nor').modal('toggle')
    });

    var semaforo = document.getElementById('sem2');
    semaforo.classList.remove('semaforo-error');
    semaforo.classList.add('semaforo-co');

    // Cambiar el texto del span de "Inactivo" a "Activo"
    var estadoRed = document.getElementById('estado-red');
    estadoRed.textContent = 'Activo';

})

document.getElementById('change-norm-wifi5').addEventListener('click', event=>{

    $(document).ready(function() {
        $('#modal-nor').modal('toggle')
    });

    var semaforo5 = document.getElementById('sem5');
    semaforo5.classList.remove('semaforo-error');
    semaforo5.classList.add('semaforo-co');

    // Cambiar el texto del span de "Inactivo" a "Activo"
    var estadoRed = document.getElementById('estado-red5');
    estadoRed.textContent = 'Activo';

})

document.getElementById('btn-consulta-name-wifi').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_PING', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-two-colums');

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('NombreRed'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode(bd.datos.ssid));
    divModal.appendChild(label);
    divModal.appendChild(p);

    document.getElementById('contenido-alerta-cor').appendChild(divModal);
})

document.getElementById('btn-consulta-estado-wifi').addEventListener('click', event =>{
    modalExitoSoporte('CON_BTN_INT_PING', true, true);
    document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
    let divModal = document.createElement('div');
    $(divModal).addClass('con-two-colums');

    let label = document.createElement('label');
    label.appendChild(document.createTextNode('EstadoRed'))
    label.style.color = "#F36F31";
    label.style.fontWeight = "bold";
    let p = document.createElement('p');
    p.style.fontWeight = "600";
    p.style.color = "#46b8da";
    p.appendChild(document.createTextNode(bd.datos.estado));
    divModal.appendChild(label);
    divModal.appendChild(p);

    document.getElementById('contenido-alerta-cor').appendChild(divModal);
})

document.getElementById('change-estado-wifi-ont').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Cambiar Estado WIFI'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Clave WIFI: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let select = document.createElement('select');
    select.setAttribute('id', 'estado-red-select');
    let valores = ['Activar', 'Inactivar'];
    addselect(valores, select);
    document.getElementById('con-modal-ont-sopo').appendChild(select)


    $('.btn-ont-sopo').addClass('btn-change-estado-wifi');
    let btn = document.querySelector('.btn-change-estado-wifi');
    btn.addEventListener('click', event=> {
        ocultarHablador();

        $('#modal-serv-ont-act').modal('hide')
        modalExitoSoporte('Estado Red', true, true);
        bd.datos.estado = document.getElementById('estado-red-select').value == 'Activar' ? 'Encendido' : 'Inactivo';
        $('#semaforo-estado').removeClass(bd.datos.estado == 'Encendido' ? 'semaforo-error' : 'semaforo-co')
        $('#semaforo-estado').addClass(bd.datos.estado == 'Encendido' ? 'semaforo-co' : 'semaforo-error');
        $('#estado-red').empty();
        document.getElementById('estado-red').appendChild(document.createTextNode(bd.datos.estado == 'Encendido' ? 'Activo' : 'Inactivo'))
    })
})

document.getElementById('change-encryp-ont').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Cambiar Tipo Encriptación'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Password: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)

    let input = document.createElement('input');
    input.type = "text";
    input.placeholder = "De 8 a 32 caracteres";
    input.setAttribute('id', 'pass')
    document.getElementById('con-modal-ont-sopo').appendChild(input)

    label = document.createElement('label');
    label.appendChild(document.createTextNode('Modo Encriptación: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    let select = document.createElement('select');
    let valores = ['AES', 'TKIP', 'TKIP + AES'];
    addselect(valores, select);
    select.setAttribute('id', 'encrypt')
    document.getElementById('con-modal-ont-sopo').appendChild(select)


    $('.btn-ont-sopo').addClass('btn-change-encrip');
    let btn = document.querySelector('.btn-change-encrip');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        canssid = verificacionlenghtCondi(document.getElementById('pass'), 8, 32);
        if(canssid){
            $( document ).ready(function() {
                $('#modal-serv-ont-act').modal('hide')
                modalExitoSoporte('Cambiar Tipo Encriptación', true, true);
                // document.getElementById('tittle-main-exit').appendChild(document.createTextNode('Consulta: '));
                bd.datos.password = document.getElementById('pass').value;
                bd.datos.encriptacion = document.getElementById('encrypt').value;
                $('#encrypt-table').empty();
                document.getElementById('encrypt-table').appendChild(document.createTextNode(document.getElementById('encrypt').value));
            });
        }else{
            alert('Complete todos los campos');
        }
    })
})

document.getElementById('btn-reset-codigo').addEventListener('click', event=>{
    $(document).ready(function() {
        $('#modal-serv-ont-act').modal('toggle')
    });

    $('#con-modal-ont-sopo').empty();
    $('#tittle-ont-sop').empty();
    document.getElementById('tittle-ont-sop').appendChild(document.createTextNode('Reset CÃ³digo Secreto'));
    let label = document.createElement('label');
    label.appendChild(document.createTextNode('Código Secreto: '))
    document.getElementById('con-modal-ont-sopo').appendChild(label)
    
    input = document.createElement('input');
    input.type = "number";
    input.placeholder = "4 Digitos";
    input.setAttribute('id', 'code-secrect')
    document.getElementById('con-modal-ont-sopo').appendChild(input)


    $('.btn-ont-sopo').addClass('btn-code-change');
    let btn = document.querySelector('.btn-code-change');
    btn.addEventListener('click', event=> {
        ocultarHablador();
        modalExitoSoporte('Reset Código Secreto', false, true)
        $('#modal-serv-ont-act').modal('hide')
    })
})

document.getElementById('btn-norm-subs-id').addEventListener('click', event=>{

    // $('#modal-serv-ont-act').modal('hide')
    modalExitoSoporte('Normalizar Estado Subscriber ID', false, true);
    bd.datos.tv.estado = "Activo"; 

    $('#semaforo-estado-tv').addClass(bd.datos.tv.estado == 'Activo' ? 'semaforo-error' : 'semaforo-co');
    $('#semaforo-estado-tv').removeClass(bd.datos.tv.estado == 'Activo' ? 'semaforo-error' : 'semaforo-co');
    $('#estado-tv').empty();
    document.getElementById('estado-tv').appendChild(document.createTextNode(bd.datos.tv.estado == 'Activo' ? 'Activo' :   'Suspendido'))
})

// Sidebar
let elementsSidebar = document.getElementsByClassName('ico-element-sidebar-so');
let itemSidebar = document.getElementsByClassName('item-sidebar-sop');
for (let i = 0; i < elementsSidebar.length; i++) {
        elementsSidebar[i].addEventListener('mouseover', event => {
        $(itemSidebar[i]).addClass('item-sop-show');
    })
    elementsSidebar[i].addEventListener('mouseout', event => {
        $(itemSidebar[i]).removeClass('item-sop-show');
    })
}
function AbrirModalConsulta(idModal){
    if(estadoPqr){
        estadoPqr = false;
        $(`#${idModal}`).removeClass('deshide');
        document.getElementById("modal-body-soporte").style['overflow-y'] = "scroll";
        window.scrollTo(0,0)
        sidebarSoporte.style.display = "grid";
        ocultarHablador();
    }else{
        document.getElementById("modal-body-soporte").style['overflow-y'] = "hidden";
        $(`#${idModal}`).addClass('deshide');
        estadoPqr = true;
        window.scrollTo(0,0)
        sidebarSoporte.style.display = "none";
    }
}
function modalLog(idModal){
    if(estadoLog){
        estadoLog = false;
        $(`#${idModal}`).removeClass('deshide');
        document.getElementById("modal-body-soporte").style['overflow-y'] = "scroll";
        window.scrollTo(0,0);
        sidebarSoporte.style.display = "grid";
        $('#tbody-log').empty();
        $('#con-sopo-log').addClass('hide-body');
        
        ocultarHablador();
    }else{
        document.getElementById("modal-body-soporte").style['overflow-y'] = "hidden";
        $(`#${idModal}`).addClass('deshide');
        estadoLog = true;
        window.scrollTo(0,0)
        sidebarSoporte.style.display = "none";
        $('#tbody-log').empty();
        let tr = document.createElement('tr');
        let td = document.createElement('td');

        bd.log.forEach(element=>{
            tr = document.createElement('tr');
            td = document.createElement('td');
            td.appendChild(document.createTextNode(element['fechaInicio']))
            tr.appendChild(td);

            td = document.createElement('td');
            td.appendChild(document.createTextNode(element['fechaFin']))
            tr.appendChild(td);

            td = document.createElement('td');
            td.appendChild(document.createTextNode(element['comando']))
            tr.appendChild(td);

            td = document.createElement('td');
            td.appendChild(document.createTextNode(element['descripcion']))
            tr.appendChild(td);

            td = document.createElement('td');
            td.appendChild(document.createTextNode(element['tipoComando']))
            tr.appendChild(td);

            td = document.createElement('td');
            td.appendChild(document.createTextNode(element['Respuesta']))
            tr.appendChild(td);
            
            console.log(tr);
            document.getElementById('tbody-log').appendChild(tr);
        })
    }
}
document.getElementById('btn-session-actived').addEventListener('click', event =>{
    bd.datos.sesionActiva = true;
    $('#sesionActiva').empty();
    document.getElementById('sesionActiva').appendChild(document.createTextNode('SR-21490464'));
    $('#semafaro-sesion').addClass(bd.datos.sesionActiva ? 'semaforo-co' : 'semaforo-error');
})
document.getElementById('btn-norm-se-secun').addEventListener('click', event =>{
    bd.datos.servSecundarios = true;
    // $('#sesionActiva').empty();
    // document.getElementById('sesionActiva').appendChild(document.createTextNode('SR-21490464'));
    $('#semaforo-serv-secundarios').addClass(bd.datos.servSecundarios ? 'semaforo-co' : 'semaforo-error');
})

document.getElementById('btn-norm-tel-modem').addEventListener('click', event =>{
    bd.datos.servSecundarios = true;
    // $('#sesionActiva').empty();
    // document.getElementById('sesionActiva').appendChild(document.createTextNode('SR-21490464'));
    $('#semaforo-tel-modem').addClass(bd.datos.servSecundarios ? 'semaforo-co' : 'semaforo-error');
})

function action_prueba_d() {
    if(estadodrownprueba){
        $('#dropdrown-act-prueba').removeClass('deshide');
        estadodrownprueba = false;
    }else{
        $('#dropdrown-act-prueba').addClass('deshide');
        estadodrownprueba = true;
    }
}

function btn_flujo() {
    $(document).ready(function() {
        $('#modal-flujo').modal('toggle')
    }); 
}


function btn_flujoheader() {
    $( document ).ready(function() {
        $('#modal-flujo').modal('hide')
    });  
}

function btn_masive() {
    $(document).ready(function() {
        $('#modal-masive').modal('toggle')
    }); 
}

function veci() {

    $('#sen1').css('display','none')
    $('#sen2').css('display','block')
    $('#ate1').css('display','none')
    $('#ate2').css('display','block')

}

function modalExitoSoporteSolucionado(){
    $('#content-soluic').css('display', 'block')
    $( document ).ready(function() {
        $('#modal-exito-solucionado').modal('toggle')
        });
        $( document ).ready(function() {
            $('#modal-info-soluci').modal('toggle')
            });
    var today = new Date();
 
    // obtener la fecha y la hora
    var now = today.toLocaleString();
    let textTitulo = 'ACTUALIZACIÓN DE LA VISITA';
    // Logs
    tempLog = {
        id: identificadorLogs,
        fechaInicio: now,
        fechaFin: now,
        comando: `ACC_BTN_${textTitulo}`,
        descripcion: textTitulo,
        tipoComando: 'Estado Plataforma',
        Respuesta: 'Response: OK',
    }
    identificadorLogs = identificadorLogs + 1;
    bd.log.push(tempLog);
    $('#tbody-logs').empty();
    bd.log.forEach(element=>{
        tr = document.createElement('tr');
        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaInicio']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaFin']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['comando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['descripcion']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['tipoComando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['Respuesta']))
        tr.appendChild(td);
        
        document.getElementById('tbody-logs').appendChild(tr);
    })
}

function modalExitoSoporteSolucionado2(){

    $('#modal-exito-solucionado4').modal('hide')
    $('#modal-soluic').css("display","block")
    $('#modal-ad').css("display","none")
    $('#tab-inic').css("display","none")

    var today = new Date();
 
    // obtener la fecha y la hora
    var now = today.toLocaleString();
    let textTitulo = 'ACTUALIZACIÓN DE LA VISITA';
    // Logs
    tempLog = {
        id: identificadorLogs,
        fechaInicio: now,
        fechaFin: now,
        comando: `ACC_BTN_${textTitulo}`,
        descripcion: textTitulo,
        tipoComando: 'Estado Plataforma',
        Respuesta: 'Response: OK',
    }
    identificadorLogs = identificadorLogs + 1;
    bd.log.push(tempLog);
    $('#tbody-logs').empty();
    bd.log.forEach(element=>{
        tr = document.createElement('tr');
        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaInicio']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaFin']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['comando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['descripcion']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['tipoComando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['Respuesta']))
        tr.appendChild(td);
        
        document.getElementById('tbody-logs').appendChild(tr);

        habladorText("Ingresa los datos solicitados y selecciona todas las casillas");
        
    })

}

function modalExitoSoporteSolucionado3(){

    $( document ).ready(function() {
        $('#modal-exito-solucionado3').modal('hide')
        $('#modal-soluic').modal("hide")
        $('#fond').css("overflow-y","hidden")
    });

    $('#modal-soluic2').modal("toggle")

    $('#modal-soluic').css('z-index','0')
    var today = new Date();
 
    // obtener la fecha y la hora
    var now = today.toLocaleString();
    let textTitulo = 'ACTUALIZACIÓN DE LA VISITA';
    // Logs
    tempLog = {
        id: identificadorLogs,
        fechaInicio: now,
        fechaFin: now,
        comando: `ACC_BTN_${textTitulo}`,
        descripcion: textTitulo,
        tipoComando: 'Estado Plataforma',
        Respuesta: 'Response: OK',
    }
    identificadorLogs = identificadorLogs + 1;
    bd.log.push(tempLog);
    $('#tbody-logs').empty();
    bd.log.forEach(element=>{
        tr = document.createElement('tr');
        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaInicio']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['fechaFin']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['comando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['descripcion']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['tipoComando']))
        tr.appendChild(td);

        td = document.createElement('td');
        td.appendChild(document.createTextNode(element['Respuesta']))
        tr.appendChild(td);
        
        document.getElementById('tbody-logs').appendChild(tr);
    })

}

function btn_solucion() {

    $( document ).ready(function() {
        $('#modal-exito-solucionado3').modal('toggle')
        alert("La ONT se encuentra en estado Fallido y/o potencia fuera de los umbrales, debe recategorizar la PQR, a lo siguientes: \n" + "\n" + "PRODUCTO: PAQUETE DE SERVICIOS " + "\n" + "CAUSAL: SIN VOZ /SIN DATOS / SIN TV " + "\n" + "SINTOMA: FALLA GENERAL DE SERVICIO ")
    });
    
}

function btn_solucion_2() {

    $( document ).ready(function() {
        $('#modal-exito-solucionado3').modal('toggle')
    });
    
}

function btn_solucionPartII() {
    $( document ).ready(function() {
        $('#modal-info-soluci').modal('hide')
        $('#modal-soluic').css('z-index','1060')
    });
}

function btn_exito3() {
    $( document ).ready(function() {
        $('#modal-exito-solucionado2').modal('hide')
    });  
}

document.getElementById('btn_exito').addEventListener('click', event=>{
    if(document.getElementById('val_agenda').value != '' && document.getElementById('val_agenda').value != ' '){
        document.getElementById('form_pqr_solu').submit();

    }else{
        $( document ).ready(function() {
        $('#modal-info-soluci').modal('toggle')
        });
    }
})

function btn_exito4() {
    $( document ).ready(function() {
        $('#modal-exito-solucionado2').modal('hide')
        $('#no').css('display', 'none')
        $('#no2').css('display', 'block')
    }); 
}

function res() {
    $( document ).ready(function() {
        $('#modal-reapro').modal('toggle')
        $('#modal-exito-solucionado2').css('z-index','0')
    });
}

function modalnoso(){
    $( document ).ready(function() {
        $('#modal-exito-solucionado2').modal('toggle')
    })
};

function no2() {
    $( document ).ready(function() {
        $('#modal-exito-solucionado4').modal('toggle')
    });
}

function so() {
    $('#modal-ad').modal('toggle')
}   

function solu() {
    $('#modal-ad').modal('hide')
    $('#modal-soluic').modal('toggle')
}

var isVisible = false;

function btn_datos() {
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

function btn_datos2() {
    $('#modal-soluic2').modal('hide')
    $('#modal-exito-solucionado44').modal('toggle') 
}

function datos() {
    $('#modal-soluic2').modal('hide')
    $('#modal-soluic3').modal('toggle')
    $('#modal-soluic3').css('z-index','1060')
}

function datos2() {
    $('#modal-soluic2').modal('hide')
    $('#modal-soluic33').modal('toggle')
    $('#modal-soluic33').css('z-index','1060')
}

function verificarDT(){    
    $( document ).ready(function() {
        $('#modal-ace').modal('toggle')
        $('#modal-soluic3').css('z-index','100')
        $('#fila-datos').css('background-color','rgb(255, 170, 112)')
        $('#fila-datos2').css('background-color','')
    });
}

function verificarDT2(){    
    $( document ).ready(function() {
        $('#modal-ace2').modal('toggle')
        $('#modal-soluic33').css('z-index','100')
        $('#fila-datos2').css('display','table-row')
        $('#fila-datos2').css('background-color','rgb(255, 170, 112)')
        $('#fila-datos').css('background-color','')
        $('#btn-solucion33').css('display','block')
        $('#btn-solucion3').css('display','none')

        var l1 = document.getElementsByClassName('tipoDocumentoCell');
        var l2 = document.getElementsByClassName('numeroDocumentoCell');
        var l3 = document.getElementsByClassName('direccionCell');
        var l4 = document.getElementsByClassName('autorizacionDatos');

        // Iterar sobre cada elemento encontrado
        for (var i = 0; i < l1.length; i++) {
            // Cambiar el color de fondo de cada elemento
            l1[i].style.backgroundColor = '#c0c0c0';
        
            // Deshabilitar cada elemento
            l1[i].disabled = true;
        }

        for (var i = 0; i < l2.length; i++) {
            // Cambiar el color de fondo de cada elemento
            l2[i].style.backgroundColor = '#c0c0c0';
        
            // Deshabilitar cada elemento
            l2[i].disabled = true;
        }

        for (var i = 0; i < l3.length; i++) {
            // Cambiar el color de fondo de cada elemento
            l3[i].style.backgroundColor = '#c0c0c0';
        
            // Deshabilitar cada elemento
            l3[i].disabled = true;
        }

        for (var i = 0; i < l4.length; i++) {
            // Cambiar el color de fondo de cada elemento
            l4[i].style.backgroundColor = '#c0c0c0';
        
            // Deshabilitar cada elemento
            l4[i].disabled = true;
        }
    });
}

function btn_sig(){

    var optionNoRel = document.getElementById('cun-no-rel');
    var optionRel = document.getElementById('cun-rel');
    var bot = document.getElementById('btn-datos2');

    $( document ).ready(function() { 
        $('#modal-loading').modal('toggle')
        $('#modal-exito-solucionado44').css('z-index','0')
        setTimeout(() => {
            $( document ).ready(function() {
                $('#modal-loading').modal('hide')
                $('#modal-exito-solucionado44').modal('hide')
                $('#modal-soluic2').modal('toggle')
                optionNoRel.style.display = 'none';
                optionRel.style.display = 'block';
                optionRel.selected = true;
                bot.disabled = true;
                $('#label2').css('background-color', '#c0c0c0');
            });
          }, "4000"); 
    });
}

function btn_sig2(){

    var soliNoRel = document.getElementById('sol-no-rel');
    var soliRel = document.getElementById('sol-rel');
    var d = document.getElementById('table-datos');
    var l2 = document.getElementById('label3');

    $( document ).ready(function() { 
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
            $( document ).ready(function() {
                $('#modal-loading').modal('hide')
                $('#modal-ace').modal('hide')
                $('#modal-soluic3').modal('hide')
                $('#modal-soluic33').modal('hide')
                $('#modal-soluic2').modal('toggle')
                $('#btn-solucion2').css('top', '630px')
                soliNoRel.style.display = 'none';
                soliRel.style.display = 'block';
                soliRel.selected = true;
                d.style.display = 'none';
                l2.style.backgroundColor = '#c0c0c0';
            });
          }, "4000"); 
    });
}

function btn_sig3(){

    var soliNoRel = document.getElementById('sol-no-rel');
    var soliRel = document.getElementById('sol-rel2');
    var d = document.getElementById('table-datos');
    var l2 = document.getElementById('label3');

    $( document ).ready(function() { 
        $('#modal-loading').modal('toggle')
        setTimeout(() => {
            $( document ).ready(function() {
                $('#modal-loading').modal('hide')
                $('#modal-ace2').modal('hide')
                $('#modal-soluic3').modal('hide')
                $('#modal-soluic33').modal('hide')
                $('#modal-soluic2').modal('toggle')
                $('#btn-solucion2').css('top', '630px')
                soliNoRel.style.display = 'none';
                soliRel.style.display = 'block';
                soliRel.selected = true;
                d.style.display = 'none';
                l2.style.backgroundColor = '#c0c0c0';
            });
          }, "4000"); 
    });
}

function btn_solucion2() {
    var v = document.getElementById('label2').value;
    var v2 = document.getElementById('label3').value;

    var age = document.getElementById('ages').value;
    var age2 = document.getElementById('ages2').value;
    var age3 = document.getElementById('ages3').value;
    var age4 = document.getElementById('ages4').value;
    var age5 = document.getElementById('ages5').value;
    var v3 = age + age2 + age3 + age4 + age5;

    if (v == 1 && v2 == 1 && v3 >= 5) {
        alert("¿ Desea escalar a segundo nivel ?")
        $('#modal-loading').modal('toggle')
        $('#modal-soluic2').css('z-index','1000')
        setTimeout(() => {
            $( document ).ready(function() {
                $('#modal-loading').modal('hide')
                $('#modal-soluic2').modal('hide')
                $('#modal-info-soluci2').modal('toggle')
            });
          }, "4000");  
    }else{
        $( document ).ready(function() {
            $('#modal-pre').modal('toggle')
            $('#modal-soluic2').css('z-index','1000')
        });
    }        
}

function btn_solucion22() {
    var v = document.getElementById('label2').value;
    var v2 = document.getElementById('label3').value;

    var age = document.getElementById('ages').value;
    var age2 = document.getElementById('ages2').value;
    var age3 = document.getElementById('ages3').value;
    var age4 = document.getElementById('ages4').value;
    var age5 = document.getElementById('ages5').value;
    var v3 = age + age2 + age3 + age4 + age5;

    if (v == 1 && v2 == 1 && v3 >= 5) {
        $('#modal-loading').modal('toggle')
        $('#modal-soluic2').css('z-index','1000')
        setTimeout(() => {
            $( document ).ready(function() {
                $('#modal-loading').modal('hide')
                $('#modal-soluic2').modal('hide')
                $('#modal-info-soluci2').modal('toggle')
            });
          }, "4000");  
    }else{
        $( document ).ready(function() {
            $('#modal-pre').modal('toggle')
            $('#modal-soluic2').css('z-index','1000')
        });
    }        
}

function btn_solucion3() {

        $('#modal-loading').modal('toggle')
        $('#modal-soluic5').css('z-index','1000')
        setTimeout(() => {
            $( document ).ready(function() {
                $('#modal-loading').modal('hide')
                $('#modal-fase1').modal('toggle')
            });
          }, "4000"); 

}

function btn_solucion2PartII() {
    $( document ).ready(function() {
        $('#modal-pre').modal('hide')
        $('#modal-soluic2').css('z-index','1060')
    }); 
}

function btn_fa() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            location.href='./portalFTTHPartII.php';
        });
      }, "4000"); 
}

function btn_solucion5() {
    $( document ).ready(function() {
        $('#modal-loading').modal('toggle')
        $('#modal-soluic3').css('z-index','100')
        $('#modal-soluic33').css('z-index','100')
        setTimeout(() => {
            $('#modal-loading').modal('hide')
            $('#modal-soluic3').css('display', 'none')
            $('#modal-soluic33').css('display', 'none')
            $('#modal-soluic2').modal('toggle')
            $('#modal-soluic2').css('display', 'block')
    }, "4000");

    });
}

function btn_solucion6() {
    $( document ).ready(function() {
        $('#modal-loading').modal('toggle')
        $('#modal-soluic33').css('z-index','100')
        setTimeout(() => {
            $('#modal-loading').modal('hide')
            $('#modal-soluic33').css('display', 'none')
            $('#modal-soluic2').modal('toggle')
            $('#modal-soluic2').css('display', 'block')
    }, "4000");

    });
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
      '<p style="margin: 0; padding: 0; margin-left: 10px;">' + monthNames[month] + " " + currentYear + '</p>' +
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

function agen0() {
    $('#modal-loading').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-loading').modal('hide')
            $('#modal-soluic4').modal('toggle')
        });
    }, "4000");  
}

function agen() {
    $( document ).ready(function() {
    $('#modal-soluic4').css('z-index','1000')
    $('#modal-info2').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            $('#modal-info2').modal('hide')
            $('#modal-info3').modal('toggle')
        });
    }, "4000"); 
    
})

}

function agen2() {
    $( document ).ready(function() {
        $('#modal-info4').modal('toggle')
    });
}

function agen3() {
    $( document ).ready(function() {
    $('#modal-info5').modal('toggle')
    setTimeout(() => {
        $( document ).ready(function() {
            location.href = './reportarFallaPartII.php'
        });
    }, "4000"); 
    
})
}

function inter1() {

    $('#modal-reapro-serv').modal('toggle');

    $('#internet1').css('display', 'none');
    $('#internet2').css('display', '');

    $('#internet3').css('display', 'none');
    $('#internet4').css('display', '');

    $('#internet5').css('display','none');
    $('#internet6').css('display', '');

    $('#internet7').css('display','none');
    $('#internet8').css('display', '');
}

function inter2() {

    $('#modal-reapro-serv').modal('toggle');
    $('#internet5').css('display','none');
    $('#internet6').css('display','');

}

function inter3() {

    $('#modal-reapro-serv').modal('toggle');

    $('#ton1').css('display', 'none');
    $('#ton2').css('display', '');

}

function inter4() {

    $('#modal-reapro-serv').modal('toggle');

    $('#ton3').css('display','none');
    $('#ton4').css('display','');
    
}

function inter5() {

    $('#modal-reapro-serv').modal('toggle');
    
}

function inter6() {

    $('#modal-reapro-serv2').modal('toggle');
    
}

function consult() {

    var c = document.getElementById('don').value;

    if (c === "1000842659") {
        $('#con2').css('display','block') 
    }else{
        console.log('Sin Dato o Dato Incorrecto')
    }
    
}

function ipphone() {
    $('#ip1_1').css('display', ''); 
    $('#ip2_1').css('display', 'none');  

    $('#ip1_2').css('display', '');  
    $('#ip2_2').css('display', 'none');  

    $('#ip5_1').css('display', '');  
    $('#ip6_1').css('display', 'none');  
}

function ipphone2() {
    $('#ip3_1').css('display', ''); 
    $('#ip4_1').css('display', 'none');  

    $('#ip3_2').css('display', '');  
    $('#ip4_2').css('display', 'none');  

    $('#ip5_2').css('display', '');  
    $('#ip6_2').css('display', 'none');  
}




















        






   