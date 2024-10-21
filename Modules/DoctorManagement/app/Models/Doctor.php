<?php

namespace Modules\DoctorManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Modules\RoomManagement\Models\Departement;

// use Modules\DoctorManagement\Database\Factories\SceduleFactory;

class Doctor extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;


    protected $fillable = [
        'full_name'
        ,'birth_date'
        ,'address'
        ,'departement_id'
        ,'Specialization_id'
        ,'password',
        'user_name'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

  public function Specialization(){
      return $this->belongsTo( Specialization ::class);
  }
    public function Departement(){
        return $this->belongsTo( departement ::class);
    }
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
