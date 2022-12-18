<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrator',
            'email' => 'ecommerce@erwininteractive.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'resr@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'is_admin' => false
        ]);
    }
}
