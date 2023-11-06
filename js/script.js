document.addEventListener("DOMContentLoaded", function () {

    var swiper1 = new Swiper(".swiper-container-1", {
        effect: 'fade',

        loop: true,
        autoplay: {
            delay: 3000,
        },
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper('.swiper-container-2', {

        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            400: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            700: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            950: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1350: {
                slidesPerView: 4,
                spaceBetween: 20

            },
            1450: {
                slidesPerView: 5,
                spaceBetween: 20

            },
            1680: {
                slidesPerView: 5,
                spaceBetween: 20
            },
            1730: {
                slidesPerView: 6,
                spaceBetween: 0
            }
        }
    });
});




// Obtener el modal y el botón de cierre
const modal = document.getElementById("myModal")
const btn = document.getElementById("modalBtn")
const span = document.getElementsByClassName("close")[0]

// Abrir el modal cuando se haga clic en el botón
btn.onclick = function () {
    modal.style.display = "block";
}

// Cerrar el modal cuando se haga clic en la 'x'
span.onclick = function () {
    modal.style.display = "none";
}

// Cerrar el modal cuando se haga clic fuera de él
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

const enviarBtn = document.getElementById("enviarBtn")
const errorMessage = document.getElementById("error-message")


enviarBtn.addEventListener("click", function () {
    const nombre = document.getElementById("nombre").value;
    const apellidos = document.getElementById("apellidos").value;
    const direccion = document.getElementById("direccion").value;
    const correo = document.getElementById("correo").value;
    const telefono = document.getElementById("telefono").value;
    if (!nombre || !apellidos || !direccion || !correo || !telefono) {
        errorMessage.style.display = "block";
        errorMessage.textContent = "Por favor, complete todos los campos."
    } else {
        errorMessage.style.display = "none";
        errorMessage.textContent = ""; // Limpiar el mensaje de error si es necesario
        console.log("Formulario válido. Nombre: " + nombre + ", Apellidos: " + apellidos + ", Dirección: " + direccion + ", Correo: " + correo + ", Teléfono: " + telefono);
        modal.style.display = "none";
    }
})