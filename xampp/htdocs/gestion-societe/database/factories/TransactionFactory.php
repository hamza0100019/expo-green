<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;

class TransactionFactory extends Factory
{
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'user_id' => User::factory(),
            'type' => $this->faker->randomElement(['in', 'out']),
            'quantity' => $this->faker->numberBetween(1, 50),
        ];
    }
}
