<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Vanny',
                'gender' => 'F',
                'address' => '',
                'email' => 'vani@mail.com',
                'password' => bcrypt('vani123'),
                'role' => 'member'
            ],
            [
                'name' => 'Admin',
                'gender' => 'M',
                'address' => '',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ]
        ]);
    }
}
