<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'id' => 1,
            'title' => 'HOUSE KEEPING MAINTENANCE',
            'description' => 'HOUSE KEEPING MAINTENANCE',
            'slider_image' => 'g1i5CjAj31.jpg',
            'order' => 1,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('sliders')->insert([
            'id' => 2,
            'title' => 'GARDENING MAINTENANCE',
            'description' => 'GARDENING MAINTENANCE',
            'slider_image' => '2Zw2vJco1t.jpg',
            'order' => 2,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('sliders')->insert([
            'id' => 3,
            'title' => 'ELECTRICAL MAINTENANCE',
            'description' => 'ELECTRICAL MAINTENANCE',
            'slider_image' => '7O2l2IzrFL.png',
            'order' => 3,
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
