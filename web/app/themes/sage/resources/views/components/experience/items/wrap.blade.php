@php
  $items = [
    ['title' => 'Craft new card products', 'descr' => 'Use open APIs to create new payment products or streamline supplier and products or streamline supplier and workforce payments.'],
    ['title' => 'Accelerate time to market', 'descr' => 'Leverage existing relationships with issuing banks, networks, and card fulfillment providers to go live in days not months.'],
    ['title' => 'Trust', 'descr' => 'Detect fraud, control your spend, and ensure the highest levels of compliance and uptime.'],
    ['title' => 'Scale globally ', 'descr' => 'Easily expand across the United States, Europe, and Asia with our global-ready platform.'],
];
@endphp

<div class="experience__items">
  @foreach($items as $item)
    @include('components.experience.items.item', ['title' => $item['title'], 'descr' => $item['descr']])
  @endforeach
</div>
