<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'id' => 1,
            'name' => 'Nitesh Chaubey',
            'job' => 'Managing Director',
            'description' => 'Nitesh Chaubey is Managing Director of SYSTEQIndia, he comes with years of business experience. He holds bachelor of technology degree in Civil Engineering.',
            'image' => 's00Y3EZgw7.jpg',
            'order' => 1,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('teams')->insert([
            'id' => 2,
            'name' => 'Duraswamy Shetty',
            'job' => 'Operation Manager',
            'description' => 'Duraswamy Shetty is operational manager of SYSTEQIndia, he have more than 10 years of experience in Facility Management Field.',
            'image' => 'PYPW6nPuvn.jpg',
            'order' => 2,
            'created_at' => now(),
            'created_by' => 1,
        ]);

        DB::table('teams')->insert([
            'id' => 3,
            'name' => 'Bijay Chaubey',
            'job' => 'Advisor',
            'description' => 'Bijay Chaubey is Advisor to the team of SYSTEQIndia, he is having more than 35 years of business experience in the field of real estate and development.',
            'image' => 'FpuiBpzK4r.jpg',
            'order' => 3,
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
