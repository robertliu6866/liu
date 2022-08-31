@props(['trigger'])

<div x-data="{ show: false}" @click.away="show = false "class=" relative">
    {{-- Trigger --}}

    <div @click="show = ! show">
     {{$trigger}}
    </div>

    {{-- Links --}}
    <div x-show="show" class="max-w-fit absolute   mt-3 rounded-xl   z-50 " style="display:none">
    {{$slot}}

    </div>