<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
       return view('sessions.create');
    }

    public function store()
    {
      $attributes =   request()->validate([
            'email' => 'required|email',
            'password' => 'required'
         ]);
         if (! auth()->attempt($attributes)){

            throw ValidationException::withMessages([
               'email' => '喔喔！！這個電子郵件沒有註冊！'
            ]);
         }
            session()->regenerate();
            return redirect('/')->with('success','歡迎回來！');
    }



    public function destroy()
    {
       auth()->logout();
       return redirect('/')->with('success','goodbye');
    }
}
