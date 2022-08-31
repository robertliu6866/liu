<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;   
use Illuminate\Notifications\Notifiable;
use  Illuminate\Contracts\Auth\MustVerifyEmail;




class User extends Authenticatable

// class User extends Model
{
    use HasFactory;
  

    //protected $guarded = [];  
   protected $fillable = ['name','username','password','email'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
       $this->attributes['password'] =bcrypt($password);
    }

    public function posts()
    {
        return $this->hasMany(Robert::class);
    }

}
