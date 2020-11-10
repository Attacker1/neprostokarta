@php
  $advantages = [
    '10+ years of modern card issuing experience',
    'Compliance & risk experts',
    'Top 25 largest U.S. debit card purchase volume*'
];
@endphp
<div class="partner__advantages">
  @foreach($advantages as $advantage)
    @include('components.partner.advantages.item', ['title' => $advantage])
  @endforeach
</div>
