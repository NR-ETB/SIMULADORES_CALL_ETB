$( document ).ready(function() {
    $('#modal-loading').modal('toggle')
});
setTimeout(() => {
    $( document ).ready(function() {
        $('#one').css('display','block')
        $('#fle').css('display','block') 
    });
}, "3000");

function clos() {
    $('#one').css('display','none')  
    $('#fle').css('display','none')
    $('#fle2').css('display','block')      
    $('#two').css('display','block')   
}

function clos2() {
    $('#fle2').css('display','none') 
    $('#two').css('display','none') 
    $('#fle3').css('display','block')      
}

function mod() {
    $('#fle3').css('display','none')   
    $('#fle4').css('display','block')   
    $('#three').css('display','block')    
}

function mod2() {
    $('#fle4').css('display','none')   
    $('#fle5').css('display','block')
    $('#m-one').css('display','block')    
}

function mod3() {
    $('#fle5').css('display','none')   
    $('#fle6').css('display','block')
    $('#m-one').css('display','none')  
    $('#m-two').css('display','block')    
}

function mod4() {
    $('#fle6').css('display','none')   
    $('#fle7').css('display','block')
    $('#m-one').css('display','none')  
    $('#m-two').css('display','block')    
}

function mod5() {
    $('#fle6').css('display','none')   
    $('#fle7').css('display','block')
    $('#zo').css('background-color','var(--bblue-etb)')  
    $('#zo').css('color','var(--withe-etb)')    
}

function mod6() {
    $('#fle7').css('display','none')   
    $('#fle8').css('display','block')
    $('#zoch').css('display','none')
    $('#zoch2').css('display','block')
    $('#zzz').removeAttr("disabled")
    $('#zzz').css("border","2px solid var(--bblue-etb)")
}

function mod7() {
    $('#fle8').css('display','none')   
    $('#fle9').css('display','block')
    $('#three').css('display','none') 
    $('#m-two').css('display','none') 
    $('#m-three').css('display','block') 
}

function mod8() {
    $('#fle9').css('display','none')   
    $('#fle10').css('display','block')
    $('#m-three').css('display','none') 
    $('#four').css('display','block')
    $('#ba').css('display','block')
    $('#jake').css('display','none')  
    $('#finn').css('display','block') 
}