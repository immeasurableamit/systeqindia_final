<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => '',
            'email' => 'admin@systeqindia.com',
            'password' => Hash::make('qawsed53'),
            'is_admin' => 1,
            'email_verified_at' => '2021-06-09 06:29:35',
            'phone' => '+91 7355275805',
            'address' => 'No. 1827, 1st Floor, Door No.7, AECS Layout "A" Block, 60ft Road, Singasandra Village, Banglore, 560068',
            'created_at' => now(),
        ]);
    }
}
