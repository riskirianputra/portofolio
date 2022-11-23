<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    use Notifiable, HasRoles;

   
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'location',
        'photo',      
        'about_me',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    
    
}
