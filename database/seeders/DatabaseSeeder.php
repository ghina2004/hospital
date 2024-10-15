<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PatientManagement\Models\User;
use Modules\RoomManagement\Database\Seeders\AdminSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { $this->call([ \Modules\RoomManagement\Database\Seeders\AdminSeeder::class
    ]);
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
