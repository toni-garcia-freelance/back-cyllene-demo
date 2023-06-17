<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getAllZipCode(){
        return Address::select('zip')
            ->orderBy('zip', 'asc')
            ->groupBy('zip')
            ->get();
    }

    public function getAllCity(){
        return Address::select('city')
                ->orderBy('city', 'asc')
                ->groupBy('city')
                ->get();
    }
}
