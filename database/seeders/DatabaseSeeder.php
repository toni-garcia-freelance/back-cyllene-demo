<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        $this->call([ AddressSeeder::class]);
        $this->call([ PriceSeeder::class]);
        $this->call([ StationChargingSeeder::class]);
        $this->call([ CommentSeeder::class]);
        $this->call([ StationChargingHasPriceSeeder::class]);
    }
}
