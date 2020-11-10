@php
  $partners = [
    ['logo' => 'affirm.png',
    'descr' => 'Affirm’s mission is to build innovative products that people love, and Marqeta’s unique technology provides us the platform and services to help make that possible.',
    'avatar' => 'affirm.jpg',
    'name' => 'Max Levchin',
    'role' => 'CEO of Affirm'],

    ['logo' => 'doordash.jpg',
    'descr' => 'Marqeta is vested in our success and that is what makes us want to collaborate even further. We value their cutting-edge technology, reliability, and easy to use platform APIs.',
    'avatar' => 'doordash.jpeg',
    'name' => 'Mike Kim',
    'role' => 'VP of Finance at DoorDash']
];
@endphp

<div class="partner__companies">
  @foreach($partners as $partner)
    @include('components.partner.companies.item', ['logo' => $partner['logo'], 'descr' => $partner['descr'], 'avatar' => $partner['avatar'], 'name' => $partner['name'], 'role' => $partner['role']])
  @endforeach
</div>
