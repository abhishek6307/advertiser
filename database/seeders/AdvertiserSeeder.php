<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advertiser;

class AdvertiserSeeder extends Seeder
{
    public function run()
    {
        // Truncate table
        Advertiser::truncate();

        // Insert sample data
        Advertiser::create([
            'name' => 'Advertiser 1',
            'email' => 'advertiser1@example.com',
            'password' => bcrypt('password1'),
        ]);

        Advertiser::create([
            'name' => 'Advertiser 2',
            'email' => 'advertiser2@example.com',
            'password' => bcrypt('password2'),
        ]);
    }
}
