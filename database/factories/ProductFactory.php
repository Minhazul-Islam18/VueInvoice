<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->words(5, true);
        $uniqueNumber = $this->faker->unique()->numberBetween(10, 1000);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->words(20, true),
            'item_code' => 'IC-100' . $uniqueNumber,
            'unit_price' => mt_rand(20, 200)
        ];
    }
}
