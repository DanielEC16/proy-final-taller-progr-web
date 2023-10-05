<<<<<<< HEAD
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x')
    navbar.classList.toggle('open')
}

=======
document.addEventListener("DOMContentLoaded", function () {
    // Inicializa Swiper
    var swiper = new Swiper(".swiper-container", {
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
        },
    });
});
>>>>>>> 1c77d60 (Cambios totales)
