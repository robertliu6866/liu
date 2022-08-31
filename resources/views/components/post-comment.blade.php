@props(['comment'])

<article class="flex">
    <div class=" mt-1 mr-2" ><img class="inline-block h-8 w-8 rounded-full ring-2
       ring-white" src="http://i.pravatar.cc/60?u={{$comment->id}}" alt="">
    
      <header>
      <h3 class="text-xs font-bold">{{$comment->author->username}}</h3> 
      <p class="text-xs  "><time>{{$comment->created_at->diffForHumans()}}</time> </p>
     
    </header>
    
    </div>
    <div class='mt-4 ml-14  max-h-fit '><p>{{$comment->body}}</p></div>
  
    
    
    </article>