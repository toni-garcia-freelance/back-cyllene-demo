<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('station_charging_has_price', function (Blueprint $table) {
            $table->bigInteger('station_charging_id')->unsigned();
            $table->foreign('station_charging_id')->references('id')->on('station_charging');
            $table->bigInteger('price_id')->unsigned();
            $table->foreign('price_id')->references('id')->on('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('station_charging_has_price');
    }
};
