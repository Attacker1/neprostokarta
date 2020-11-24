$(document).ready(function () {
    if ($('body').width() < 767) {
        $('.footer__item').on('click', function () {
            $(this).toggleClass('footer__item-active');
        })
    }
});
