<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\StationCharging;
use App\Models\StationChargingHasPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationChargingHasPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stations = StationCharging::all();
        foreach($stations as $station) {
            $price1 = Price::all()->random();
            $price2 = Price::all()->random();
            StationChargingHasPrice::create([
                'station_charging_id' => $station->id,
                'price_id' => $price1->id,
            ]);
            StationChargingHasPrice::create([
                'station_charging_id' => $station->id,
                'price_id' => $price2->id,
            ]);
        }
    }
}
