<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationChargingHasPrice extends Model
{
    use HasFactory;

    protected $table = 'station_charging_has_price';

    public $timestamps = false;

    protected $fillable = [
        'station_charging_id',
        'price_id'
    ];
}
