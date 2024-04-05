<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '10000',
                'description' => 'Smart phone with 4gb ram and much more featurs',
                'category' => 'Mobile',
                'gallery' => 'https://images.unsplash.com/photo-1610945264803-c22b62d2a7b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',


            ], [
                'name' => 'Oppo Mobile',
                'price' => '10000',
                'description' => 'Smart phone with 8gb ram and much more featurs',
                'category' => 'Mobile',
                'gallery' => 'https://www.ytechb.com/wp-content/uploads/2022/03/Oppo-A76-5G-Wallpapers-768x488.webp',
            ], [
                'name' => 'Smart Tv',
                'price' => '50000',
                'description' => 'Smart tv with more featurs',
                'category' => 'Tv',
                'gallery' => 'https://www.shutterstock.com/shutterstock/photos/208580167/display_1500/stock-photo-creative-abstract-digital-multimedia-entertainment-and-media-television-broadcasting-internet-208580167.jpg',
            ]

        ]);
    }
}
