<?php

namespace Modules\DoctorManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientManagement\Models\Doctor;

// use Modules\DoctorManagement\Database\Factories\SpecializationFactory;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function Doctors () {
        return $this->hasMany( Doctor ::class);
    }

    // protected static function newFactory(): SpecializationFactory
    // {
    //     // return SpecializationFactory::new();
    // }
}
