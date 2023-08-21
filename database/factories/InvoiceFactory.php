<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
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
            'number' => $uniqueNumber,
            'customer_id' => function () {
                return \App\Models\Customer::factory()->create()->id;
            },
            'date' => $this->faker->date,
            'due_date' => $this->faker->date,
            'reference' => 'REF-' . rand(20, 90),
            'terms_and_conditions' => $this->faker->words(30, true),
            'subtotal' => $this->faker->numberBetween(10, 500),
            'total' => $this->faker->numberBetween(10, 500),
            'discount' => $this->faker->numberBetween(20, 50),
        ];
    }
}
