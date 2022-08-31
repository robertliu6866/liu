
  <x-dropdown>

    <x-slot name="trigger">

      <button class="inline-flex ">
        {{isset($currentCategory) ? ucwords($currentCategory->name):'選擇一種類型'}}
        <x-icon name="down-arrow" class="h-3 mt-2 ml-1" />
      </button>
    </x-slot>

    <x-dropdown-item href="/" :active="request()->is('/') "> all</x-dropdown-item>


        @foreach($categories  as $category)
        
        <x-dropdown-item 
        href="/?category={{$category->slug}}&{{http_build_query (request()->except('category'))}}"
          :active='request()->is("categories/.{$category->slug}")'
          
          >{{ucwords($category->name)}}</x-dropdown-item>

    @endforeach
  

   
  </x-dropdown>
    
    </div>