<?php

namespace Modules\DoctorManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\DoctorManagement\Database\Factories\SceduleFactory;

class Scedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): SceduleFactory
    // {
    //     // return SceduleFactory::new();
    // }
}
