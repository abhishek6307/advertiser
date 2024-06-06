<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = ['advertiser_id', 'location_id', 'ad_spend', 'business_crypto_acquired'];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
