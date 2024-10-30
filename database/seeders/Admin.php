<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    public function run()
    {
      User::create([
            'name' => 'Jale', 
            'email' => 'jalefetaliyeva@gmail.com', 
            'password' => bcrypt('jale5952262'), 
            'role' => 'admin', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
