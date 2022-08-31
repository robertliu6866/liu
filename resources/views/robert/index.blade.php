<x-layout>


@include('robert._header')



  <main class="relative border-b-2   mt-20    max-w-xs mx-auto   " >

    @if ($roberts->count()>1)

    <x-robert-grid :roberts="$roberts"  />

    @else
    <p> 沒有活動 ！</p> 
        @endif
    </main>

    
</x-layout>