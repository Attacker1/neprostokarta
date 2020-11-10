<div class="results__item">
  @if($name)
    <div class="results__name">{!! $name or '' !!}</div>
  @endif
  @if($text)
    <div class="results__text">{!! $text or '' !!}</div>
  @endif
</div>
