<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationCharging extends Model
{
    use HasFactory;

    protected $table = 'station_charging';

    public $timestamps = true;

    protected $fillable = [
        'active',
        'number_of_charging',
        'address_id'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'station_charging_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function prices()
    {
        return $this->belongsToMany(Price::class, 'station_charging_has_price', 'station_charging_id', 'price_id');
    }
}
