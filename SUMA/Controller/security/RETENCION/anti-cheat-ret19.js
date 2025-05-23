$(document).ready(function() {
    console.log("Documento listo.");

    // Incrementar el contador de pestañas
    var tabsCount137 = parseInt(localStorage.getItem("tabsCount137")) || 0;
    tabsCount137++;
    localStorage.setItem("tabsCount137", tabsCount137);

    console.log("Nuevo valor de tabsCount137:", tabsCount137);

    // Verificar si se excede el límite de pestañas permitidas
    var maxTabs = 1; // Máximo número de pestañas permitidas

        // Marcar el archivo como abierto en una pestaña
        localStorage.setItem("fileOpened", true);

        // Verificar si se excede el límite de pestañas permitidas
        if (tabsCount137 > maxTabs) {
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
                localStorage.removeItem("tabsCount137");

            // Reiniciar el contador si no hay otras pestañas abiertas
            if (tabsCount137 === 1) {
                localStorage.setItem("tabsCount137", 0);
            }
            });
        }
});

function red() {
    window.location.href="";
}