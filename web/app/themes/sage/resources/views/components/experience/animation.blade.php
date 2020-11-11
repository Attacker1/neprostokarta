<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"
        integrity="sha512-HzAEuXwhLxwm/Jj+5ecdjzrRVrjuh2ZeIxyT1Ln37TO5pWNMnKBuU7cfd1wvRQ/k86w1oC174Yk1T7aRlBpIcA=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js"
        integrity="sha512-jlbgjhSLRQsQc/bits6lHjywF3n/NLO3Sz1rwa9gsUnCOi0f0lD/yAul75UNOzIiDg35zaJJ3BKT3zo6+i9lQA=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js"
        integrity="sha512-vWutwDjKJo+VMAA7IrS/ICTmVYXRMdqtXA27MSuPxGjkbYnKeUKPrIpfsAwIXCzaSDF/qRy/L85ko/yxW0AIiA=="
        crossorigin="anonymous"></script>
<script>
  jQuery(document).ready(function () {

    $('.experience__item').first().addClass('experience__item-active').addClass('experience__item-green');

    const intro = document.querySelector('.experience');
    const video = intro.querySelector('.experience__animation');
    const text = document.querySelector('.experience__wrapper');
    const card = document.querySelector('.experience__card');

    const hello = document.querySelector('.hello');
    const helloCard = document.querySelector('.hello__card-svg');
    const paymentDescr = document.querySelector('.payment__descr');

    const controller = new ScrollMagic.Controller();
    let timeline = new TimelineMax();

    const scene = new ScrollMagic.Scene({
      duration: 9000,
      triggerElement: intro,
      triggerHook: 0.06,
    })
      .setPin(intro)
      .addTo(controller);

    const textAnim = TweenMax.fromTo(text, 3, {opacity: 0}, {opacity: 1});
    const cardAnim = TweenMax.fromTo(card, 3, {opacity: 0}, {opacity: 1});
    const helloCardAnim = TweenMax.fromTo(helloCard, 3, {scaleX: 1, scaleY:1, rotation:7}, {scaleX:0.5, scaleY:0.5, rotation:-160});
    const helloCardScale = TweenMax.fromTo(helloCard, 1, {scaleX: 0.5, scaleY:0.5, rotation:-160, zIndex:3}, {scaleX:10, scaleY:10, rotation:-90, zIndex:2, display:'none'});
    timeline.add(textAnim).add(cardAnim);

    let scene2 = new ScrollMagic.Scene({
      duration: 1000,
      triggerElement: intro,
      triggerHook: 0,
    })
    .setTween(timeline)
    .addTo(controller);

    let scene3 = new ScrollMagic.Scene({
      duration: 1600,
      triggerElement: hello,
      triggerHook: 0,
    })
      .setTween(helloCardAnim)
      .addTo(controller);

    let scene4 = new ScrollMagic.Scene({
      duration: 1000,
      triggerElement: paymentDescr,
      triggerHook: 0,
    })
      .setTween(helloCardScale)
      .addTo(controller);

    let scrollPos = 0;
    let offsetExperience = $('.experience').offset().top;
    let item = $('.experience__item');


    scene.on('update', e => {
      if (e.scrollPos > offsetExperience) {
        scrollPos = (e.scrollPos - offsetExperience) / 1000;
      }
    });

    scene.on('progress', e => {
      if(e.progress > 0.25) {
        item.eq(1).addClass('experience__item-active').addClass('experience__item-green');
      }
      else {
        item.eq(1).removeClass('experience__item-active').removeClass('experience__item-green');
      }
      if(e.progress > 0.5) {
        item.eq(2).addClass('experience__item-active').addClass('experience__item-green');
      }
      else {
        item.eq(2).removeClass('experience__item-active').removeClass('experience__item-green');
      }
      if(e.progress > 0.75) {
        item.eq(3).addClass('experience__item-active').addClass('experience__item-green');
      }
      else {
        item.eq(3).removeClass('experience__item-active').removeClass('experience__item-green');
      }
    });


    setInterval(() => {
      video.currentTime = scrollPos;
    }, 33.3);

  });
</script>
