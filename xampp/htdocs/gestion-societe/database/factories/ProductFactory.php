<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Supplier;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'quantity' => $this->faker->numberBetween(1, 100),
            'expiration_date' => $this->faker->optional()->date(),
            'supplier_id' => Supplier::factory(), // Associe un fournisseur
        ];
    }
}
