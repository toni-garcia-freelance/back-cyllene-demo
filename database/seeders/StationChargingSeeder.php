<?php

namespace Database\Seeders;

use App\Models\StationCharging;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationChargingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = \App\Models\Address::all();
        foreach($addresses as $address) {
            StationCharging::factory()
                ->create(['address_id' => $address->id]);
        }
    }
}
