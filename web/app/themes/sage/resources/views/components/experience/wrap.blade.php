<div class="experience">
  <div class="container">
    <div class="experience__inner">
      <div class="experience__card">
        <canvas class="experience__animation"></canvas>
      </div>
      <img src="@asset('images/experience/card.png')" alt="card" class="experience__card-img">
    </div>
  </div>
  <div class="experience__wrapper">
    <div class="experience__title">Create a tailored payment experience</div>
    <img src="@asset('images/experience/card.png')" alt="card" class="experience__mobile-card">
    @include('components.experience.items.wrap')
  </div>
</div>
@include('components.experience.animation')
