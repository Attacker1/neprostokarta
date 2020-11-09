@php
  $items = [
    ['videoHover' => 'fundingHover.mp4',
    'videoUnhover' => 'fundingUnhover.mp4',
    'name' => 'JIT Funding',
    'area' => 'funding-area'],

    ['videoHover' => 'widgetsHover.mp4',
    'videoUnhover' => 'widgetsUnhover.mp4',
    'name' => 'PCI widgets',
    'area' => 'widget-area'],

    ['videoHover' => 'controlsHover.mp4',
    'videoUnhover' => 'controlsUnhover.mp4',
    'name' => 'Dynamic spend controls',
    'area' => 'controls-area'],

    ['videoHover' => 'cardsHover.mp4',
    'videoUnhover' => 'cardsUnhover.mp4',
    'name' => 'Issue virtual cards',
    'area' => 'cards-area']
];
@endphp
<div class="payment__wrapper">
  @foreach($items as $item)
    @include('components.payment.items.item', ['videoHover' => $item['videoHover'], 'videoUnhover' => $item['videoUnhover'], 'name' => $item['name'], 'area' => $item['area']])
  @endforeach
</div>
