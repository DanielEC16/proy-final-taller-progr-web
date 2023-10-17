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
                slidesPerView: 3,
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
                slidesPerView: 6,
                spaceBetween: 20
            }
        }
    });
});



const sede = document.querySelectorAll('.sede')
sede.forEach(function (elemento) {
    elemento.addEventListener('click', function () {
        sede.forEach(function (item) {
            item.classList.remove('sede')
        })
        elemento.classList.add('sede-active')
    })
})