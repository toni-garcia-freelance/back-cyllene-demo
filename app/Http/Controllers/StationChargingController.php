<?php

namespace App\Http\Controllers;

use App\Models\StationCharging;
use Illuminate\Http\Request;

class StationChargingController extends Controller
{
    public function getStationsCharging(Request $request){
        if($request->has('zip')){
            return StationCharging::with('address')
                ->whereHas('address', function($query) use ($request){
                    $query->where('zip', $request->zip);
                })
                ->get();
        } else if($request->has('city')){
            return StationCharging::with('address')
                ->whereHas('address', function($query) use ($request){
                    $query->where('city', $request->city);
                })
                ->get();
        } 
        return StationCharging::with('address')->get();
    }

    public function getStationsChargingById($id){
        if(empty($id)){
            return response()->json(['error' => 'id is null'], 400);
        }
        return StationCharging::with('comments', 'address', 'prices')->find($id);
    }
}
