

 


<div class="max-w-xs mx-auto mt-20   ">
    <form class="ml-16"
     method="GET/" action="/">

   @if(request('category'))
   <input type="hidden"name="category" value="{{request('category')}}">

   @endif

  <input  type="text" name="search" 
          placeholder="找找" 
          class="text-center ring-offset-1 ring-1 "
          value="{{request('search')}}">
  </form>



</div>

{{--  下拉式表格--}}

<article class=" relative  max-w-xs mx-auto  mt-32  ">

  <x-category-dropdown />
    
 </article>




