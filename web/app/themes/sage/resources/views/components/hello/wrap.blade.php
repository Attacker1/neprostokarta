<div class="hello">
  <div class="container">
    <div class="hello__inner">
      <div class="hello__wrapper">
        <div class="hello__left">
          <h1 class="title hello__title">Modern card issuing
            that empowers
            innovators to change
            the world
          </h1>
          <div class="hello__subtitle">Instantly issue & process card payments with our open API platform.</div>
          <div class="hello__button">
            <div class="hello__arrow">@include('icon::arrow')</div>
            <div class="hello__lets">Let's talk</div>
          </div>
        </div>
        <div class="hello__right">
          <video class="hello__video" src="{{ get_theme_file_uri() .  '/card.mp4'}}" autoplay muted></video>
          <div class="hello__card">
            <img src="@asset('images/undercard.png')" alt="undercards">
            @include('icon::card')
          </div>
        </div>
      </div>
      @include('components.hello.companies.wrap')
    </div>
  </div>
  <div class="hello__bg-line">
    @include('icon::hello/bg-line')
  </div>
</div>
