<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('room_allocations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id');
             $table->foreignId('patient_id');
             $table->date('assigned_at');
            $table->date('released_at');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('room_allocations');
    }
};
