@php
  $items = [
    ['title' => 'Solutions',
    'items' => ['Solution overview', 'Digital banking', 'Incentives and rewards', 'Online travel', 'Small business lending',
    'Expense management', 'Media & ad agencies', 'POS financing', 'Insurance', 'On-demand services', 'Retail marketplaces']],

    ['title' => 'Product',
    'items' => ['Platform overview', 'Virtual cards', 'Spend controls', 'Just-in-Time funding', 'PCI widgets',
    '3D Secure']],

    ['title' => 'Features',
    'items' => ['Card issuing', 'Processing', 'Applications', 'Open API & webhooks', 'Data insights',
    'Digital wallets & tokenization']],

    ['title' => 'Developer',
    'items' => ['Developer portal', 'Developer guides', 'Data insights & Diva API', 'Core API', 'API explorer']],

    ['title' => 'Company',
    'items' => ['About us', 'Why Marqeta', 'Careers', 'Leadership', 'Newsroom', 'Blog', 'Contact us', 'Due diligence']],
];
@endphp
@foreach($items as $item)
  @include('components.footer.items.item', ['title' => $item['title'], 'items' => $item['items']])
@endforeach
