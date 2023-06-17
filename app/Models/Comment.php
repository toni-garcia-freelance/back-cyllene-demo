<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    public $timestamps = true;

    protected $fillable = [
        'content',
        'title',
        'station_charging_id'
    ];

    public function stationCharging()
    {
        return $this->belongsTo(StationCharging::class, 'station_charging_id');
    }
}
