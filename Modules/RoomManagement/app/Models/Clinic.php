<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\RoomManagement\Database\Factories\ClinicFactory;

class Clinic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ClinicFactory
    // {
    //     // return ClinicFactory::new();
    // }
}
