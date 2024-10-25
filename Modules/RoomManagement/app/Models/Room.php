<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\RoomManagement\Enums\RoomStatus;

// use Modules\RoomManagement\Database\Factories\RoomFactory;

class Room extends Model
{
    use HasFactory;


    protected $fillable = ['room_number','status','departement_id'];

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => RoomStatus::from($value),
            set: fn (RoomStatus $value) => $value->value
        );
    }
    public $with = ['departement'];

    public function departement(){

        return $this->belongsTo(Departement::class);
    }

    public function roomAllocations()
    {
        return $this->hasMany( RoomAllocation ::class);
    }

    // protected static function newFactory(): RoomFactory
    // {
    //     // return RoomFactory::new();
    // }
}
