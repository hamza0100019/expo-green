@extends('layouts.app')

@section('title', 'Gestion des Stocks')

@section('module-title', 'Produits en Stock')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Liste des Produits</h1>
    <a href="{{ route('stocks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ajouter un Produit</a>
</div>
<table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-4 text-left">Nom</th>
            <th class="p-4 text-left">Quantité</th>
            <th class="p-4 text-left">Prix</th>
            <th class="p-4 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr class="border-b">
            <td class="p-4">{{ $product->name }}</td>
            <td class="p-4">{{ $product->quantity }}</td>
            <td class="p-4">{{ $product->price }}</td>
            <td class="p-4">
                <a href="{{ route('stocks.edit', $product->id) }}" class="text-blue-500 hover:underline">Modifier</a>
                <form action="{{ route('stocks.destroy', $product->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
