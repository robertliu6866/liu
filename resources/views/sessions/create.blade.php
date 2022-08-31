<x-layout>
<article class=" w-max   mx-auto">
    <a href="/">
      <img class="h-20 mx-auto" src="https://pngimg.com/uploads/teddy_bear/teddy_bear_PNG94.png"  alt=""></a>
    <main class="mt-20 ">
     <h1 class="text-center mb-10 ">登入!</h1>

     <form  method="POST" action="login">
        @csrf
   <x-form.input name="email" type="email" autocomplete="username" />

   <x-form.input name="password" type="password"  autocomplete="password"/>
       <div class="mt-10 ">

  <x-form.button class="">登入</x-form.button>

       </div> 

  </form>
  </main>
     </article>
    </x-layout>