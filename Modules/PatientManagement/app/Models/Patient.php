<?php

namespace Modules\PatientManagement\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\genderType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Patient extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;


    protected $fillable = ['full_name','birth_date','gender','address','medical_history',
        'user_name',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
//    protected function customCasts(): array
//    {
//        return [
//            'gender' => GenderType::class,
//        ];
//    }
}
