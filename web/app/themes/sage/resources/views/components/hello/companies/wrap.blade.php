@php
  $items = ['uber', 'square', 'instacart', 'brex', 'doordash'];
@endphp
<div class="hello__companies">
  @foreach($items as $item)
    @include('components.hello.companies.item', ['logo' => $item])
  @endforeach
</div>
