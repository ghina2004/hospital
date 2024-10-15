<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientManagement\Models\Doctor;

// use Modules\RoomManagement\Database\Factories\DepartementFactory;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function Doctors()
    {
        return $this->hasMany( Doctor ::class);
    }
    // protected static function newFactory(): DepartementFactory
    // {
    //     // return DepartementFactory::new();
    // }
}
