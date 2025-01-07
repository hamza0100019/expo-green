<!-- filepath: /c:/xampp/htdocs/gestion-societe/resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Tableau de Bord')

@section('module-title', 'Tableau de Bord')

@section('content')
<div class="grid grid-cols-3 gap-6 mb-6">
    <!-- Carte des Stocks -->
    <div class="bg-white p-6 shadow rounded-lg border-t-4 border-blue-500">
        <div class="flex items-center">
            <div class="text-blue-500 bg-blue-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-xl font-bold text-gray-700">Stocks</h3>
                <p class="text-sm text-gray-500">Produits en stock : <span class="font-semibold text-gray-700">{{ $products_count }}</span></p>
                <p class="text-sm text-red-500">Produits faibles : <span class="font-semibold">{{ $low_stock_count }}</span></p>
            </div>
        </div>
    </div>

    <!-- Carte des Employés -->
    <div class="bg-white p-6 shadow rounded-lg border-t-4 border-green-500">
        <div class="flex items-center">
            <div class="text-green-500 bg-green-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 00-8 0v2m8 0a4 4 0 01-8 0m4 3v6m4-6a4 4 0 01-4 4m0 0a4 4 0 01-4-4" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-xl font-bold text-gray-700">Employés</h3>
                <p class="text-sm text-gray-500">Total Employés : <span class="font-semibold text-gray-700">{{ $employees_count }}</span></p>
                <p class="text-sm text-green-500">Présences Aujourd'hui : <span class="font-semibold">{{ $attendances_count }}</span></p>
            </div>
        </div>
    </div>

    <!-- Carte des Clients -->
    <div class="bg-white p-6 shadow rounded-lg border-t-4 border-yellow-500">
        <div class="flex items-center">
            <div class="text-yellow-500 bg-yellow-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 01-8 0M8 12a4 4 0 01-4 4M12 8v.01M12 4v.01" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-xl font-bold text-gray-700">Clients</h3>
                <p class="text-sm text-gray-500">Total Clients : <span class="font-semibold text-gray-700">{{ $clients_count }}</span></p>
                <p class="text-sm text-yellow-500">Commandes Actives : <span class="font-semibold">{{ $active_orders_count }}</span></p>
            </div>
        </div>
    </div>
</div>

<!-- Graphiques -->
<div class="grid grid-cols-2 gap-6">
    <div class="bg-white p-6 shadow rounded-lg">
        <h3 class="text-lg font-bold text-gray-700">Ventes Mensuelles</h3>
        <canvas id="salesChart" class="mt-4"></canvas>
    </div>
    <div class="bg-white p-6 shadow rounded-lg">
        <h3 class="text-lg font-bold text-gray-700">Présences Employés</h3>
        <canvas id="attendanceChart" class="mt-4"></canvas>
    </div>
</div>
@endsectionendanceChart" class="mt-4"></canvas>
    </div>
</div>
@endsection