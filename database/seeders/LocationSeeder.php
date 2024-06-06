<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run()
    {
        // Truncate table
        Location::truncate();

        // Insert sample data
        Location::create([
            'name' => 'Location A',
            'coordinates' => '40.7128° N, 74.0060° W',
        ]);

        Location::create([
            'name' => 'Location B',
            'coordinates' => '34.0522° N, 118.2437° W',
        ]);

        Location::create([
            'name' => 'Location C',
            'coordinates' => '51.5074° N, 0.1278° W',
        ]);
    }
}
