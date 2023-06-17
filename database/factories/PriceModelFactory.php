<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PriceModel>
 */
class PriceModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => fake()->randomFloat(2, 0, 100),
            'hour_start' => fake()->numberBetween(0, 12),
            'hour_end' => fake()->numberBetween(12, 23),
        ];
    }
}
