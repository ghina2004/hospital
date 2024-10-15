<?php

namespace Modules\MedicalServiceManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\MedicalServiceManagement\Database\Factories\HospitalServiceFactory;

class HospitalService extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): HospitalServiceFactory
    // {
    //     // return HospitalServiceFactory::new();
    // }
}
