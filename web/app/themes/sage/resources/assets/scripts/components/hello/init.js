jQuery(document).ready(function () {
    let helloCardFirst = document.querySelector('.hello__card-svg');
    let cardPlace = document.querySelector('.hello__right');

    if ($('body').width() > 1023){
        $('.hello__video').on('ended', function () {
            $(this).addClass('hide');
            $('.hello__card').addClass('hello__card-active');
            $(helloCardFirst).css({
                'left': cardPlace.getBoundingClientRect().right - 380,
            });
        })
    }
    if($('body').width() <= 1023 && $('body').width() >= 768){
        $('.hello__card').addClass('hello__card-active');
        $(helloCardFirst).css({
            'left': cardPlace.getBoundingClientRect().right - 350,
        });
    }
    if($('body').width() <= 767){
        $('.hello__card').addClass('hello__card-active');

    }
});
