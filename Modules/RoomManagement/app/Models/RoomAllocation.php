<?php

namespace Modules\RoomManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientManagement\Models\Patient;

// use Modules\RoomManagement\Database\Factories\RoomAllocationFactory;

class RoomAllocation extends Model
{
    use HasFactory;

    protected $fillable = ['room_id','patient_id','assigned_at','released_at'];

    public function room(){

        return $this->belongsTo(Room::class);
    }
    public function patient(){

        return $this->belongsTo(Patient::class);
    }

    // protected static function newFactory(): RoomAllocationFactory
    // {
    //     // return RoomAllocationFactory::new();
    // }
}
