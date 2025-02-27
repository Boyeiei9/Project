<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'boyzaa2547@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('chaiwat1357'),
                'role' => 'admin'
            ]
        );
    }
}

