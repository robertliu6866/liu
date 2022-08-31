@props(['roberts'])



<section class="  h-60  mt-8 ">
  <article  > 
    
<a href=""> 
    {{-- 日期 --}}
   <div  class="flex justify-center text-xs">4/10</div></a> 
  
        {{--地點 --}}
        <a href="/robert/{{$roberts->slug}}">
    <div  class="flex justify-center text-xs">{{$roberts->title}}</div> 
          </a>
       {{--發表時間 --}}
      <div  class="flex justify-center text-xs"><time>{{$roberts->created_at->diffForHumans()}}</time></div> 
      <x-category-button :category="$roberts->category" />
  
   
  <div class="flex justify-between max-w-xs h-auto gap-6  overflow-auto  relative my-3 mx-auto ">
   
   
    {{--主揪圖片名字 --}}
  <div ><img class="rounded-full h-10 w-10 " 
     src="http://i.pravatar.cc/60?={{$roberts->author->id}}" alt="">{{ $roberts->author->id }}
     <div class="w-10 ml-1 text-[10px] ">
      {{ $roberts->author->name }}
       {{-- <a href="/?author={{ $roberts->author->username }}">{{ $roberts->author->name }}</a>--}}
    
    </div></div>



 {{--揪團bar中間資訊 --}}
  <a href="/?category={{$roberts->category->slug}}">
  <div class="w-20 text-sm my-auto ">{{$roberts->category->name}}</a></div>
  </a>
   
  <div class="  w-100% my-0 text-[15px] ">
     {{--參加團員訊息 --}}
     <div  class="flex justify-center text-[10px]   w-20 my-auto">6/7</div>

  <div class="flex -space-x-1 overflow-hidden">

    <div class="">
   <div><img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""></div>
  <div>123</div>
  </div>
   <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="http://i.pravatar.cc/60?={{$roberts->author->id}}"  alt="">
   <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://i.pravatar.cc/60" alt="">
   <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://i.pravatar.cc/150?u=fake@pravatar.com" alt="">
   <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://i.pravatar.cc/150?img=3" alt="">
   <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://i.pravatar.cc/150?img=3" alt="">
 </div>
 <p class="my-4">{{$roberts->excerpt}}</p>

   
  </div>

</article>
</section>