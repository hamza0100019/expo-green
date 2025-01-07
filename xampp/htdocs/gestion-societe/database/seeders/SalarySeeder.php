<?php

namespace Database\Seeders;

use App\Models\Salary;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    public function run()
    {
        Salary::factory()->count(15)->create(); // Crée 15 enregistrements de paie
    }
}

