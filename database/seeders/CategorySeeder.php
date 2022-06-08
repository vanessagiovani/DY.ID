<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Television'
            ],
            [
                'id' => 2,
                'name' => 'Smartphone'
            ],
            [
                'id' => 3,
                'name' => 'Laptop'
            ]
        ]);
    }
}
