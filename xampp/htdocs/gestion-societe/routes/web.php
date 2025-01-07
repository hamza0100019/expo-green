<?php
use App\Http\Controllers\StockController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Routes d'authentification
require __DIR__.'/auth.php';

// Route pour l'index des rapports
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

// Route pour la déconnexion
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes pour les administrateurs
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
    // Ajoutez d'autres routes pour les administrateurs ici
});

// Routes pour les utilisateurs
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', [EmployeeController::class, 'index'])->name('user.index');
    // Ajoutez d'autres routes pour les utilisateurs ici
});

// Routes pour les ressources
Route::resource('employees', EmployeeController::class);
Route::resource('stocks', StockController::class);
Route::resource('clients', ClientController::class);

// Route pour le tableau de bord
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
