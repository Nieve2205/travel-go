<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaquetesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/paquetes', [PaquetesController::class, 'index'])->name('paquetes.index');
Route::get('/paquetes/reserva/informacion', [PaquetesController::class, 'reserva_view'])->name('Paquetes.reserva');
Route::get('/Paquetes/reserva/{tab}', [PaquetesController::class, 'showTab'])->name('reserva.tab');

require __DIR__.'/auth.php';
