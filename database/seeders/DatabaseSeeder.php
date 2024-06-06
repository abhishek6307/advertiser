<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AdvertiserSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(AdSeeder::class);
    }
}
