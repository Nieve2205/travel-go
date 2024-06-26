<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaquetesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\Cors;
use App\Http\Controllers\FlightController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paquetes', [PaquetesController::class, 'index'])->name('paquetes.index');
Route::get('/paquetes/reserva/informacion', [PaquetesController::class, 'reserva_view'])->name('Paquetes.reserva');
Route::get('/Paquetes/reserva/{tab}', [PaquetesController::class, 'showTab'])->name('reserva.tab');

Route::get('/flights', [FlightController::class, 'showFlightsPage']);
Route::get('/flights/{id}/dates', [FlightController::class, 'getFlightDates']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/buscar', [SearchController::class, 'search'])->name('search');
Route::post('/crear-paquete', [PackageController::class, 'createPackage'])->name('create.package');
Route::get('/pago', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
Route::get('/pago/tarjeta', [PaymentController::class, 'showCardPage'])->name('payment.card');
Route::post('/pago/procesar', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/pago/exito', function() {
    return 'Pago exitoso'; // Define una vista adecuada para el éxito del pago
})->name('payment.success');

require __DIR__.'/auth.php';