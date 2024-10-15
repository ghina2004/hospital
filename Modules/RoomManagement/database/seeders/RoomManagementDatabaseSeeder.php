<?php

namespace Modules\RoomManagement\Database\Seeders;

use Illuminate\Database\Seeder;

class RoomManagementDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $this->call([

             AdminSeeder::class
         ]);
    }
}
