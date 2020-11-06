jQuery(document).ready(function () {
    let startAnimation = $('.payment__video-hover');
    let stopAnimation = $('.payment__video-unhover');

    $('.payment__item').mouseover(function () {
        $(this).find(startAnimation)[0].play();
    }).mouseout(function () {
        $(this).find(startAnimation).removeClass('payment__video-visible');
        $(this).find(startAnimation)[0].currentTime = 0;
        $(this).find(stopAnimation).addClass('payment__video-visible');
        $(this).find(stopAnimation)[0].play();
        $(this).find(stopAnimation).on('ended', function () {
            $(this).removeClass('payment__video-visible');
            $(this).siblings(startAnimation).addClass('payment__video-visible');
        })
    })
});
