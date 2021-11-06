<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_gallery')->insert([
            'title' => 'The Deer',
            'image'=>'deer.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'The fish',
            'image'=>'discus-fish.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'The fox',
            'image'=>'fox.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'Deer',
            'image'=>'fallow-deer.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'Iceland',
            'image'=>'iceland.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'Leopard',
            'image'=>'leopard.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'The lion',
            'image'=>'lion-3012515_1920.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'The owl',
            'image'=>'owl.jpg',
        ]);
        DB::table('image_gallery')->insert([
            'title' => 'The tiger',
            'image'=>'tiger.jpg',
        ]);
    }
}
