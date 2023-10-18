

$('#sede1').click(function () {
    $('iframe').hide()
    $('.map-container').append($('<iframe>', {
        src: 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2254.014126264052!2d-77.00427824886506!3d-12.052929071581417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1697655009173!5m2!1ses-419!2spe',
        loading: 'lazy',
        allowfullscreen: '',
        referrerpolicy: 'no-referrer-when-downgrade'
    }))
    $(".sede").removeClass("sede-active")
    $('#sede1').addClass("sede-active")
})
$('#sede2').click(function () {
    $('iframe').hide()
    $('.map-container').append($('<iframe>', {
        src: 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d975.5894691078408!2d-76.9615412!3d-12.0188651!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1697306464080!5m2!1ses-419!2spe',
        loading: 'lazy',
        allowfullscreen: '',
        referrerpolicy: 'no-referrer-when-downgrade'
    }))
    $(".sede").removeClass("sede-active")
    $('#sede2').addClass("sede-active")
})
$('#sede3').click(function () {
    $('iframe').hide()
    $('.map-container').append($('<iframe>', {
        src: 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d975.5894691078408!2d-76.9615412!3d-12.0188651!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1697306464080!5m2!1ses-419!2spe',
        loading: 'lazy',
        allowfullscreen: '',
        referrerpolicy: 'no-referrer-when-downgrade'
    }))
    $(".sede").removeClass("sede-active")
    $('#sede3').addClass("sede-active")
})
$('#sede4').click(function () {
    $('iframe').hide()
    $('.map-container').append($('<iframe>', {
        src: 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3187.9320832963313!2d-77.03134677351251!3d-12.029763276760972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1697654928516!5m2!1ses-419!2spe',
        loading: 'lazy',
        allowfullscreen: '',
        referrerpolicy: 'no-referrer-when-downgrade'
    }))
    $(".sede").removeClass("sede-active")
    $('#sede4').addClass("sede-active")
})


$('#sede5').click(function () {
    $('iframe').hide()
    $('.map-container').append($('<iframe>', {
        src: 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3903.121181773706!2d-77.00752466058339!3d-11.966099749671038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1697654893587!5m2!1ses-419!2spe',
        loading: 'lazy',
        allowfullscreen: '',
        referrerpolicy: 'no-referrer-when-downgrade'
    }))
    $(".sede").removeClass("sede-active")
    $('#sede5').addClass("sede-active")
})


// $('.sede').click(function () {
//     // Ocultar todos los iframes
//     $('iframe').hide();

//     // Obtener el índice del elemento clickeado
//     var index = $('.sede').index(this);

//     // Crear la URL del mapa basado en el índice del elemento clickeado
//     var mapUrl = 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d975.5894691078408!2d-76.9615412!3d-12.0188651!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1697306464080!5m2!1ses-419!2spe';

//     // Agregar el iframe con la URL del mapa
//     $('.map-container').append($('<iframe>', {
//         src: mapUrl,
//         loading: 'lazy',
//         allowfullscreen: '',
//         referrerpolicy: 'no-referrer-when-downgrade'
//     }));

//     // Remover la clase 'sede-active' de todos los elementos y luego agregarla solo al clickeado
//     $('.sede').removeClass('sede-active');
//     $(this).addClass('sede-active');
// });
