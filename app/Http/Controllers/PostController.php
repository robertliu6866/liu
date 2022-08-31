<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
// use Illuminate\Validation\Rule;
 use App\Models\Robert;
 use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
//->latest() 從數據庫中獲取最新的數據集
//簡而言之，它對獲取的數據進行排序，使用“created_at”列按時間順序排列數據。
{
    public function  index()
    
    {
     
     
        return view('robert.index',[
          'roberts' => Robert::latest()->filter(
              request(['search','category','author'])
               )->get()
          
             
       ]);
    }
      



        
      



    public function show(Robert $robert)
    {
        return view('robert.show',
        [
         'robert2' => $robert,
       
        
        ]);

       
    }
 
 }