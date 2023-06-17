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
}
