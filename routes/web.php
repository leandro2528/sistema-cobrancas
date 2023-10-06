<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\ChargeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [DashboardController::class, 'index'])->name('dashboards-index');

Route::prefix('/clients')->group(function() {
    Route::get('/', [ClientController::class, 'index'])->name('clients-index');
    Route::get('/cadastro', [ClientController::class, 'create'])->name('clients-create');
    Route::post('/', [ClientController::class, 'store'])->name('clients-store');
    Route::get('/clients/{id}edit', [ClientController::class, 'edit'])->name('clients-edit');
    Route::put('/clients/{id}/update', [ClientController::class, 'update'])->name('clients-update');
    Route::delete('/clients/{id}/delete', [ClientController::class, 'delete'])->name('clients-delete');
});

Route::prefix('/cobradores')->group(function() {
    Route::get('/', [CollectorController::class, 'index'])->name('collectors-index');
    Route::get('/create', [CollectorController::class, 'create'])->name('collectors-create');
    Route::post('/', [CollectorController::class, 'store'])->name('collectors-store');
    Route::get('/cobradores/{id}edit', [CollectorController::class, 'edit'])->name('collectors-edit');
    Route::put('cobradores/{id}/update', [CollectorController::class, 'update'])->name('collectors-update');
    Route::delete('cobradores/{id}/delete', [ CollectorController::class, 'delete'])->name('collectors-delete');
});

Route::prefix('/cobrancas')->group(function() {
    Route::get('/', [ChargeController::class, 'index'])->name('charges-index');
});
