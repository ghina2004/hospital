<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

// use Modules\RoomManagement\Database\Factories\AdminFactory;

class admin extends  Authenticatable
{
    use HasFactory,HasApiTokens;


    protected $fillable = ['user_name', 'password'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // protected static function newFactory(): AdminFactory
    // {
    //     // return AdminFactory::new();
    // }
}
