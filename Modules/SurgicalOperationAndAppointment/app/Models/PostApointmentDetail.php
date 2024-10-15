<?php

namespace Modules\SurgicalOperationAndAppointment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\SurgicalOperationAndAppointment\Database\Factories\PostApointmentDetailFactory;

class PostApointmentDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): PostApointmentDetailFactory
    // {
    //     // return PostApointmentDetailFactory::new();
    // }
}
