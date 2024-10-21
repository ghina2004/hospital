<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\RoomManagement\Database\Factories\RoomFactory;

class Room extends Model
{
    use HasFactory;


    protected $fillable = [];

    // protected static function newFactory(): RoomFactory
    // {
    //     // return RoomFactory::new();
    // }
}
