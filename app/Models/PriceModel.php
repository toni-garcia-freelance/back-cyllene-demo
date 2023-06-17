<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    use HasFactory;

    
    protected $table = 'price';

    public $timestamps = false;

    protected $fillable = [
        'price',
        'hour_start',
        'hour_end'
    ];
}
