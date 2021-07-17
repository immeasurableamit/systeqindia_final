<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'id' => 1,
            'question' => 'What is an Integrated Facility Management Services?',
            'answer' => 'Integrated Facility Management Services, also known as IFM, is one of the best ways to consolidate all services under a single management team and contract. The core intent of integrated facilities management services is to streamline communications and make everyday operations easier, deliver results quickly.',
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('faqs')->insert([
            'id' => 2,
            'question' => 'What do you mean by Technology driven facility management services?',
            'answer' => 'We use technology to monitor & control the daily operations. Our cloud based software tailored to give insights on the operational aspects of the facility be it power & water management, asset management, attendance management & tasks management etc.',
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
