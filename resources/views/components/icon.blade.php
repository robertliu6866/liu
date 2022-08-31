@props(['name'])
@if ($name === 'down-arrow')

<img {{$attributes(['calss'=>''])}} src="/img/photo/arrow.png" alt="">

@endif

{{--<img class="h-3 mt-2 ml-1" src="/img/photo/arrow.png" alt=""> --}}