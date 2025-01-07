<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    /**
     * Affiche le tableau de bord de l'administrateur.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Exemple de données à afficher sur le tableau de bord de l'administrateur
        $usersCount = User::count();
        $productsCount = Product::count();

        return view('admin.index', compact('usersCount', 'productsCount'));
    }

    /**
     * Affiche la liste des utilisateurs.
     *
     * @return \Illuminate\View\View
     */
    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    /**
     * Affiche la liste des produits.
     *
     * @return \Illuminate\View\View
     */
    public function products()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

}
