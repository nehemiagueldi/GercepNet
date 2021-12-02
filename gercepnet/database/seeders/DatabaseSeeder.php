<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user' . '@gmail.com',
                'role' => 'user',
                'image' => 'fotoprofile/qaInEUXJNqHJ0Y12gaRkAaMx32EaisxG45aD0IDS.png',
                'captcha' => 'mn6jy4',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin' . '@gmail.com',
                'role' => 'admin',
                'image' => 'fotoprofile/KGaztKRFwMA2OhmDyTGYmTYuU2G2EQ4nLDn7qYhY.jpg',
                'captcha' => 'bbug78',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'management',
                'username' => 'management',
                'email' => 'management' . '@gmail.com',
                'role' => 'management',
                'image' => 'fotoprofile/YfuGoi8OZbvKGaLIDldFonGIMxJMXi8nS7lYtwvP.jpg',
                'captcha' => 'b3b2q8',
                'password' => Hash::make('12345'),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
