







$('#sede3').click(function () {
    $('iframe').hide()
    $('.map-container').append($('<iframe>', {
        src: 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d975.5894691078408!2d-76.9615412!3d-12.0188651!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1697306464080!5m2!1ses-419!2spe"',
        loading: 'lazy',
        allowfullscreen: '',
        referrerpolicy: 'no-referrer-when-downgrade'
    }))
})
