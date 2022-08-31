<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>src="http://unpkg.com/vue@3"</script>
    

    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


</head>

<body> 
  <div class=" flex max-w-xs mx-auto   relative  ">

<div class="flex-initial w-72 ">
  <a href="/">
     <nav class="max-w-xs mx-auto mb-3 ml-14" > <img class="mx-auto" src="/img/photo/mountain.svg" alt="dondon"></nav> 
   </a>
  </div>

   <div class="flex-initial w-8 flex mr-10">

     @auth
     
     <x-dropdown>

       <x-slot name="trigger"> 

         <button class=" text-sm mr-2 ">HI{{auth()->user()->name}}!
        </button> 
      </x-slot>


        @admin
        <x-dropdown-item href="/admin/robert" :active="request()->is('admin/robert')">後台</x-dropdown-item> 
        <x-dropdown-item href="/admin/robert/create" :active="request()->is('admin/robert/create')">新行程</x-dropdown-item> 
        @endadmin


        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">登出</x-dropdown-item> 
      </div>
      <form id="logout-form" method="POST" action="/logout" class=:hidden >
        
        @csrf
          </form>
        </x-dropdown>  

        @else
   <div class=" flex w-20  text-sm ">
    
      <a class=" w-10 " href="register">註冊</a>  
   
      <a class=" w-10" href="login">登入</a>  

    </div>
        
    @endauth
</div>

</div>




{{$slot}}    
<x-flash/>
</body>

</html>
        
        
          