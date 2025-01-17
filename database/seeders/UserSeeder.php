<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@ehb.be',
            'password' => bcrypt('Password!321'),
            'role' => 'admin',
        ]);
    }
}
