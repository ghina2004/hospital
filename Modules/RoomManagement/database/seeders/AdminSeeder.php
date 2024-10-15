<?php

namespace Modules\RoomManagement\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\RoomManagement\Models\admin;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
       admin::query()->create([
           'user_name'=> 'fadi_1919',
          'password'=> Hash::make('far44888')
       ]);
    }
}
