jQuery(document).ready(function () {
    let startAnimation = $('.payment__video-hover');
    let stopAnimation = $('.payment__video-unhover');

    $('.payment__item').mouseover(function () {
        $(this).find(stopAnimation).removeClass('payment__video-visible');
        $(this).find(startAnimation).addClass('payment__video-visible');
        $(this).find(startAnimation)[0].play();
    }).mouseout(function () {
        $(this).find(startAnimation).removeClass('payment__video-visible');
        $(this).find(startAnimation)[0].currentTime = 0;
        $(this).find(stopAnimation).addClass('payment__video-visible');
        $(this).find(stopAnimation)[0].play();
        $(this).find(stopAnimation).on('ended', function () {
            startAnimation[0].currentTime = 0;
            // $(this).removeClass('payment__video-visible');
            // $(this).siblings(startAnimation).addClass('payment__video-visible');
        })
    })

    if ($('body').width() <= 1023) {
        $('.payment__wrapper').slick({
            slidesToShow: 1,
            infinite: false,
            dots: true,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows : false,
        })
    }
});
