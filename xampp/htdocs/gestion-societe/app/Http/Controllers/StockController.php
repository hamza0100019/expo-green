<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Afficher la liste des produits en stock.
     */
    public function index()
    {
        $products = Product::all();
        return view('stock.index', compact('products'));
    }

    /**
     * Afficher le formulaire pour ajouter un produit.
     */
    public function create()
    {
        return view('stock.create');
    }

    /**
     * Enregistrer un nouveau produit dans la base de données.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'expiration_date' => 'nullable|date',
        ]);

        Product::create($validated);

        return redirect()->route('stocks.index')->with('success', 'Produit ajouté avec succès.');
    }

    /**
     * Modifier un produit.
     */
    public function edit(Product $product)
    {
        return view('stock.edit', compact('product'));
    }

    /**
     * Mettre à jour un produit dans la base de données.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'expiration_date' => 'nullable|date',
        ]);

        $product->update($validated);

        return redirect()->route('stocks.index')->with('success', 'Produit mis à jour avec succès.');
    }

    /**
     * Supprimer un produit.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('stocks.index')->with('success', 'Produit supprimé avec succès.');
    }
}
