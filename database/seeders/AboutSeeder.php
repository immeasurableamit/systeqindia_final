<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'id' => 1,
            'title' => 'about company',
            'description' => '<div class="sec-title" style="margin: -5px 0px 0px; padding: 0px 0px 44px; border: none; outline: none; font-size: 15px; position: relative; color: rgb(130, 130, 130); font-family: Rubik, sans-serif;"><div class="title" style="margin: 0px; padding: 0px; border: none; outline: none; font-size: 36px; position: relative; color: rgb(39, 40, 44); line-height: 44px; font-weight: 700; text-transform: uppercase; font-family: Poppins, sans-serif;">SYSTEQ FACILITY MANAGEMENT<br style="margin: 0px; padding: 0px; border: none; outline: none;">&amp; SECURITY SERVICES&nbsp;<span style="margin: 0px; padding: 0px; border: none; outline: none; font-weight: 400;">WELCOMES YOU!</span></div></div><div class="inner-content" style="margin: 0px; padding: 0px; border: none; outline: none; font-size: 15px; position: relative; color: rgb(130, 130, 130); font-family: Rubik, sans-serif;"><div class="text" style="margin: 0px; padding: 0px 0px 26px; border: none; outline: none;"><p style="margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none;">SYSTEQIndia is a technology-led facility management service provider in Bengaluru.</p><p style="margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none;">We are managing properties with complete transparency and towards cost optimization for betterment of the Corporate, Industry, Apartment and Villa Communities.</p><p style="margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none;">We have skilled professionals having good experience and diverse skills.</p><p style="margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none;">SYSTEQIndia works towards creating a safe, secure and clean environment.</p></div></div>',
            'created_at' => now(),
            'created_by' => 1,
        ]);
    }
}
