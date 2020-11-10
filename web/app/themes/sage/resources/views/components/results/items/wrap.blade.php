@php
  $items = [
    ['name' => '99.99%', 'text' => 'platform uptime'],
    ['name' => '12 countries', 'text' => 'supported globally'],
    ['name' => 'Top 50', 'text' => 'Forbes fintech award'],
];
@endphp
<div class="results__wrapper">
  @foreach($items as $item)
    @include('components.results.items.item', ['name' => $item['name'], 'text' => $item['text']])
  @endforeach
</div>
