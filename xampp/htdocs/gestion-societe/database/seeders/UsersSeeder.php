<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crée 10 utilisateurs avec des données aléatoires
        User::factory()->count(10)->create();

        // Vérifie si l'utilisateur admin existe déjà
        if (!User::where('email', 'admin@example.com')->exists()) {
            // Ajoute un utilisateur admin spécifique
            User::factory()->create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'), // Mot de passe spécifique
                'role' => 'admin',
                'hire_date' => now(),
                'salary' => 5000.00,
            ]);
        }
    }
}
