<x-layout>
    <x-setting :heading="'編輯文章'. $robert->title">
        <form method="POST" action="/admin/robert/{{$robert->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
  
            <x-form.input name="title" :value="old ('slug', $robert->title)" />
            <x-form.input name="slug" :value="old ('title', $robert->slug)"  />
              

                    <x-form.input name="thumbnail" type="file" :value="old ('thumbnail', $robert->thumbnail)"  />
                        
                        <img class=" w-20" src= "{{asset ( 'storage/'.$robert->thumbnail)}}" alt=""  >
                   

            <x-form.textarea name="excerpt" >{{old ('excerpt', $robert->excerpt)}} </x-form.textarea>
            <x-form.textarea name="body" >{{old ('body', $robert->body)}} </x-form.textarea>
            
            


  
            <x-form.field>
                <x-form.label name="category"/>
  
                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id',$robert->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
  
                <x-form.error name="category"/>
            </x-form.field>
  
            <x-form.button>變更
            </x-form.button>
        </form>
    </x-setting>
  </x-layout>
  
  
  
  
  
  
  
  