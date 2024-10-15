<?php

namespace Modules\SurgicalOperationAndAppointment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\SurgicalOperationAndAppointment\Database\Factories\SurgicalOperationFactory;

class SurgicalOperation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): SurgicalOperationFactory
    // {
    //     // return SurgicalOperationFactory::new();
    // }
}
