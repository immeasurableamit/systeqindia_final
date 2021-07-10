<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider_services')->insert([
            'id' => 1,
            'title' => 'soft services',
            'description' => 'Housekeeping, Gardening, Landscaping, Waste Management, Tank Cleaning, Organic waste composting, Pest control services',
            'slider_image' => 'icon-concept',
            'order' => 1,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('slider_services')->insert([
            'id' => 2,
            'title' => 'technical & mechanical services',
            'description' => 'Electrical / Plumbing / Fire Hydrants, HVAC, Lifts, Operation & Maintenance of Water Treatment (STP / WTP / RO) Plants, Swimming Pool Operation',
            'slider_image' => 'icon-scheme',
            'order' => 2,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('slider_services')->insert([
            'id' => 3,
            'title' => 'administrative	',
            'description' => 'Facility Manager, AFM, Technical Executives, Customer Relationship Manager& Help Desk Executive,Security Personnel, Accountant, Auditor etc',
            'slider_image' => 'icon-cupboard',
            'order' => 3,
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
