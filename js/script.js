document.addEventListener("DOMContentLoaded", function () {

    var swiper = new Swiper(".swiper-container-1", {
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
        },
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper-container-2", {
        slidesPerView: 6,
        spaceBetween: 1,
    });
});



const sede = document.querySelectorAll('.sede')
sede.forEach(function(elemento){
    elemento.addEventListener('click',function(){
        sede.forEach(function(item){
            item.classList.remove('sede')
        })
        elemento.classList.add('sede-active')
    })
})