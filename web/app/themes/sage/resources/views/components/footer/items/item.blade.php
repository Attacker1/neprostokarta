<div class="footer__item">
  <div class="footer__title">{!! $title or '' !!} @include('icon::arrow-down')</div>
  <div class="footer__elements">
    @foreach($items as $item)
      <div class="footer__text">{!! $item or '' !!}</div>
    @endforeach
  </div>
</div>
