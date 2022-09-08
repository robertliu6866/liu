<?php

namespace App\Http\Controllers;
use App\Models\Robert;
// use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
      return view('admin.robert.index',[

        'robert' => Robert::paginate(50)

      ]);
    }
    public function  create()
    {

        return view('admin.robert.create');
    
       
}

//新增檔案測試
public function store()
{

  Robert::create(array_merge($this->validatePost(),[
    'user_id' => request()-> user()->id,
    'thumbnail' => request()->file('thumbnail')->store('thumbnails')
    
  ]));


   return redirect ('/');





   //編輯檔案
}
public function edit(Robert $robert)
{
   return view ('admin.robert.edit',['robert'=>$robert]);
}





//更新檔案
public function update(Robert  $robert)
{
  $attributes = $this->validatePost($robert); 

  if ($attributes['thumbnail']?? false){
  
    $attributes['thumbnail']= request()->file('thumbnail')->store('thumbnails');
  }


$robert->update($attributes);
return back()->with('success','更新！');
}



//刪除檔案
public function destory (Robert $robert)

{
$robert->delete();
return back()->with('success','已刪！');
}






public function validatePost(?Robert $robert= null): array
{
  $robert ??= new Robert();
  return  request()->validate([
    'title' =>'required',
    'thumbnail' =>$robert->exists ? ['image']:['required','image'],//圖片上傳位置
    'slug' =>['required',Rule::unique('roberts','slug')->ignore($robert)],
    'excerpt'=>'required',
    'body'=>'required',
    'category_id'=> ['required',Rule::exists('categories','id')],
    
  ]);
}
}
