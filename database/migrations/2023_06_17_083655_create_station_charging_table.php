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
        Schema::create('station_charging', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->integer('number_of_charging')->default(0);
            $table->bigInteger('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('station_charging');
    }
};
