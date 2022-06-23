<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Admin',
            'email' => 'admin@laracamp.com',
            'email_verified_at' => date('Y:m:d h:i:s', time()),
            'password' => \bcrypt('password'),
            'is_admin' => true
        ]);
        User::create([
            'name' => 'Admin2',
            'email' => 'admin2@laracamp.com',
            'email_verified_at' => date('Y:m:d h:i:s', time()),
            'password' => \md5('password'),
            'is_admin' => true
        ]);
    }
}
