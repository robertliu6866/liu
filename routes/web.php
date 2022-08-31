<?php
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\controllers\PostController;
use App\Http\controllers\RegisterController;
use App\Http\controllers\SessionsController;
use App\Http\controllers\PostCommentController;
use App\Http\controllers\AdminPostController;
use Symfony\Component\HttpFoundation\Response;


//首頁
Route::get ('/',[PostController::class, 'index']);

Route::post ('robert/{robert:slug}/comments',[PostCommentController::class,'store']);
Route::get ('robert/{robert:slug}',[PostController::class,'show']);
Route::get('register', [RegisterController::class,'create'])->middleware('guest');
Route::post('register', [RegisterController::class,'store'])->middleware('guest');


Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::post('login',[SessionsController::class,'store'])->middleware('guest');
Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');

//admin
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/robert', AdminPostController::class)->except('show');
});










