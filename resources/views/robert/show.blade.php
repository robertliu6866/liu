<x-layout>
  @include('robert._header')
  
  
    <article class=" w-max   mx-auto">

      <main class="relative border-b-2   max-w-xs mx-auto " >


        <article> 
    
          <a href=""> 
              {{-- 日期 --}}
             <div  class="flex justify-center text-xs">12/12</div></a> 
                  {{--地點 --}}
                  <a href="/robert/{{$robert2->slug}}">
              <div  class="flex justify-center text-xs">{{$robert2->title}}</div> 
                    </a>
                 {{--發表時間 --}}
                <div  class="flex justify-center text-xs"><time>{{$robert2->created_at->diffForHumans()}}</time></div> 
               
                 <x-category-button :category="$robert2->category" />
             
            <div class="flex justify-between max-w-xs h-auto gap-6  overflow-auto  relative my-3 mx-auto ">
             
             
              {{--------主揪圖片名字-----}}
            <div ><img class="rounded-full h-10 w-10 "  src="http://i.pravatar.cc/60?={{$robert2->author->id}}"  alt="">
              <div class="w-10 ml-1 text-[10px] ">

                <a href="/?author={{ $robert2->author->username }}">{{ $robert2->author->name }}</a> </div>
              </div>


           {{-- 揪團bar中間資訊 --}}
            <a href="/categories/{{$robert2->category->slug}}">
            <div class="w-20 text-sm my-auto ">{{$robert2->category->name}}</a></div>
            </a>
              
            <div class="  w-100% my-0 text-[15px] ">
               {{--參加團員訊息 --}}
               <div  class="flex justify-center text-[10px]   w-20 my-auto">12/7</div>
          
            <div class="flex -space-x-1 overflow-hidden">
             <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
             <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
             <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
             <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
             <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
             <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
           </div>
        
          {{-- <p>{{$robert2->excerpt}}</p> --}}
             
            </div>
          
          </article>

      </main>
      
      <div class="flex   ">
         <div>候補</div>
        <div class="-space-x-1 overflow-hidden ml-6 ">

        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="http://5b0988e595225.cdn.sohucs.com/images/20190722/086c6914fdeb4e60991a062700dbf86e.png" alt="">
        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://t16.pimg.jp/044/586/536/1/44586536.jpg" alt="">
        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://t18.pimg.jp/030/941/248/1/30941248.jpg" alt="">
        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      </div>
        </div>
        
        <img class=" w-60" src= "{{asset ( 'storage/'.$robert2->thumbnail)}}" alt="">

</article>

 <section class= "relative   mt-10  max-w-xs mx-auto space-y-3">
   @include ('robert._add-comment-form')

 @foreach ($robert2->comments as $comment)
  <x-post-comment :comment="$comment" />

 @endforeach
         
 </section>



</x-layout>
