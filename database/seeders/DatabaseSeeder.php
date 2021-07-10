<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CreateUsersSeeder::class,
            SiteInfoSeeder::class,
            MissionSeeder::class,
            TeamsSeeder::class,
            ServiceSeeder::class,
            WorkingAreasSeeder::class,
            SliderServiceSeeder::class,
            SliderSeeder::class,
            AboutSeeder::class,
            FounderMessageSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
