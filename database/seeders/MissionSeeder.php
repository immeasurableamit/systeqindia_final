<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('missions')->insert([
            'id' => 1,
            'title' => 'Mission Statement',
            'description' => 'Facility Management Services with technology backed sources.',
            'image' => 'icon-target',
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
