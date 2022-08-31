@auth

 <x-panel>

  <form method="POST" action="/robert/{{$robert2->slug}}/comments" >
    @csrf
    <header class="flex  items-center">
  
    <img class=" mr-3 inline-block h-7 w-7 rounded-full ring-2 ring-white"  src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="">
     <h2 class="block text-xs">我有問題</h2>
  
    </header>
    <div class="mt-4">
       <textarea 
       class="w-full h-6"
        name="body" 
      
        rows="10"
         placeholder="問問" required></textarea>
    @error('body')
    <span class="text-xs text-red-300">{{$message}}</span>
      @enderror

    </div>
    <div class="flex justify-end">
     <x-form.button>去</x-form.button>
    </div>
  
   </form>
  </x-panel> 
  @else
  <p class="  text-xs  ml-52  w-27">
    <a  href="/register" class="hover:underline">註冊</a>
    <a href="/login" class="hover:underline">登入</a>離開</p> 
@endauth