$(document).ready(function () {
    let partnerCardPlace = document.querySelector('.partner__left');
    setInterval(() => {
        console.log(partnerCardPlace.getBoundingClientRect().left);
    }, 33.3);
});
