<div class="experience">
  <div class="container">
    <div class="experience__inner">
      <div class="experience__card">
        <video class="experience__animation" src="{{ get_theme_file_uri() .  '/resources/assets/videos/experience/card-animation.mp4' }}"
               muted></video>
      </div>
      <div class="experience__wrapper">
        <div class="experience__title">Create a tailored payment experience</div>
        @include('components.experience.items.wrap')
      </div>
    </div>
  </div>
</div>
@include('components.experience.animation')
