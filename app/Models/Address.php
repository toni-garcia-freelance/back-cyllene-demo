<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    public $timestamps = true;

    protected $fillable = [
        'street',
        'city',
        'state',
        'zip',
        'latitude',
        'longitude'
    ];
}
