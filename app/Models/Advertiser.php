<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
