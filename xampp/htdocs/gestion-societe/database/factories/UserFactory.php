<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Mot de passe par défaut
            'role' => $this->faker->randomElement(['admin', 'employee']),
            'hire_date' => $this->faker->optional()->date(),
            'salary' => $this->faker->optional()->randomFloat(2, 2000, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
