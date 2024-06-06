<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['advertiser_id', 'name', 'coordinates'];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
