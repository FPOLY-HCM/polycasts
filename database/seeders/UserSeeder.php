<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();

        User::create([
            'username' => 'admin',
            'email' => 'admin@polycasts.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::factory(100)
            ->has(Profile::factory(), 'profile')
            ->create();
    }
}
