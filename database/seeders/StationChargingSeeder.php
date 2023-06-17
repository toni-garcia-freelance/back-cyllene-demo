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
        StationCharging::factory(10)->create();
    }
}
