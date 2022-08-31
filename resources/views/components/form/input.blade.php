
@props(['name'])
<x-form.field>
<x-form.label name="{{$name}}" />

    <input  class="border p-2  "
    name="{{$name}}"
    id="{{$name}}"

   {{$attributes(['value'=>old($name)])}}
    >
    <x-form.error name="{{$name}}"/>
 
</x-form.field>