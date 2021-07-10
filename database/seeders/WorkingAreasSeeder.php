<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('working_areas')->insert([
            'id' => 1,
            'title' => 'Residential',
            'description' => 'We provide services in all the Residential Properties like villas, apartments, bungalow, duplex, private properties etc.',
            'image' => 'KWNgqixzwc.jpg',
            'icon' => 'icon-architecture-and-city1',
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('working_areas')->insert([
            'id' => 2,
            'title' => 'Commercial',
            'description' => 'We provide services in tech parks, offices and any commercial complex.',
            'image' => 'AMasCZjnUE.jpg',
            'icon' => 'icon-shop',
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('working_areas')->insert([
            'id' => 3,
            'title' => 'Industries',
            'description' => 'We provide services in small and large scale industries.',
            'image' => 'EfxnD0rUoi.jpg',
            'icon' => 'icon-company',
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
