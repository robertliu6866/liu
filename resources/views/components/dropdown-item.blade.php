@props(['active' => false])
@php
     $classes = 'block text-ms leading-6 hover:bg-gray-300';

     if ($active) $classes .= ' bg-gray-500 text-white';

@endphp



<a {{$attributes
(['class' => $classes ]) }}
    >{{$slot}}</a> 