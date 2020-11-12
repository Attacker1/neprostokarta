jQuery(document).ready(function () {
    $('.hello__video').on('ended', function () {
        $(this).addClass('hide');
        $('.hello__card').addClass('hello__card-active');

        let cardPlace = document.querySelector('.hello__right');
        let helloCardFirst = document.querySelector('.hello__card-svg');

        $(helloCardFirst).css({
            'left': cardPlace.getBoundingClientRect().right - 380,
        });
    })
});
