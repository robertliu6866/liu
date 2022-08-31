@props(['name'])
<div class="mb-6">
    <label class="block text-sm " 
    for="{{$name}}"
    >
     {{ucwords($name)}}
 
 
    </label>