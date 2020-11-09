<div class="experience__item">
  @if($title)
    <div class="experience__name">{!! $title or '' !!}</div>
  @endif
  @if($descr)
    <div class="experience__text">{!! $descr or '' !!}</div>
  @endif
</div>
