<?php
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


//首頁
Route::get ('/',[PostController::class, 'index']);

Route::post ('robert/{robert:slug}/comments',[PostCommentController::class,'store']);
Route::get ('robert/{robert:slug}',[PostController::class,'show']);
Route::get('register', [RegisterController::class,'create'])->middleware('guest');
Route::post('register', [RegisterController::class,'store'])->middleware('guest');

//
Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::post('login',[SessionsController::class,'store'])->middleware('guest');
Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');

//admin 管理組件模組123
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/robert', AdminPostController::class)->except('show');
});










