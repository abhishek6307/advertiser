<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdSeeder extends Seeder
{
    public function run()
    {
        // Truncate table
        Ad::truncate();

        // Insert sample data
        Ad::create([
            'ad_spend' => 100.00,
            'business_crypto_acquired' => 50.00,
        ]);

        Ad::create([
            'ad_spend' => 150.00,
            'business_crypto_acquired' => 75.00,
        ]);

        Ad::create([
            'ad_spend' => 200.00,
            'business_crypto_acquired' => 100.00,
        ]);
    }
}
