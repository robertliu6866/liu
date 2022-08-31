<?php

namespace App\Providers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate; 
use Illuminate\Support\ServiceProvider;
use App\Models\User;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.註冊任何應用程序服務
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.引導任何應用程序服務
     *
     * @return void
     */
    public function boot()
    
    {
        Model::unguard();
        Gate::define('admin',function (User $user){
            return $user->username === 'robert';

        });
        
        Blade::if('admin',function(){
            return request()->user()?->can('admin');
        });
     
    }
}
