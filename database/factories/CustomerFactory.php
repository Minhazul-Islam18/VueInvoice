<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->name,
            'lastname' => $this->faker->name,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->email,
            'phone' => $this->faker->unique()->phoneNumber,
        ];
    }
}
