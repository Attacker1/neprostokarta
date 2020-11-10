<div class="partner__company">
  @if($logo)
    <img src="@asset('images/partner/logo/' . $logo)" alt="logo" class="partner__logo">
  @endif
  @if($descr)
    <div class="partner__text">{!! $descr or '' !!}</div>
  @endif
  <div class="partner__representative">
    @if($avatar)
      <img src="@asset('images/partner/avatar/' . $avatar)" alt="avatar" class="partner__avatar">
    @endif
    <div class="partner__about">
      @if($name)
        <div class="partner__name">{!! $name or '' !!}</div>
      @endif
      @if($role)
        <div class="partner__role">{!! $role or '' !!}</div>
      @endif
    </div>
  </div>
</div>
