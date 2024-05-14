<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', Controllers\HomeController::class)->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/services', [Controllers\ServiceController::class, 'index'])->name('services')->middleware('auth');
Route::get('/services/details', [Controllers\ServiceController::class, 'show'])->name('services.details')->middleware('auth');

Route::get('/myorders', [Controllers\MyorderController::class, 'index'])->name('myorders')->middleware('auth');

Route::get('/myorders/notpaid', function () {
    return view('myOrder.notpaid');
})->name('myorders.notpaid')->middleware('auth');

Route::get('/myorders/onprocess', fn() => view('myOrder.process'))->name('myorders.onprocess')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
