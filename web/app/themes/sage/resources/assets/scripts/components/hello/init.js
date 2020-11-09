jQuery(document).ready(function () {
    $('.hello__video').on('ended', function () {
        $(this).addClass('hide');
        $('.hello__card').addClass('hello__card-active');
    })
});
