<?php

namespace Modules\PatientManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\PatientManagement\Database\Factories\AdmissionFactory;

class Admission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): AdmissionFactory
    // {
    //     // return AdmissionFactory::new();
    // }
}
