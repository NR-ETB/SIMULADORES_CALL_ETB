$(document).ready(function() {
    console.log("Documento listo.");

    // Incrementar el contador de pestañas
    var tabsCount55 = parseInt(localStorage.getItem("tabsCount55")) || 0;
    tabsCount55++;
    localStorage.setItem("tabsCount55", tabsCount55);

    console.log("Nuevo valor de tabsCount55:", tabsCount55);

    // Verificar si se excede el límite de pestañas permitidas
    var maxTabs = 1; // Máximo número de pestañas permitidas

        // Marcar el archivo como abierto en una pestaña
        localStorage.setItem("fileOpened", true);

        // Verificar si se excede el límite de pestañas permitidas
        if (tabsCount55 > maxTabs) {
            console.log("Excede el límite de pestañas permitidas.");
            $('#modal-loading').modal('toggle');
            setTimeout(function() {
                $('#modal-loading').modal('hide');
                $('#ups').modal('toggle');
                console.log("ACCESO POR MEDIO DE UNA URL COPIADA");
            }, 12000);
            // Redirigir o realizar otras acciones aquí
        } else {
            console.log("Igual al límite de pestañas permitidas o no hay otras pestañas abiertas.");
            console.log("ACCESO POR MEDIO DE LA PLATAFORMA");

            // Manejar el evento unload para restablecer el contador al cerrar la última pestaña
            window.addEventListener('unload', function() {
                console.log("Cerrando pestaña o ventana del navegador.");
                localStorage.removeItem("fileOpened");
            });

            window.addEventListener('unload', function() {
                console.log("Reiniciando Scripts");
                localStorage.removeItem("tabsCount55");

            // Reiniciar el contador si no hay otras pestañas abiertas
            if (tabsCount55 === 1) {
                localStorage.setItem("tabsCount55", 0);
            }
            });
        }
});

function red() {
    window.location.href="";
}