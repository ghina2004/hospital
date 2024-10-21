<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\DoctorManagement\Models\Doctor;


// use Modules\RoomManagement\Database\Factories\DepartementFactory;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['type','description','number_of_room'];


    public function Doctors()
    {
        return $this->hasMany( Doctor ::class);
    }

    public function rooms()
    {
        return $this->hasMany( Room ::class);
    }

    // protected static function newFactory(): DepartementFactory
    // {
    //     // return DepartementFactory::new();
    // }
}
