<!-- filepath: /c:/xampp/htdocs/gestion-societe/resources/views/admin/index.blade.php -->
@extends('layouts.app')

@section('title', 'Tableau de Bord Admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tableau de Bord Admin</h1>
    <div class="grid grid-cols-2 gap-4">
        <div class="bg-white p-6 shadow rounded-lg">
            <h2 class="text-xl font-bold">Utilisateurs</h2>
            <p class="text-gray-700">Nombre total d'utilisateurs : {{ $usersCount }}</p>
        </div>
        <div class="bg-white p-6 shadow rounded-lg">
            <h2 class="text-xl font-bold">Produits</h2>
            <p class="text-gray-700">Nombre total de produits : {{ $productsCount }}</p>
        </div>
    </div>
</div>
@endsection