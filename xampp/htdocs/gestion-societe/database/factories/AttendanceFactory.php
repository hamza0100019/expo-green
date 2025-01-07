<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class AttendanceFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->date(),
            'present' => $this->faker->boolean(80), // 80% de chances d'être présent
            'notes' => $this->faker->optional()->sentence(),
        ];
    }
}
