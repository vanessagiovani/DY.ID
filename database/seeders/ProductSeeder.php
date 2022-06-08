<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Samsung 32 HD',
                'description' => 'Wide Color Enhancer, Connect Share Transfer HD',
                'price' => '3025000',
                'category_id' => 1,
                'photo' => 'Samsung32HD.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Iphone XR',
                'description' => 'Full screen design, Liquid Retina display. TrueDepth camera, Face ID and A12 Bionic',
                'price' => '5950000',
                'category_id' => 2,
                'photo' => 'iphonexr.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Iphone 11',
                'description' => 'The curved corners follow a beautiful curved design, and they are all within a standard rectangle',
                'price' => '10770000',
                'category_id' => 2,
                'photo' => 'iphone11.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Acer Swift',
                'description' => 'Disrupt the status quo with the powerful performance of the 1.37 kg',
                'price' => '12594000',
                'category_id' => 3,
                'photo' => 'acerswift.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Asus ROG',
                'description' => 'The first ROG motherboards made hardcore',
                'price' => '14449000',
                'category_id' => 3,
                'photo' => 'asusrog.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Iphone XS',
                'description' => 'Features 5.8* display, Apple A12 Bionic chipset',
                'price' => '4845000',
                'category_id' => 2,
                'photo' => 'iphonexs.jpg'
            ],
            [
                'id' => 7,
                'name' => 'Asus TUF',
                'description' => 'ASUS TUF has 1TB Ready Stock!',
                'price' => '10300000',
                'category_id' => 3,
                'photo' => 'asustuf.jpg'
            ]
        ]);
    }
}
