
document.addEventListener('DOMContentLoaded', function () {

    eventListeners();
    darkMode();
    eliminarMensajeConfirmacion();

});

function darkMode() {
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');

        // Guardar el estado actual del modo oscuro en el almacenamiento local
        localStorage.setItem('modo-oscuro', document.body.classList.contains('dark-mode'));
    });

    // Obtener el modo oscuro desde el almacenamiento local y aplicarlo
    const modoOscuroGuardado = localStorage.getItem('modo-oscuro') === 'true';
    if (modoOscuroGuardado) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
}
function eventListeners() {

    //Seleccionar el elemento por la clase
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);


}

function navegacionResponsive() {

    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');

    // Guardar el estado actual del modo oscuro en el almacenamiento local
    localStorage.setItem('modo-oscuro', document.body.classList.contains('dark-mode'));


}


function eliminarMensajeConfirmacion() {
    
    const mensaje = document.getElementById('mensaje-confirmacion');

        if (mensaje) {
        setTimeout(() => {
            mensaje.remove();
        },3000)
        console.log("Parrafo Eliminado ...")
    }

}










