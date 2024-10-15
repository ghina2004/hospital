<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\RoomManagement\Database\Factories\RoomAllocationFactory;

class RoomAllocation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): RoomAllocationFactory
    // {
    //     // return RoomAllocationFactory::new();
    // }
}
