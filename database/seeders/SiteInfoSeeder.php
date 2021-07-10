<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'short_description' => 'SYSTEQIndia is a technology-led facility management service provider in Bengaluru.

We are managing properties with complete transparency and towards cost optimization for the betterment of the Corporate, Industry, Apartment, and Villa Communities',
            'copyright' => 'Copyright © 2021 systeqindia. All rights reserved',
            'address' => 'No. 1827, 1st Floor, Door No.7, AECS Layout "A" Block, 60ft Road, Singasandra Village, Banglore, 560068',
            'city' => 'Banglore',
            'country' => 'India',
            'address_map' => '',
            'email' => 'crm@systeqindia.com',
            'phone' => '+91 7355275805',
            "flash_message" => "Pay 15% less Maintenance Charges",
            "marquee_message" => "SYSTEQ Facility Management & Security Services (India) Private Limited",
            "site_name" => "SYSTEQIndia",
            "page_title" => "SYSTEQ India is a technology-led facility management service provider.",
            "site_description" => "We are managing properties with complete transparency and towards cost optimization for the betterment of the Corporate, Industry, Apartment, and Villa.",
            "site_keywords" => "SYSTEQ,Industry,Apartment",
            'favicon' => 'xe7iRTJrou.png',
            'admin_logo' => 'SGFCmGRzmD.png',
            'admin_small_logo' => 'dk3gTwOWwR.png',
            'site_logo' => 'jOkQZeYUVv.png',
            'facebook' => 'https://www.facebook.com/Systeq-Facility-Management-Security-Services-India-Private-Limited-112457930879340/',
            'whatsapp' => '+917355275805',
            'instagram' => '',
            'linkedin' => '',
        ]);
    }
}
