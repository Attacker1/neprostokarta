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
  const intro = document.querySelector('.experience');
  const video = intro.querySelector('.experience__animation');

  const controller = new ScrollMagic.Controller();

  const scene = new ScrollMagic.Scene({
    duration: 9000,
    triggerElement: intro,
    triggerHook: 0.06,
  })
    .setPin(intro)
    .addTo(controller);

  let scrollPos = 0;

  scene.on('update', e => {
    scrollPos = e.scrollPos / 1000;
  });

  setInterval(() => {
    video.currentTime = scrollPos;
  }, 33.3);

</script>
