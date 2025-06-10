document.addEventListener("DOMContentLoaded", function () {
    // Seleccionamos todos los botones con la clase btn-filtros
    const botones = document.querySelectorAll(".btn-filtros");

    // Recorremos todos los botones y les agregamos el evento
    botones.forEach(boton => {
        boton.addEventListener("click", function (event) {
            event.preventDefault();  // Evita cualquier acción predeterminada
            if (boton.style.border === "2px solid white") {
                boton.style.border = "2px solid #B715A6";  // Vuelve al borde original
            } else {
                boton.style.border = "2px solid white";  // Cambia el borde a blanco
            }
        });
    });
});



