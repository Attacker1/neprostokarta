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
  window.onload = function () {

    const intro = document.querySelector('.experience');
    const helloCard = document.querySelector('.hello__card-svg');
    const video = intro.querySelector('.experience__animation');
    const text = document.querySelector('.experience__wrapper');
    const card = document.querySelector('.experience__card');
    const experienceCard = document.querySelector('.experience__card-img');

    const hello = document.querySelector('.hello');
    const paymentDescr = document.querySelector('.payment__descr');
    const experienceVideo = document.querySelector('.experience__animation');

    const controller = new ScrollMagic.Controller();
    let timeline = new TimelineMax();
    let timelineExperienceCard = new TimelineMax();


    let experienceCardFinish = -50;
    if ($('body').width() <= 1170) {
      experienceCardFinish = video.getBoundingClientRect().left + 125;
    }

    let cardOpacity = 1;
    if ($('body').width() <= 768) {
      cardOpacity = 0;
    }


    const textAnim = TweenMax.fromTo(text, 3, {opacity: 0}, {opacity: 1});
    const cardAnim = TweenMax.fromTo(card, 3, {opacity: 0}, {opacity: 1});
    const helloCardAnim = TweenMax.fromTo(helloCard, 3, {scaleX: 1, scaleY:1, rotation:7}, {scaleX:0.5, scaleY:0.5, rotation:-160, opacity: cardOpacity});
    const helloCardScale = TweenMax.to(helloCard, 1, {scaleX:10, scaleY:10, rotation:-90, zIndex:2, display:'none'});


    // Анимация видео
    if ($('body').width() >= 768) {
      $(experienceCard).css({
        'left': -100,
      });

      if ($('body').width() <= 1170) {
        $(experienceCard).css({
          'left': 150,
        });
      }

      const experienceCardScale = TweenMax.fromTo(experienceCard, 1, {
        scaleX: 0.3,
        scaleY: 0.3,
        rotation: -18
      }, {scaleX: 1, scaleY: 1, rotation: 0});

      const scene = new ScrollMagic.Scene({
        duration: 9000,
        triggerElement: intro,
        triggerHook: 0.06,
      })
        .setPin(intro)
        .addTo(controller);

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

      let scrollPos = 0;
      let offsetExperience = $('.experience').offset().top;
      let item = $('.experience__item');
      const context = video.getContext('2d');

      const currentFrame = index => (
        `app/themes/sage/resources/assets/images/experience/animation/card-animation_${index.toString().padStart(3, '0')}}.jpg`
      )

      const img = new Image();
      img.src = currentFrame(1);
      img.onload = function(){
        context.drawImage(img, 0, 0)
      }

      const updateImage = index => {
        img.src = currentFrame(index);
        context.drawImage(img, 0, 0);
      }



      setInterval(() => {
        video.currentTime = scrollPos;
      }, 33.3);

      scene.on('end', function() {
        $('.experience__card-img').toggleClass('experience__card-active');
      });

      let experienceCardScene = new ScrollMagic.Scene({
        duration: 800,
        triggerElement: experienceVideo,
        triggerHook: 0.1,
      })
        .setTween(experienceCardScale)
        .setPin(experienceCard)
        .addTo(controller);

    } else {

    }


    let scene2 = new ScrollMagic.Scene({
      duration: 1000,
      triggerElement: intro,
      triggerHook: 0,
    })
    .setTween(timeline)
    .addTo(controller);

    let scene3 = new ScrollMagic.Scene({
      duration: 2000,
      triggerElement: hello,
      triggerHook: 0,
    })
      .setTween(helloCardAnim)
      .setPin(helloCard)
      .addTo(controller);

    let scene4 = new ScrollMagic.Scene({
      duration: 1000,
      triggerElement: paymentDescr,
      triggerHook: 0,
    })
      .setTween(helloCardScale)
      .addTo(controller);




    // partner section
    if ($('body').width() >= 767) {
      let partnerCardPlace = document.querySelector('.partner__inner');
      let partnerCardWrapper = document.querySelector('.partner__card');
      let posCard = $('body').width() - partnerCardPlace.getBoundingClientRect().right;


      const partnerCard = document.querySelector('.partner__front');
      let timelinePartnerCard = new TimelineMax();
      let firstCardSlide = -542;
      let finishCardSet = -260;
      if ($('body').width() <= 1024) {
        firstCardSlide = -352;
        finishCardSet = -180;
      }
      const showCard = TweenMax.fromTo(partnerCardWrapper, 1, {display: 'none'}, {display: 'block'});
      const firstPartnerCardAnimation = TweenMax.to(partnerCard, 1, {x: firstCardSlide});
      const secondPartnerCardAnimation = TweenMax.to(partnerCard, 1, {x: 0});
      const lastPartnerCardAnimation = TweenMax.to(partnerCardWrapper, 1, {
        rotationX: -180,
        rotation: 90,
        scale: 0.6,
        x: finishCardSet
      });


      let partnerCardWrapperScene = new ScrollMagic.Scene({
        duration: $('.start__title').offset().top - $('.partner__title').offset().top - 192,
        triggerElement: '.partner__wrapper',
        triggerHook: 0.2,
      })
        .setTween(showCard)
        .setPin(partnerCardWrapper)
        .addTo(controller);

      let firstPartnerCardScene = new ScrollMagic.Scene({
        duration: 500,
        triggerElement: '.partner__wrapper',
        offset: screen.height / 2 - 315,
      })
        .setTween(firstPartnerCardAnimation)
        .addTo(controller);

      let secondPartnerCardScene = new ScrollMagic.Scene({
        duration: 500,
        triggerElement: '.partner__text',
        triggerHook: 0.15,
      })
        .setTween(secondPartnerCardAnimation)
        .addTo(controller);

      let lastAnimationCardScene = new ScrollMagic.Scene({
        duration: 600,
        triggerElement: '.partner__trigger',
        triggerHook: 0.5,
      })
        .setTween(lastPartnerCardAnimation)
        .addTo(controller);
    }
  }
</script>
