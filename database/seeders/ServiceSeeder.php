<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'id' => 1,
            'title' => 'house keeping',
            'description' => 'Checklist & schedules for Housekeeping in terms of daily , weekly & monthly is customized for the facility. Daily briefing & monthly training given to staffs to maintain service quality.',
            'image' => 'oJPK2ccXqJ.jpg',
            'order' => 1,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('services')->insert([
            'id' => 2,
            'title' => 'gardening maintenance',
            'description' => 'Gardeners does regular watering, deweeding, lawn leveling, pruning, trimming and dead plants removal as per checklist, horticulturists maintains in house nursery at every facility.',
            'image' => '41wumOSOoc.jpg',
            'order' => 2,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('services')->insert([
            'id' => 3,
            'title' => 'electrical maintenance',
            'description' => 'Certified and skilled electricians perform preventive maintenance , earthing checks, operation of DGs and energy audits ensuring the power consumption within limits.',
            'image' => 'JQ4ufs0i9P.jpg',
            'order' => 3,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('services')->insert([
            'id' => 4,
            'title' => 'plumbing maintenance',
            'description' => 'Plumbers monitor water levels in all the tanks, leakage arresting, tanker procurement and ensure round the clock water supply to residents.',
            'image' => 'UBjYs1wAh9.jpg',
            'order' => 4,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('services')->insert([
            'id' => 5,
            'title' => 'swimming pool maintenance',
            'description' => 'Swimming pool operation by trained operators maintain PH & Chlorine levels in water in an ideal range. Proactive steps taken to maintain water quality as per seasonal requirements.',
            'image' => 'hexe6RtH6f.jpg',
            'order' => 5,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('services')->insert([
            'id' => 6,
            'title' => 'security services',
            'description' => 'We deploy only PSARA certified security agency and ensure effective guidelines & process in place for gate management. Daily Briefing, training & communication tools will be provided.',
            'image' => 'yqqMBnLUJG.jpg',
            'order' => 6,
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
