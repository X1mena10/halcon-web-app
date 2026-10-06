<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'stock' => $this->faker->numberBetween(10, 500),
            'unit_price' => $this->faker->randomFloat(2, 5, 200),
        ];
    }
}
