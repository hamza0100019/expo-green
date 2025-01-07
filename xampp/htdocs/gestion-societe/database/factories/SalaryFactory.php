<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class SalaryFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'amount' => $this->faker->randomFloat(2, 2000, 10000),
            'bonus' => $this->faker->randomFloat(2, 100, 500),
            'deduction' => $this->faker->randomFloat(2, 0, 200),
            'pay_date' => $this->faker->date(),
        ];
    }
}
