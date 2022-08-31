@props(['heading'])

<section class=" w-max   mx-auto">
    <div class="flex mt-6">
 
       <h1 class="block font-bold mb-4 mr-5">管理文章</h1>
  </div>

  <aside class="flex text-sm   mb-10  ">
  <div class=" ml-7 mr-10">
    <ul>
        <li class="mb-3">
            <a href="/admin/robert" class="   {{request()->is('admin/robert')? 'text-green-500' : ''}} ">所有行程</a>
        </li>

        <li>
            <a href="/admin/robert/create" class=" {{request()->is('admin/robert/create')? 'text-green-500' : ''}} ">新行程</a>
        </li>

    </ul>
  </div>
   <div>
      <h4>links</h4>
   </div>

</aside>

<main class="flex-1">
  {{-- <x-panel> --}}
      {{ $slot }}
  {{-- </x-panel> --}}
</main>


</section>