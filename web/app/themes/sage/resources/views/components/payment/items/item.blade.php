<div class="payment__item">
  <div class="payment__animation">
    <video class="payment__video payment__video-hover payment__video-visible" src="{{ get_theme_file_uri() .  '/resources/assets/videos/payment/' . $videoHover}}" muted></video>
    <video class="payment__video payment__video-unhover" src="{{ get_theme_file_uri() .  '/resources/assets/videos/payment/' . $videoUnhover}}" muted></video>
  </div>
  <div class="payment__content">
    <div class="payment__name">{!! $name or '' !!}</div>
    <div class="payment__plus">
      @include('icon::plus')
      <div class="payment__info">
        Learn more
        @include('icon::arrow-info')
      </div>
    </div>
  </div>
 {{-- <div class="payment__area">
    @include('icon::payment/' . $area)
  </div>--}}
</div>
