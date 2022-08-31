<x-layout>
   
    <article class=" w-max   mx-auto">
      <a href="/">
        <img class="h-20 mx-auto" src="https://pngimg.com/uploads/teddy_bear/teddy_bear_PNG94.png"  alt=""></a>
      <main class="mt-20 ">
       <h1 class="text-center mb-10 ">註冊</h1>
       <form  method="POST" action="/register">
         @csrf

        <div class="mt-10 ">
            <label  class="block mb-2 uppercase font-bold text-xs text-center"
            for="name">名字
        </label>
        <input  class="border border-gray-400 p-2 w-full"
        type="text"
        name="name"
        id="name"
        value="{{old('name')}}"
        required
        >
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <label  class="mt-10 block mb-2 uppercase font-bold text-xs text-center"
        for="username">使用者名
    </label>
    <input  class="border border-gray-400 p-2 w-full"
    type="text"
    name="username"
    id="username"
    value="{{old('username')}}"
    required
    >
    @error('username')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    <label  class="mt-10 block mb-2 uppercase font-bold text-xs text-center"
    for="email">email
</label>
<input  class="border border-gray-400 p-2 w-full"
type="text"
name="email"
id="email"
value="{{old('email')}}"
required
>

@error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror



    <label  class="mt-10 block mb-2 uppercase font-bold text-xs text-center"
    for="username">密碼
</label>
<input  class="border border-gray-400 p-2 w-full"
type="password"
name="password"
id="password"
required
>
@error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

  <x-form.button class="">登入</x-form.button>


@foreach ($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach

        </div>

       


       </form>


      </main>
    </article>

</x-layout>
