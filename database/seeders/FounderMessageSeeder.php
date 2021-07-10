<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FounderMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('founder_messages')->insert([
            'id' => 1,
            'name' => 'Gyanti Chaubey',
            'description' => 'Ideas are easy, implementation is hard and we have team who takes tough calls to imply..',
            'job' => 'Founder & Chairperson',
            'founder_message_image' => 'b1QhYivZHY.jpg',
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
