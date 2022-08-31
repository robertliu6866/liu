<?php

namespace App\Http\Controllers;
use App\Models\Robert;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function  store(Robert $robert)
    {
      

      request()->validate([
    'body' => 'required'
  ]);
          
       $robert->comments()->create([
        'user_id' => request()->user()->id,
        'body' =>  request('body')

       ]);
       return back();

    }
}
