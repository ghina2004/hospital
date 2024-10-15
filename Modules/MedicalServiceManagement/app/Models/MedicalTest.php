<?php

namespace Modules\MedicalServiceManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\MedicalServiceManagement\Database\Factories\MedicalTestFactory;

class MedicalTest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): MedicalTestFactory
    // {
    //     // return MedicalTestFactory::new();
    // }
}
