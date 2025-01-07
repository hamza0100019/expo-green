<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    public function run()
    {
        Supplier::factory()->count(10)->create(); // Crée 10 fournisseurs
    }
}
