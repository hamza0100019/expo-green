<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        // Récupérer les données nécessaires pour les statistiques
        $products_count = Product::count(); // Total des produits
        $low_stock_count = Product::where('quantity', '<=', 10)->count(); // Produits faibles
        $employees_count = User::count(); // Total des employés
        $attendances_count = User::whereHas('attendances', function ($query) {
            $query->whereDate('date', today())->where('present', true);
        })->count(); // Employés présents aujourd'hui
        $clients_count = Client::count(); // Total des clients
        $active_orders_count = 0; // Exemple pour commandes actives (peut être ajusté selon votre structure)

        // Passer les données à la vue
        return view('dashboard', compact(
            'products_count',
            'low_stock_count',
            'employees_count',
            'attendances_count',
            'clients_count',
            'active_orders_count'
        ));
    }
}
