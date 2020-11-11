<div class="experience">
  <div class="container">
    <div class="experience__inner">
      <div class="experience__card">
        <video class="experience__animation" autobuffer preload muted>
          <source type="video/webm"
                  src="{{ get_theme_file_uri() .  '/resources/assets/videos/experience/card-animation.webm' }}"/>
          <source type="video/ogg"
                  src="{{ get_theme_file_uri() .  '/resources/assets/videos/experience/card-animation.ogv' }}"/>
          <source type="video/mp4"
                  src="{{ get_theme_file_uri() .  '/resources/assets/videos/experience/card-animation.mp4' }}"/>
        </video>
      </div>
      <img src="@asset('images/experience/card.png')" alt="card" class="experience__card-img">
    </div>
  </div>
  <div class="experience__wrapper">
    <div class="experience__title">Create a tailored payment experience</div>
    @include('components.experience.items.wrap')
  </div>
</div>
@include('components.experience.animation')
