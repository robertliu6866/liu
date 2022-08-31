@props(['name'])
<x-form.field>
<x-form.label name="{{$name}}" />
   <textarea class="border p-2"
   

   name="{{$name}}"
   id="{{$name}}"
   required
   {{$attributes}}
   >
   {{$slot ?? old($name)}}</textarea>
   <x-form.error name="{{$name}}"/>

</x-form.field>