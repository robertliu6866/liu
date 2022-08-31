<x-layout>
 
    <x-setting heading="Manage Posts">

<section class=" w-max   mx-auto">
    {{-- <div class="flex mt-6">
 
       <h1 class="block font-bold mb-4 mr-5">管理文章</h1>
  </div>

  <aside class="flex text-sm   mb-10  ">
  <div class=" ml-7 mr-10">
    <ul>
        <li class="mb-3">
            <a href="/admin/robert" class="   {{request()->is('admin/robert')? 'text-green-500' : ''}} ">管理行程</a>
        </li>

        <li>
            <a href="/admin/robert/create" class=" {{request()->is('admin/robert/create')? 'text-green-500' : ''}} ">新行程</a>
        </li>

    </ul>
  </div>
   <div>
      <h4>links</h4>
   </div>

</aside> --}}


<div class=" flex flex-col  w-96">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block  min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200 ">
                           @foreach  ($robert as $robert2)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href="/robert/{{$robert2->slug}}">
                                           {{$robert2->title}}</a>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="/admin/robert/{{$robert2->id}}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    {{-- <a href="/admin/robert/{{$robert2->id}}/edit" class="text-blue-500 hover:text-blue-600">Delet</a>  --}}

                                    <form method="POST" action="/admin/robert/{{$robert2->id}}">
                                      @csrf
                                      @method('DELETE')
                                      <button>Delete</button>
                                    </form>

                                </td>
                            </tr>
                            
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </section>
    
    </x-setting>
    
    </x-layout>    
                                    
                                
                           
                               
                                        
                                        
                                  